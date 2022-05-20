<?php
// connessione al database
include 'conn.php';

// ricavare I dati dal form
$idEditore = $_POST['idEditore'];
$nome = $_POST['nome'];
$citta = $_POST['citta'];
$updated = $_POST['updated'];

// aggiorna I dati
mysqli_query($conn,"update editori set nome='$nome', citta='$citta', updated=current_timestamp() where idEditore='$idEditore'");

// ritorna a index.php
header("location:editori.php");

?>
