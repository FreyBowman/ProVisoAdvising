// Get DOM elements
const form = document.querySelector('form');
const passwordInput = document.querySelector('#password');
const passwordStrength = document.querySelector('.password-strength');
const passwordStrengthLabels = document.querySelectorAll('.password-strength span');

// Password strength function
function checkPasswordStrength() {
    const password = passwordInput.value;
    let strength = 0;

    // Check password length
    if (password.length >= 8) {
        strength += 1;
    }

    // Check for numbers
    if (/\d/.test(password)) {
        strength += 1;
    }

    // Check for lowercase letters
    if (/[a-z]/.test(password)) {
        strength += 1;
    }

    // Check for uppercase letters
    if (/[A-Z]/.test(password)) {
        strength += 1;
    }

    // Update password strength indicator
    if (password.length === 0) {
        passwordStrengthLabels.forEach(label => {
            label.classList.remove('weak', 'medium', 'strong');
        });
    } else {
        passwordStrengthLabels.forEach((label, index) => {
            if (index < strength) {
                label.classList.add('strong');
            } else if (index === strength) {
                label.classList.add('medium');
            } else {
                label.classList.add('weak');
            }
        });
    }
}

// Event listeners
form.addEventListener('submit', event => {
    event.preventDefault();

    // Get form values
    const firstName = document.querySelector('#first-name').value;
    const lastName = document.querySelector('#last-name').value;
    const email = document.querySelector('#email').value;
    const password = passwordInput.value;
    const gender = document.querySelector('input[name="gender"]:checked').value;
    const yearInSchool = document.querySelector('#year-in-school').value;

    // Validation
    if (firstName.trim() === '') {
        alert('Please enter your first name.');
        return;
    }

    if (lastName.trim() === '') {
        alert('Please enter your last name.');
        return;
    }

    if (email.trim() === '') {
        alert('Please enter your email address.');
        return;
    }

    if (password.trim() === '') {
        alert('Please enter a password.');
        return;
    }

    if (gender === undefined) {
        alert('Please select your gender.');
        return;
    }

    if (yearInSchool === '') {
        alert('Please select your year in school.');
        return;
    }

    // Submit form
    form.submit();
});

passwordInput.addEventListener('input', checkPasswordStrength);
