document.querySelectorAll('.project .wrapper').forEach(wrapper => {
  const slider = wrapper.querySelector(".slider input");
  const img = wrapper.querySelector(".images .img-2");
  const dragLine = wrapper.querySelector(".slider .drag-line");
  const overlay = wrapper.querySelector(".overlay span");
  
  slider.oninput = () => {
    let sliderVal = slider.value;
    dragLine.style.left = sliderVal + "%";
    img.style.width = sliderVal + "%";
    
    overlay.textContent = sliderVal < 50 ? "After" : "Before";
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
document.querySelectorAll('#mobileDropdownContent a').forEach(link => {
  link.addEventListener('click', () => {
      document.getElementById('mobileDropdownContent').style.display = 'none';
  });
});
document.querySelectorAll('.faq-question').forEach(button => {
  button.addEventListener('click', () => {
    const item = button.closest('.faq-item');
    document.querySelectorAll('.faq-item').forEach(el => {
      if (el !== item) el.classList.remove('active');
    });
    item.classList.toggle('active');
  });
});

// ✅ Contact form double-submit prevention and validation
document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById('contactForm');
  const contactBtn = document.getElementById('submitBtn');

  if (contactForm && contactBtn) {
    let submitted = false;

    contactForm.addEventListener('submit', function (event) {
      event.preventDefault();

      if (submitted) return; // Prevent double submit

      clearErrors();

      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();

      let errors = false;

      if (!name || name.length < 3) {
        showError('name', 'Name is required and should be at least 3 characters.');
        errors = true;
      }

      if (!email || !validateEmail(email)) {
        showError('email', 'Please enter a valid email address.');
        errors = true;
      }

      if (!message || message.length < 10) {
        showError('message', 'Message should be at least 10 characters.');
        errors = true;
      }

      if (errors) return;

      submitted = true;
      contactBtn.disabled = true;
      contactBtn.innerText = "Sending...";

      contactForm.submit();
    });
  }

  // ✅ Footer Callback form double-submit protection
  const callbackForm = document.querySelector("#footer-form-anchor form");
  const callbackBtn = callbackForm?.querySelector("button[type='submit']");

  if (callbackForm && callbackBtn) {
    let submittedCallback = false;

    callbackForm.addEventListener("submit", function (e) {
      if (submittedCallback) {
        e.preventDefault();
        return false;
      }
      submittedCallback = true;
      callbackBtn.disabled = true;
      callbackBtn.innerText = "Sending...";
    });
  }
});

// Utility functions
function validateEmail(email) {
  const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  return regex.test(email);
}

function showError(inputId, errorMessage) {
  const errorElement = document.getElementById(inputId + 'Error');
  if (errorElement) {
    errorElement.innerHTML = errorMessage;
    errorElement.style.display = 'block';
  }
}

function clearErrors() {
  const errorElements = document.querySelectorAll('.error-message');
  errorElements.forEach(error => {
    error.innerHTML = '';
    error.style.display = 'none';
  });
}
