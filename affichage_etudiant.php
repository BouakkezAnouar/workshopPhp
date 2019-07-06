<?php

include('connect.php');

$sql = "SELECT * FROM Etudiant";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($etudiant = $result->fetch_assoc()) {
        echo "id: " . $etudiant["id"]. " -UserName: " . $etudiant["username"]. " " . $etudiant["email"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();


?>