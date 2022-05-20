<?php
// connessione al database
include 'conn.php';

// ricavare I dati dal form
$idLibro = $_POST['idLibro'];
$titolo = $_POST['titolo'];
$pagine = $_POST['pagine'];
$prezzo = $_POST['prezzo'];
$isbn = $_POST['isbn'];
$data_pubbl = $_POST['data_pubbl'];
$cod_ed = $_POST['cod_ed'];
$updated = $_POST['updated'];

// aggiorna I dati
mysqli_query($conn,"update libri set titolo='$titolo', pagine='$pagine', prezzo='$prezzo', isbn='$isbn', data_pubbl='$data_pubbl', cod_ed='$cod_ed', updated=current_timestamp() where idLibro='$idLibro'");

// ritorna a index.php
header("location:index.php");

?>
