<?php

if(isset($_POST['save'])){

// connect to database
include 'conn.php';

// capture data from form
$nome = $_POST['nome'];
$citta = $_POST['citta'];
$created = $_POST['created'];
$updated = $_POST['updated'];

// input data to database
mysqli_query($conn,"insert into editori(nome, citta,created,updated) values('$nome','$citta',current_timestamp(),current_timestamp())") or die(mysqli_error($conn));

// redirect page to editori.php
header("location:editori.php");

}
?>
