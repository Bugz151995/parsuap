const togglebtn = document.getElementById('__search_sm_toggle_btn');
const search = document.getElementById('search_sm');
togglebtn.addEventListener('click', () => {
  search.classList.toggle('toggled');
});