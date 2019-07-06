<?php

include('connect.php');

if (isset($_GET['name'])) {
$name=$_GET['name'];


$sql = "SELECT username FROM Etudiant where username='$name' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo $name . ' existe' ;
} else {
    echo $name . " n'existe pas";
}

}
else
echo ('yelzem tda5il name');
$conn->close();

?>