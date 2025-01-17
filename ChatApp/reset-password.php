<?php
session_start();
include_once "config.php"; // Include your database connection file

// Enable PHP error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error_message = "";
$success_message = "";

// Check if a valid token is provided in the URL
if (isset($_GET['token'])) {
    $token = mysqli_real_escape_string($conn, $_GET['token']);

    // Verify if the token exists and is still valid
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE reset_token = '$token' AND token_expiry > NOW()");

    if (mysqli_num_rows($sql) > 0) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
            $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

            if (!empty($new_password) && !empty($confirm_password)) {
                if (strcmp($new_password, $confirm_password) === 0) {
                    // Hash the new password
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                    // Update the password and clear the reset token
                    $update = mysqli_query($conn, "UPDATE users SET password = '$hashed_password', reset_token = NULL, token_expiry = NULL WHERE reset_token = '$token'");

                    if ($update) {
                        $success_message = "Your password has been reset successfully. You can now log in.";
                    } else {
                        $error_message = "Failed to reset your password. Error: " . mysqli_error($conn);
                    }
                } else {
                    $error_message = "Passwords do not match. Please try again.";
                }
            } else {
                $error_message = "All fields are required.";
            }
        }
    } else {
        $error_message = "Invalid or expired token.";
    }
} else {
    header("location: login.php");
    exit();
}
?>

<?php include_once "header.php"; ?>
<link rel="stylesheet" href="css/reset.css">
<title>Reset Password</title>
<body>
    <div class="wrapper">
        <section class="form login">
            <div class="link"><a class="fas fa-arrow-left" style="color:rgb(250, 23, 23);" href="../index.php">&nbsp; Back To The Website</a></div>
            <header style="text-align: center;">Reset Password</header>
            <form action="reset-password.php?token=<?php echo htmlspecialchars($_GET['token']); ?>" method="POST" autocomplete="off">
                <div class="field input">
                    <label>New Password</label>
                    <input type="password" name="new_password" id="new_password" placeholder="Enter your new password" required>
                    <i class="fas fa-eye toggle-password" data-target="new_password"></i>
                </div>
                <div class="field input">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your new password" required>
                    <i class="fas fa-eye toggle-password" data-target="confirm_password"></i>
                </div>
                <div class="field button">
                    <input style="background-color: #FFAA33;" type="submit" name="submit" value="Reset Password">
                </div>
            </form>
            <div class="link">Remembered your password? <a style="color: blue;" href="login.php">Log in</a></div>
        </section>
    </div>
    
    <!-- Include JavaScript -->
    <script src="javascript/pass-show-hide.js"></script>
    <script>
        // Show popup messages for success or error
        <?php if (!empty($success_message)) { ?>
        alert("<?php echo $success_message; ?>");
        window.location.href = "login.php"; // Redirect after success
        <?php } ?>
        
        <?php if (!empty($error_message)) { ?>
        alert("<?php echo $error_message; ?>");
        <?php } ?>
    </script>
</body>
</html>
