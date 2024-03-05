<?php

global $conn;
include '../../php/connection.php';
$tabella = $_POST["tabella"];

$sql = "SELECT * FROM $tabella";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Intestazione della tabella
    echo "<table ><tr>";
    while ($fieldInfo = $result->fetch_field()) {
        echo "<th>" . $fieldInfo->name . "</th>";
    }
    echo "</tr>";

    // Dati della tabella
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nessun risultato trovato nella tabella 'attori'.";
}
$conn->close();


