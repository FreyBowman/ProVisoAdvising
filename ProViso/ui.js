const form = document.getElementById('login-form');
const emailInput = document.getElementById('email');
const errorLabel = document.getElementById('error-label');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  const email = emailInput.value;
  if (isValidEmail(email)) {
    form.submit();
  } else {
    errorLabel.textContent = 'Please enter a valid email address.';
    emailInput.classList.add('invalid');
  }
});

function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

emailInput.addEventListener('input', function() {
  if (emailInput.classList.contains('invalid')) {
    emailInput.classList.remove('invalid');
    errorLabel.textContent = '';
  }
});
