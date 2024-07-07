document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Send form data using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "run.php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById("statusMessage").innerHTML = "Email sent successfully!";
        } else {
            document.getElementById("statusMessage").innerHTML = "Failed to send email. Please try again later.";
        }
    };
    xhr.send(formData);
});