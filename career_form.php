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
    $phone_number = trim($_POST['contact'] ?? '');
    $position = trim($_POST['position'] ?? '');
    $select_a_city = trim($_POST['select_city'] ?? '');
    $depar = trim($_POST['department'] ?? '');
    $msg = trim($_POST['massage'] ?? '');
    $pdf = $_FILES['pdf'] ?? null;

    if (empty($name) || empty($email) || empty($msg) ) {
        $response["message"] = "All fields are required.";
        echo json_encode($response);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response["message"] = "Invalid email format.";
        echo json_encode($response);
        exit;
    }

    if ($pdf && $pdf['size'] > 0) {
        $fileExt = strtolower(pathinfo($pdf['name'], PATHINFO_EXTENSION));
        if ($fileExt !== 'pdf') {
            $response["message"] = "Only PDF files are allowed.";
            echo json_encode($response);
            exit;
        }
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

        $mail->setFrom('namanm0021@gmail.com', 'Your Name'); // Fix sender email
        $mail->addAddress('receiver-email@gmail.com', 'Receiver Name');

        // Check if PDF file exists and is valid before attaching
        if ($pdf && $pdf['size'] > 0) {
            // Attach the PDF file
            $mail->addAttachment($pdf['tmp_name'], $pdf['name']);
        }

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "
            <strong>Sender Name:</strong> $name<br>
            <strong>Sender Email:</strong> $email<br>
            <strong>Phone Number:</strong> $phone_number<br>
            <strong>Position:</strong> $position<br>
            <strong>City:</strong> $select_a_city<br>
            <strong>Department:</strong>$depar<br>
            <strong>Message:</strong> $msg
        ";

        // Send the email
        if ($mail->send()) {
            $response["success"] = true;
            $response["message"] = "Your message has been sent successfully!";
        } else {
            $response["message"] = "Message could not be sent.";
        }
    } catch (Exception $e) {
        $response["message"] = "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}

echo json_encode($response);
?>
