<?php
require '../config/dbConnect.php';
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
}

if(isset($_POST['signup'])) {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $genderId = $_POST['genderId'];
    $roleId = $_POST['roleId'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate inputs
    if(empty($fullname) || empty($email) || empty($phone) || empty($genderId) || empty($roleId) || empty($username) || empty($password) || empty($confirm_password)) {
        echo "All fields are required.";
        exit;
    }

    if($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit;
    }

    // Check if username already exists
    $check_username = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $check_username->bind_param("s", $username);
    $check_username->execute();
    $result = $check_username->get_result();

    if($result->num_rows > 0) {
        echo "Username already exists.";
        exit;
    }
// validate email format
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Check if email already exists
    $check_email = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $result = $check_email->get_result();

    if($result->num_rows > 0) {
        echo "Email already exists.";
        exit;
    }

    // encrypt password using password_hash
    $hashed_password = password_hash($confirm_password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, phone, genderId, roleId, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $fullname, $email, $phone, $genderId, $roleId, $username, $hashed_password);

    // Execute the statement
    if($stmt->execute()) {
        header("Location: ../persons.php?status=success");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}   

if(isset($_GET['delete_user'])) {
    // Retrieve user ID
    $userId = $_GET['delete_user'];

    // Validate user ID
    if(empty($userId)) {
        echo "User ID is required.";
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM users WHERE userId = ?");
    $stmt->bind_param("i", $userId);

    // Execute the statement
    if($stmt->execute()) {
        header("Location: ../persons.php?status=deleted");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

if(isset($_POST['update_user'])) {
    // Retrieve form data
    $fullname = ucwords(strtolower($_POST['fullname']));
    $email = strtolower($_POST['email']);
    $phone = $_POST['phone'];
    $genderId = $_POST['genderId'];
    $roleId = $_POST['roleId'];
    $username = strtolower($_POST['username']);
    $userId = $_POST['userId'];

    // Validate inputs
    if(empty($fullname) || empty($email) || empty($phone) || empty($genderId) || empty($roleId) || empty($username)) {
        echo "All fields are required.";
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("UPDATE users SET fullname = ?, email = ?, phone = ?, genderId = ?, roleId = ?, username = ? WHERE userId = ?");
    $stmt->bind_param("ssssssi", $fullname, $email, $phone, $genderId, $roleId, $username, $userId);

    // Execute the statement
    if($stmt->execute()) {
        header("Location: ../persons.php?status=updated");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}