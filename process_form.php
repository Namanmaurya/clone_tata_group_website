<?php
// Include database connection file
include 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitize user inputs to prevent SQL Injection
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $contact = mysqli_real_escape_string($conn, trim($_POST['contact']));
    $city = mysqli_real_escape_string($conn, trim($_POST['city']));

    // Validate required fields
    if (empty($name) || empty($email) || empty($contact) || empty($city)) {
        echo "All fields are required.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Validate phone number (10 digits)
    if (!preg_match('/^\d{10}$/', $contact)) {
        echo "Invalid phone number. It must be 10 digits.";
        exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO consultation_requests (name, email, contact, city) VALUES ('$name', '$email', '$contact', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
