// script.js
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
   


    // Validation passed, proceed with registration (you can send this data to a server for registration)

    // Display success message
    document.getElementById('message').innerText = 'Registration successful!';

    // Clear form fields
    document.getElementById('username').value = '';
    document.getElementById('email').value = '';
    document.getElementById('password').value = '';
   
});