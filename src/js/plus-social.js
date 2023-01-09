const plusSocial = document.querySelector('.plus-social');
const plusSocialContainer = document.querySelector('.plus-social-container');

const plusSocialLinks = document.querySelectorAll('.plus-social-container a');

plusSocialLinks.forEach(plusSocialLink => {
  plusSocialLink.addEventListener('click', () => {
    plusSocialContainer.classList.toggle('inactive');
  if(plusSocialContainer.classList.contains('inactive')){
    plusSocialContainer.style.transform = 'rotate(90deg)';
    plusSocial.style.transform = 'translate(0) rotate(0)';
  }
  else {
    plusSocialContainer.style.transform = 'rotate(0)';
    plusSocial.style.transform = 'translate(-7px, -15px) rotate(-45deg)';
  }
  })
});

plusSocial.addEventListener('click', () => {
  plusSocialContainer.classList.toggle('inactive');
  if(plusSocialContainer.classList.contains('inactive')){
    plusSocialContainer.style.transform = 'rotate(90deg)';
    plusSocial.style.transform = 'translate(0) rotate(0)';
  }
  else {
    plusSocialContainer.style.transform = 'rotate(0)';
    plusSocial.style.transform = 'translate(-7px, -15px) rotate(-45deg)';
  }
})