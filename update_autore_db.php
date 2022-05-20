<?php
// connessione al database
include 'conn.php';

// ricavare I dati dal form
$idAut = $_POST['idAut'];
$cognome = $_POST['cognome'];
$nome = $_POST['nome'];
$indirizzo = $_POST['indirizzo'];
$updated = $_POST['updated'];

// aggiorna I dati
mysqli_query($conn,"update autori set cognome='$cognome', nome='$nome', indirizzo='$indirizzo', updated=current_timestamp() where idAut='$idAut'");

// ritorna a index.php
header("location:autori.php");

?>
