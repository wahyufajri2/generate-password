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
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! akun Anda sudah dibuat. Silakan masuk!</div>');
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
