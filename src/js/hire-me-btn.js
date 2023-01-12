const hireMeBtn = document.querySelector('#hire-me-btn');
const hireMeOption = document.querySelector('#hire-option');

hireMeBtn.addEventListener('click', () => {
  hireMeOption.setAttribute('selected', 'selected');
})