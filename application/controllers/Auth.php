<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('anggota');
        }
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email',
            [
                'required' => 'Email wajib diisi!',
                'valid_email' => 'Harus diisi email yang valid!'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Kata sandi wajib diisi!'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Halaman Masuk & Daftar';

            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //Pengecekan jika ada user
        if ($user) {
            //Pengecekan jika user aktif
            if ($user['is_active'] == 1) {
                //Pengecekan kata sandi
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    //Pengaturaan session
                    $this->session->set_userdata($data);
                    //Pengaturan role
                    if ($user['role_id'] == 1) {
                        if ($this->input->post('save_id')) {
                            setcookie('email', $email, time() + 60 * 60 * 24 * 30);
                            setcookie('password', $password, time() + 60 * 60 * 24 * 30);
                        } else {
                            setcookie('email', '');
                            setcookie('password', '');
                        }
                        redirect('administrator');
                    } elseif ($user['role_id'] == 2) {
                        if ($this->input->post('save_id')) {
                            setcookie('email', $email, time() + 60 * 60 * 24 * 30);
                            setcookie('password', $password, time() + 60 * 60 * 24 * 30);
                        } else {
                            setcookie('email', '');
                            setcookie('password', '');
                        }
                        redirect('anggota');
                    } else {
                        redirect('auth/blocked');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email ini belum diaktifkan!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('anggota');
        }

        $this->form_validation->set_rules(
            'name',
            'Name',
            'required|trim',
            [
                'required' => 'Nama lengkap wajib diisi!'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'required' => 'Email wajib diisi!',
                'valid_email' => 'Harus diisi email yang valid!',
                'is_unique' => 'Email ini sudah terdaftar!'
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[4]|matches[password2]',
            [
                'required' => 'Kata sandi wajib diisi!',
                'matches' => 'Kata sandi tidak sama!',
                'min_length' => 'Kata sandi terlalu pendek!'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|trim|matches[password1]',
            [
                'required' => 'Ulangi kata sandi wajib diisi!',
                'matches' => 'Kata sandi tidak sama!',
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Halaman Masuk & Daftar';

            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('templates/auth_footer');
        } else {
            $name = $this->input->post('name', true);
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($name),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 0,
                'date_created' => time()
            ];

            // Siapkan token
            function base64url_encode($data, $pad = null)
            {
                $data = str_replace(array('+', '/'), array('-', '_'), base64_encode($data));
                if (!$pad) {
                    $data = rtrim($data, '=');
                }
                return $data;
            }

            function base64url_decode($data)
            {
                return base64_decode(str_replace(array('-', '_'), array('+', '/'), $data));
            }

            $token = base64url_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            // Kirim email
            $this->_sendEmail($token, 'verify');



            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun Anda sudah dibuat. Silakan hubungi administrator untuk mengaktifkan akun Anda!</div>');
            redirect('auth');
        }
    }

    private function _sendEmail($token, $type)
    {
        $name = $this->input->post('name', true);
        $email = $this->input->post('email', true);
        $adminEmail = 'whybaik2@gmail.com';
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => $adminEmail,
            'smtp_pass' => 'vwrt meio qatm vrsn',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from($adminEmail, 'Administator');
        $this->email->to($adminEmail);

        if ($type == 'verify') {
            $this->email->subject('Verifikasi Akun');
            $this->email->message('<h2>Aktivasi Akun</h2>
            <p>Baru saja ada akun baru atas nama <strong>' . $name . '</strong> dengan alamat email ' . $email . '.</p>
            <p>Jika Anda ingin mengaktifkan akun tersebut, harap klik tautan di bawah ini:</p>
            <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '& token=' . urldecode($token) . '">Aktivasi</a>
            <p>Terima kasih atas tanggapan yang Anda berikan!</p>
            <p>Salam,<br>Tim Website Kami</p>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Kata Sandi');
            $this->email->message('Klik link ini untuk mereset kata sandi Anda : <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '& token=' . urldecode($token) . '">Reset Kata Sandi</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        //Pengecekan email
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //Pengecekan jika ada user
        if ($user) {
            //Pengecekan jika token benar
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            //Pengecekan jika ada token
            if ($user_token) {
                //Pengecekan jika token belum kadaluarsa
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    //Pengaktifan akun
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    //Penghapusan token
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' telah diaktifkan! Silakan masuk.</div>');
                    redirect('auth');
                } else {
                    //Penghapusan user dan token
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token kadaluarsa.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token salah.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Email salah.</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah keluar!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['title'] = 'Halaman Terblokir';

        $this->load->view('auth/blocked', $data);
    }
}
