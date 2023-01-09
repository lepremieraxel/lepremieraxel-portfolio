const burger = document.querySelector('.burger');
const burgerContainer = document.querySelector('.burger-container');
const plusContainer = document.querySelector('.plus-social-container');
const plus = document.querySelector('.plus-social');

const span1 = burger.children[0];
const span2 = burger.children[1];
const span3 = burger.children[2];

const burgerLinks = document.querySelectorAll('.burger-container a');

burgerLinks.forEach(burgerLink => {
  burgerLink.addEventListener('click', () => {
    burgerContainer.classList.toggle('inactive');
    if(burgerContainer.classList.contains('inactive')){
      burgerContainer.style.transform = 'translateX(100%)';
      span1.style.transform = 'translate(0) rotate(0)';
      span2.style.transform = 'translate(0) rotate(0)';
      span3.style.transform = 'translate(0) rotate(0)';
    }
    else {
      burgerContainer.style.transform = 'translateX(0)';
      span1.style.transform = 'translate(0) rotate(10deg)';
      span2.style.transform = 'translate(3px, 0) rotate(-30deg)';
      span3.style.transform = 'translate(-5px, -16px) rotate(45deg)';
    }
  })
});

burger.addEventListener('click', () => {
  plusContainer.classList.add('inactive');
  plus.style.transform = 'translate(0) rotate(0)';
  burgerContainer.classList.toggle('inactive');
  if(burgerContainer.classList.contains('inactive')){
    burgerContainer.style.transform = 'translateX(100%)';
    span1.style.transform = 'translate(0) rotate(0)';
    span2.style.transform = 'translate(0) rotate(0)';
    span3.style.transform = 'translate(0) rotate(0)';
  }
  else {
    burgerContainer.style.transform = 'translateX(0)';
    span1.style.transform = 'translate(0) rotate(10deg)';
    span2.style.transform = 'translate(3px, 0) rotate(-30deg)';
    span3.style.transform = 'translate(-5px, -16px) rotate(45deg)';
  }
})