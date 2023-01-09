const navbar = document.querySelector('header');
const plusBtn = navbar.children[0];
const mainLogo = navbar.children[3].children[0];
const burgerBtn = navbar.children[4];


const headerBg = document.querySelector('.header-bg');

window.addEventListener('scroll', () => {
  
  if(window.scrollY > 35){
    plusBtn.style.display = 'none';
    mainLogo.style.width = '80px';
    mainLogo.style.marginLeft = '0';
    headerBg.style.height = '95px';
    headerBg.style.boxShadow = '0 5px 15px rgba(0,0,0,0.6)';
  }
  else {
    plusBtn.style.display = 'flex';
    mainLogo.style.width = '130px';
    mainLogo.style.marginLeft = '-45px';
    headerBg.style.height = '180px';
    headerBg.style.boxShadow = '0 0 0 rgba(0,0,0,0)';
  }
})
