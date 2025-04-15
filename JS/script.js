document.querySelectorAll('.project .wrapper').forEach(wrapper => {
  const slider = wrapper.querySelector(".slider input");
  const img = wrapper.querySelector(".images .img-2");
  const dragLine = wrapper.querySelector(".slider .drag-line");
  const overlay = wrapper.querySelector(".overlay span");
  
  slider.oninput = () => {
      let sliderVal = slider.value;
      dragLine.style.left = sliderVal + "%";
      img.style.width = sliderVal + "%";
      
      if (sliderVal < 50) {
          overlay.textContent = "After";
      } else {
          overlay.textContent = "Before";
      }
  };
});


function toggleMenu() {
  const navbarToggle = document.getElementById('navbar-toggle');
  const hamburger = document.getElementById('hamburger');

  navbarToggle.classList.toggle('active');
  hamburger.classList.toggle('open');
}
function toggleMobileDropdown() {
  const content = document.getElementById('mobileDropdownContent');
  content.classList.toggle('active');
}




document.querySelectorAll('.faq-question').forEach(button => {
  button.addEventListener('click', () => {
    const item = button.closest('.faq-item');
    const allItems = document.querySelectorAll('.faq-item');

    allItems.forEach(el => {
      if (el !== item) {
        el.classList.remove('active');
      }
    });

    item.classList.toggle('active');
  });
});











