var topnavbar = document.getElementById('toggle_search');
var search = document.getElementById('search');

topnavbar.addEventListener('click', () => {
  var disp = search.style.display;

  if(disp == 'block') {
    search.style.display = 'none';
  } else {
    search.style.display = 'block';
    search.focus();
  }
});

window.addEventListener('resize', () => {
  var body = document.getElementById('body');
  var w = body.getBoundingClientRect().width;
  if(w >= 992) {
    
  }
});