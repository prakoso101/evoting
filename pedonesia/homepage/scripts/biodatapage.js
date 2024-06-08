// Add your JavaScript code for the startVoting.html page here
const form = document.getElementById("biodataForm");

form.addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    const formData = new FormData(form);
    const userData = {};
    formData.forEach((value, key) => {
        userData[key] = value;
    });

    // Send user data to server (backend)
    // Here you would typically make an AJAX request to a backend server to store the user data
    // For example, using fetch() or XMLHttpRequest
    // Replace the alert with actual code to send data to the server
    alert("User biodata submitted:\n" + JSON.stringify(userData));

    // Redirect user to another page (optional)
    // Replace 'redirectPage.html' with the page you want to redirect to
    window.location.href = "votingpage.php";
});// startVoting.js

document.getElementById('biodataForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get form data
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var age = document.getElementById('age').value;

    // Do something with the form data, such as sending it to a server
    console.log('Name:',name);
    console.log('Email:', email);
    console.log('Age:', age);
});
document.getElementById('biodataForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Perform any additional validation or processing here

    // Open the new page
    window.location.href('votingpage.php', '_blank');
});
