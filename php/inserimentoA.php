


<?php
    include "connection.php";

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
    <form action="../form_insert_update_delete/form.html">
        <button type="submit">FORM</button>
    </form>



