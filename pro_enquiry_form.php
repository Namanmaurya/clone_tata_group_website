<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

header('Content-Type: application/json');

$response = ["success" => false, "message" => ""];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone_number = trim(string: $_POST['contact'] ?? '');
    $msg = trim($_POST['massage'] ?? '');

    if (empty($name) || empty($email) || empty($msg)) {
        $response["message"] = "All fields are required.";
        echo json_encode($response);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response["message"] = "Invalid email format.";
        echo json_encode($response);
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'namanm0021@gmail.com'; 
        $mail->Password   = 'vwqt ofpg ekuj ooyz'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('your-email@gmail.com', 'Your Name');
        $mail->addAddress('your-email@gmail.com', 'Receiver Name');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Sender Name: <strong>$name</strong><br>Sender Email: <strong>$email</strong><br>Phone Number:$phone_number<br>Message:$msg";

        $mail->send();
        $response["success"] = true;
        $response["message"] = "Your message has been sent successfully!";
    } catch (Exception $e) {
        $response["message"] = "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}

echo json_encode($response);
?>
