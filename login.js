// Wait until the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const usernameInput = document.querySelector('input[name="username"]');
  const passwordInput = document.querySelector('input[name="password"]');

  form.addEventListener('submit', (e) => {
    let isValid = true;

    // Check if username is empty
    if (usernameInput.value.trim() === '') {
      alert('Username is required.');
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
});