<?php
include '../../php/connection.php';

$checkbox = $_POST['mycheckbox'];
if($checkbox == 'aggiorna')
    echo "aggiorna";
else
    echo "elimina";