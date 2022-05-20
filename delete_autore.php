<?php

session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if($_SESSION["loggedin"] != true){
    header("location:login.php");
    exit;
}

// connessione al database
include 'conn.php';

// cattura l’id
$idAut = $_GET['id'];


// rimuovi dal database
mysqli_query($conn,"delete from autori where idAut='$idAut'");

// ritorna a autori.php
header("location:autori.php");

?>
