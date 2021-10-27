const page = document.querySelectorAll('.pagination>li');
const link = document.querySelectorAll('.pagination>li>a');
page.forEach(function(el) {
  el.classList.add('page-item');
});
link.forEach(function(el) {
  el.classList.add('page-link');
});