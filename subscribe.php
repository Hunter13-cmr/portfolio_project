<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('footer_background.jpg'); /* Remplacez par le chemin de votre image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            color: #fffb00;
        }
        .thank-you-message {
            text-align: center;
            background: rgba(100, 99, 99, 0.774); /* Couleur de fond semi-transparente pour améliorer la lisibilité */
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            height: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>


<?php
session_start(); // Start the session

// Include the database connection file
require_once 'db.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; // Get the email entered by the user

    // Check if the email already exists in the database
    $stmt = $pdo->prepare("SELECT * FROM subscriptions WHERE email = ?");
    $stmt->execute([$email]);
    $existingSubscription = $stmt->fetch();

    if ($existingSubscription) {
        // If email already exists, show an error message
        echo "<div class='thank-you-message' style='color: red; text-align: center;'>
                <h1>You are already subscribed!</h1>
                <p>Thank you for your interest. You’ll continue receiving updates.</p>
                <a style='color: rgb(255, 187, 0); margin-top: 50px;' href='index.php'>Go back to Home</a>
              </div>";
    } else {
        // Insert the email into the database
        $stmt = $pdo->prepare("INSERT INTO subscriptions (email) VALUES (?)");
        if ($stmt->execute([$email])) {
            echo "<div class='thank-you-message' style='color: green; text-align: center;'>
                    <h1>Thank you for subscribing!</h1>
                    <p>You’ll now receive our latest newsletters.</p>
                    <a style='color: rgb(255, 187, 0); margin-top: 50px;' href='index.php'>Go back to Home</a>
                  </div>";
        } else {
            echo "<div class='thank-you-message' style='color: red; text-align: center;'>
                    <h1>Subscription Failed!</h1>
                    <p>Something went wrong. Please try again later.</p>
                    <a style='color: rgb(255, 187, 0); margin-top: 50px;' href='index.php'>Go back to Home</a>
                  </div>";
        }
    }
}
?>
