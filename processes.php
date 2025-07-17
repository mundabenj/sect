<?php
require 'dbConnect.php';
// Check if the form is submitted
if(isset($_POST['send_message'])) {
    // Retrieve form data
    $allnames = $_POST['allnames'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate inputs
    if(empty($allnames) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO messages (fullname, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $allnames, $email, $phone, $subject, $message);

    // Execute the statement
    if($stmt->execute()) {
        header("Location: contacts.html?status=success");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "No data submitted.";
}


