<?php
session_start();
include_once "config.php";

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

        if (mysqli_num_rows($sql) > 0) {
            echo "$email - This email already exists!";
        } else {
            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];

                $img_explode = explode('.', $img_name);
                $img_ext = strtolower(end($img_explode)); // Ensure lowercase extension

                $allowed_extensions = ["jpeg", "png", "jpg"];
                $allowed_types = ["image/jpeg", "image/jpg", "image/png"];

                if (in_array($img_ext, $allowed_extensions) && in_array($img_type, $allowed_types)) {
                    $time = time();
                    $new_img_name = $time . "_" . uniqid() . "." . $img_ext; // Unique filename

                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $ran_id = rand(time(), 100000000);
                        $status = "Online";
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Secure hashing

                        $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) 
                        VALUES ({$ran_id}, '{$fname}', '{$lname}', '{$email}', '{$hashed_password}', '{$new_img_name}', '{$status}')");

                        if ($insert_query) {
                            $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if (mysqli_num_rows($select_sql2) > 0) {
                                $result = mysqli_fetch_assoc($select_sql2);
                                $_SESSION['unique_id'] = $result['unique_id'];
                                echo "success";
                            } else {
                                echo "This email address does not exist!";
                            }
                        } else {
                            echo "Something went wrong. Please try again!";
                        }
                    } else {
                        echo "File upload failed!";
                    }
                } else {
                    echo "Please upload a valid image file (jpeg, png, jpg)";
                }
            }
        }
    } else {
        echo "$email is not a valid email!";
    }
} else {
    echo "All input fields are required!";
}
?>