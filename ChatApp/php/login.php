<?php
session_start();
include_once "config.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);

        if (password_verify($password, $row['password'])) {  // Correct password check
            // Set session variable
            $_SESSION['unique_id'] = $row['unique_id'];
            
            // Update user status to "Online"
            $status = "Online";
            $update_status = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");

            if ($update_status) {
                echo "success";
            } else {
                echo "Failed to update status.";
            }
        } else {
            echo "Email or Password is Incorrect!";
        }
    } else {
        echo "Email or Password is Incorrect!";
    }
} else {
    echo "All input fields are required!";
}
?>