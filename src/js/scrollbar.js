const scrollbar = document.querySelector('.scrollbar');

window.addEventListener('scroll', () => {
  let scroll = window.scrollY;
  let windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  let scrollbarWidth = Math.round(scroll / windowHeight * 100);
  scrollbar.style.width = scrollbarWidth + '%';
})