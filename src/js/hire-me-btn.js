const hireMeBtn = document.querySelector('#hire-me-btn');
const hireMeOption = document.querySelectorAll('#hire-option');

hireMeBtn.addEventListener('click', () => {
  hireMeOption.setAttribute('selected', 'selected');
})