<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cinema_finale";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname, 3306);
  if($conn->connect_error){
    echo "errore";
    header("Location: form.html");
  } else {
    echo "molto bene";
  }
?>
