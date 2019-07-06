<?php


if (isset($_GET['name'])) {

  //par default n'existe pas
  $exist =false ;

  //connection to database
  include('connect.php');

  //get name
  $name=$_GET['name'];


$sql = "SELECT username FROM Etudiant where username='$name' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
     $exist =true ;
else 
    $exist =false ;

$conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Document</title>
  </head>
  <body>
    <form class="container mt-3" action="recherche_nom.php" method="GET">
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input
            type="text"
            class="form-control"
            name="name"
            placeholder="name"
          />
        </div>
      </div>

      
      <?php
      if (isset($_GET['name'])) {
     echo('<div class="alert alert-');
     
     // succes or danger
     if ($exist) echo('success');
     else echo('danger');
     
     //echo exist or not
     echo('" role="alert">');
     echo($name) ;

     if ($exist) echo (" existe") ;
     else echo (" n'existe pas");
echo('</div>');
      }
      ?>


      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Recherche</button>
        </div>
      </div>
    </form>
  </body>
</html>
