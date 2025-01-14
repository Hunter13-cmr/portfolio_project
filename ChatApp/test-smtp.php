<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/SADRACK/vendor/phpmailer/src/Exception.php';
require 'C:/xampp/htdocs/SADRACK/vendor/phpmailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/SADRACK/vendor/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->SMTPDebug = 2;  // Enable debugging
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'felocksadrack@gmail.com';
    $mail->Password = 'rmsx ixri matm twiy'; // Use App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('felocksadrack@gmail.com', 'FE_TEST');
    $mail->addAddress('felocksadrack@gmail.com'); // Send to yourself to test

    $mail->isHTML(true);
    $mail->Subject = 'SMTP Test';
    $mail->Body = 'If you see this email, SMTP is working!';

    $mail->send();
    echo "Test email sent successfully!";
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
