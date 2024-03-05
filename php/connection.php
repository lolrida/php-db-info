<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "bernat_cinema";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error){
    echo "errore";
    header("Location: form.html");
  } else {
    echo "molto bene";
  }
?>
