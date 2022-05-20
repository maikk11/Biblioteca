<?php

if(isset($_POST['save'])){

// connect to database
include 'conn.php';

// capture data from form
$titolo = $_POST['titolo'];
$prezzo = $_POST['prezzo'];
$cod_ed = $_POST['editore'];
$pagine = $_POST['pagine'];
$data_pubbl = $_POST['data_pubbl'];
$isbn = $_POST['isbn'];
$created = $_POST['created'];
$updated = $_POST['updated'];

// input data to database
mysqli_query($conn,"insert into Libri(titolo,prezzo, cod_ed, pagine, data_Pubbl, isbn,created,updated) values('$titolo','$prezzo','$cod_ed','$pagine','$data_pubbl','$isbn',current_timestamp(),current_timestamp())") or die(mysqli_error($conn));

// redirect page to index.php
header("location:index.php");

}
?>
