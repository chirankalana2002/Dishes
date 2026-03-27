// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const usernameInput = document.querySelector('input[name="username"]');
  const emailInput = document.querySelector('input[name="email"]');
  const passwordInput = document.querySelector('input[name="password"]');

  form.addEventListener('submit', (e) => {
    let isValid = true;

    // Check if username is empty
    if (usernameInput.value.trim() === '') {
      alert('Username is required.');
      isValid = false;
    }

    // Check if email is empty or invalid
    if (emailInput.value.trim() === '') {
      alert('Email is required.');
      isValid = false;
    } else if (!isValidEmail(emailInput.value)) {
      alert('Please enter a valid email address.');
      isValid = false;
    }

    // Check if password is empty
    if (passwordInput.value.trim() === '') {
      alert('Password is required.');
      isValid = false;
    }

    if (!isValid) {
      e.preventDefault(); // Prevent form submission
    }
  });

  // Function to validate email
  function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
});