<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; // Ensure this is included

require 'C:/xampp/htdocs/SADRACK/vendor/phpmailer/src/Exception.php';
require 'C:/xampp/htdocs/SADRACK/vendor/phpmailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/SADRACK/vendor/phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once 'config.php';
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Check if the email exists
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($result) > 0) {
        $token = bin2hex(random_bytes(16)); // Generate a unique token
        $update = mysqli_query($conn, "UPDATE users SET reset_token = '$token', token_expiry = DATE_ADD(NOW(), INTERVAL 15 MINUTE) WHERE email = '$email'");
        if ($update) {
            $reset_link = "reset_link_for_new_password?token=$token";

            $mail = new PHPMailer(true);

            try {
                // Server settings
                $mail->isSMTP();
                $mail->SMTPDebug = 0; // Correct reference to SMTP class
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'your_mail_address'; // Your email
                $mail->Password = 'your_app_password'; // Your Google App Password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS encryption
                $mail->Port = 587;
            
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
            
                // Recipients
                $mail->setFrom('your_mail_address', 'name_app'); // Sender email and name
                $mail->addAddress($email); // Add the recipient email address
            
                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'Password Reset Request';
                $mail->Body = "Click the link below to reset your password:<br><a href='$reset_link'>$reset_link</a>";
            
                $mail->send();
                $success_message = "A reset link has been sent to your email.";
            } catch (Exception $e) {
                $error_message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            
        } else {
            $error_message = "Failed to update reset token. Please try again.";
        }
    } else {
        $error_message = "Email address not found.";
    }
}
?>

<?php include_once "header.php"; ?>
    <title>Forgot Password</title>
<body>
    <div class="wrapper">
        <section class="form forgot-password">
            <header style="text-align: center";>Forgot Password</header>
            <?php 
                if (!empty($error_message)) {
                    echo '<div class="error-text">' . $error_message . '</div>';
                }
                if (!empty($success_message)) {
                    echo '<div class="success-text">' . $success_message . '</div>';
                }
            ?>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div>Enter your email address to receive a link to reset your password.</div><br>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field button">
                    <input style="background-color: #FFAA33"; type="submit" name="submit" value="Send Reset Link">
                </div>
            </form>
            <div class="link">Remembered your password? <a style="color: blue" href="login.php">Log in</a></div>
        </section>
    </div>
</body>
</html>
