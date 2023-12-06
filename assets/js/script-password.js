const passwordInput = document.getElementById('password');
const showPassword = document.getElementById('showPassword');

showPassword.addEventListener('click', function () {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    showPassword.classList.remove("fa-solid fa-eye-slash");
    showPassword.classList.add("fa-solid fa-eye");
  } else {
    passwordInput.type = 'password';
    showPassword.classList.remove('fa-solid fa-eye');
    showPassword.classList.add('fa-solid fa-eye-slash');
  }
});