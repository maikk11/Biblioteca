<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if($_SESSION["loggedin"] != true){
    header("location:login.php");
    exit;
}

// connessione al database
include 'conn.php';


// cattura l’id
$idLibro = $_GET['id'];


// rimuovi dal database
mysqli_query($conn,"delete from autori where idLibro='$idLibro'");

// ritorna a autori.php
header("location:index.php");

?>
