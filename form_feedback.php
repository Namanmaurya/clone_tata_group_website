<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'feedback_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rating = $_POST['rating'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['contact'];
    $message = $_POST['massage'];

    $stmt = $conn->prepare("INSERT INTO feedbacks (rating, username, email, phone, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $rating, $username, $email, $phone, $message);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error", "message" => $conn->error]);
    }
}
?>
