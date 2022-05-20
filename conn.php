<?php
$conn = mysqli_connect("localhost","root","","biblioteca");
// Controllo della connessione
if (mysqli_connect_errno()){
                echo "Errore di connessione al DB : " . mysqli_connect_error();
        }
?>
