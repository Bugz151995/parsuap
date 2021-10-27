function toggleVisibility(id, btn) {
  var input = document.getElementById(id);
  if (input.getAttribute('type') === "password") {
    input.setAttribute('type', 'text');
    btn.firstChild.classList.remove('fa-eye');
    btn.firstChild.classList.add('fa-eye-slash');
  } else {
    input.setAttribute('type', 'password');
    btn.firstChild.classList.remove('fa-eye-slash');
    btn.firstChild.classList.add('fa-eye');
  }
}