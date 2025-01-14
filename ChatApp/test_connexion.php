<?php
$conn = mysqli_connect("localhost", "root", "", "chatapp");

if ($conn) {
    echo "Connexion réussie à la base de données.";
} else {
    echo "Erreur : " . mysqli_connect_error();
}
?>
