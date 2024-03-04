<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


<?php
    include "connection.php";


    //creazione degli attributi del form
    $codproiezione = $_POST["codproiezione"];

    $sql = "DELETE FROM Proiezioni WHERE CodProiezione = $codproiezione";

    if ($conn->query($sql) == TRUE) {
        echo "<h1>Proiezione eliminata con successo</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



    //close the connection
    $conn->close();
    ?>
    <a class="btn btn-primary" href="../form_insert_update_delete/form.html" role="button">Link</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
