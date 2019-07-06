<?php
//database connection
include('connect.php');

// get data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// insert etudiant
$sql = "INSERT INTO Etudiant 
VALUES ('null','$username', '$email', '$password' ,now())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//close connection
$conn->close();

//redirect to affichage etudiants
header('Location: affichage_etudiant.php');
?>