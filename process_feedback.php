<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $requestType = $_POST['requestType'];

    if ($requestType === 'validateEmail') {
        $email = trim($_POST['email']);
        
        // Validate email using regex pattern
        $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        if (!preg_match($emailPattern, $email)) {
            echo "Invalid email address.";
        } else {
            echo "Email is valid.";
            // Further checks like checking if the email is already in the database can be done here
        }
    } elseif ($requestType === 'formSubmission') {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        
        // Basic validation
        if (empty($name) || empty($email) || empty($message)) {
            echo "All fields are required.";
        } else {
            echo "Feedback submitted successfully!";
            // Here, you can also add code to save the feedback to a database or send an email
        }
    }
}
?>
