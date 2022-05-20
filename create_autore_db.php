<?php

if(isset($_POST['save'])){

// connect to database
include 'conn.php';

// capture data from form
$cognome = $_POST['cognome'];
$nome = $_POST['nome'];
$indirizzo = $_POST['indirizzo'];
$created = $_POST['created'];
$updated = $_POST['updated'];

// input data to database
mysqli_query($conn,"insert into autori(cognome, nome, indirizzo,created,updated) values('$cognome','$nome','$indirizzo',current_timestamp(),current_timestamp())") or die(mysqli_error($conn));

// redirect page to autori.php
header("location:autori.php");

}
?>
