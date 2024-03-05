


<?php
    include "../../php/connection.php";

    //creazione degli attributi del form
    $codattore = $_POST['codattore'];



    if($codattore == ""){
        $codattore = NULL;
    }
    $nome = $_POST['nome'];
    $annonascita = $_POST['annonascita'];
    $nazionalita = $_POST['nazionalita'];

    $sql = "INSERT INTO Attori(CodAttore, Nome, AnnoNascita, Nazionalita)
    VALUES($codattore, '$nome', $annonascita , '$nazionalita')";

    if ($conn->query($sql) == TRUE) {
        echo "<h1>Attore aggiungo con successo</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    //close the connection
    $conn->close();

?>
    <br>
    <form action="../../index.html">
        <button type="submit">Ritorna al form</button>
    </form>




