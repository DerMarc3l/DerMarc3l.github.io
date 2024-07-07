<?php
// Retrieve form data
$absendername = htmlspecialchars($_POST['name']);
$absenderemail = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$absendernachricht = htmlspecialchars($_POST['message']);

// Define recipient and email subject
$empfaenger = "marcel.rei@edu.bib.de";
$betreff = "Portfolio";

// Compose email body
$emailBody = <<<EOT
Absender: $absendername
Absender-Email: $absenderemail
Subject: $subject
Nachricht: $absendernachricht
EOT;

// Send email
if (mail($empfaenger, $betreff, $emailBody, "From: $absendername <$absenderemail>")) {
    // Email sent successfully
    http_response_code(200); // Set HTTP response status code to 200 OK
} else {
    // Failed to send email
    http_response_code(500); // Set HTTP response status code to 500 Internal Server Error
}
?>
