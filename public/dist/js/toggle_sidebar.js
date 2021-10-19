const btn = document.getElementById('__toggle-btn');

window.addEventListener('resize', () => {
  let sidebar = document.getElementById('__sidebar');
  let sidebarBg = document.getElementById('__sidebar-background');
  let sidebarIcon = document.getElementById('__sidebar-toggle-icon');
  let screenWidth = window.innerWidth;
  
  if (screenWidth >= 992) {
    sidebar.classList.add('toggled');
    sidebar.style.left = '0px';
    sidebar.style.boxShadow = '';
    sidebarBg.classList.add('d-none');
    sidebarIcon.classList.toggle('fa-times');
  } else {
    sidebar.classList.remove('toggled');
    sidebar.style.left = '-280px';
    sidebarBg.classList.add('d-none');
    sidebarIcon.classList.toggle('fa-bars');
  }
});

btn.addEventListener('click', () => {
  let sidebar = document.getElementById('__sidebar');
  let sidebarBg = document.getElementById('__sidebar-background');
  let sidebarIcon = document.getElementById('__sidebar-toggle-icon');
  let isToggled = sidebar.classList.contains('toggled');
  if (isToggled) {
    sidebar.classList.remove('toggled');
    sidebar.style.left = '-280px';
    sidebarBg.classList.add('d-none');
    sidebarIcon.classList.toggle('fa-bars');
  } else {
    sidebar.classList.add('toggled');
    sidebar.style.left = '0px';
    sidebar.style.boxShadow = '0 .5rem 1rem rgba(0,0,0,.15)';
    sidebarBg.classList.remove('d-none');
    sidebarIcon.classList.toggle('fa-times');
  }
});