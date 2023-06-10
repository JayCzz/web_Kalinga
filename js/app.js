const sidebar = document.querySelector('div.sidebar');
const toggler = document.querySelector('button.toggle-btn');

toggler.addEventListener('click', () => {
  const classes = sidebar.className.split(' ');

  if (classes.includes('sidebar-sm')) {
    sidebar.classList.remove('sidebar-sm');
  } else {
    sidebar.classList.add('sidebar-sm');
  }
});