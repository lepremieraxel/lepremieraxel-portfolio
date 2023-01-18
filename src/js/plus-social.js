const plusSocial = document.querySelector('.plus-social');
const plusSocialContainer = document.querySelector('.plus-social-container');

const plusSocialLinks = document.querySelectorAll('.plus-social-container a');

const body = document.body;

plusSocialLinks.forEach(plusSocialLink => {
  plusSocialLink.addEventListener('click', () => {
    plusSocialContainer.classList.toggle('inactive');
  if(plusSocialContainer.classList.contains('inactive')){
    plusSocialContainer.style.transform = 'rotate(90deg)';
    plusSocial.style.transform = 'translate(0) rotate(0)';
    body.style.overflow = 'unset';
  }
  else {
    plusSocialContainer.style.transform = 'rotate(0)';
    plusSocial.style.transform = 'translate(-7px, -15px) rotate(-45deg)';
    body.style.overflow = 'hidden';
  }
  })
});

plusSocial.addEventListener('click', () => {
  plusSocialContainer.classList.toggle('inactive');
  if(plusSocialContainer.classList.contains('inactive')){
    plusSocialContainer.style.transform = 'rotate(90deg)';
    plusSocial.style.transform = 'translate(0) rotate(0)';
    body.style.overflow = 'unset';
  }
  else {
    plusSocialContainer.style.transform = 'rotate(0)';
    plusSocial.style.transform = 'translate(-7px, -15px) rotate(-45deg)';
    body.style.overflow = 'hidden';
  }
})