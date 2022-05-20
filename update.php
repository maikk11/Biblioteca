<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if($_SESSION["loggedin"] != true){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>Biblioteca - 5a AIAS Corni</title> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<link href="css/animate.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<!-- javascript script to notifies delete one data  -->
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}
</script>

<!-- Color the website background -->

<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="index.php"><h1><img src="images/images.jpg" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="index.php">Home</a></li> 
						<li class="scroll"><a href="#autori">Autori</a></li> 
						<li class="scroll"><a href="#editori">Editori</a></li> 
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

	<center>

    <br/>
    <br/>
    <br/>
    <br/>
    <h3>Aggiorna un libro</h3>

        <?php
        include 'conn.php';

        $idLibro = $_GET['id'];
        $query = mysqli_query($conn,"select * from libri where idLibro='$idLibro'");
        while($data = mysqli_fetch_array($query)){
                ?>
           <form method="post" action="update_db.php" onsubmit="return handleData()">
                <table cellpadding="3" cellspacing="0">

                     <!—Modifica il titolo -->
                     <tr>
                         <td>Titolo</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <td>
                           <input type="hidden" name="idLibro" value="<?php echo $data['idLibro']; ?>">
                           <input type="text" name="titolo" value="<?php echo $data['titolo']; ?>">
                         </td>
                     </tr>

                     <!—Modifica il prezzo -->
                     <tr>
                         <td>Prezzo</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <td>
                           <input type="text" name="prezzo" value="<?php echo $data['prezzo']; ?>">
                         </td>
                     </tr>

                     <!—Modifica il numero di pagine -->
                     <tr>
                         <td>Numero di pagine</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <td>
                           <input type="text" name="pagine" value="<?php echo $data['pagine']; ?>">
                         </td>
                     </tr>

                     <!—Modifica il codice editore -->
                     <tr>
                         <td>Codice editore</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <td>
                           <input type="text" name="cod_ed" value="<?php echo $data['cod_ed']; ?>">
                         </td>
                     </tr>

                     <!—Modifica il codice isbn -->
                     <tr>
                         <td>Codice ISBN</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <td>
                           <input type="text" name="isbn" value="<?php echo $data['isbn']; ?>">
                         </td>
                     </tr>

                     <!—Modifica la data di pubblicazione -->
                     <tr>
                         <td>Data di pubblicazione</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <td>
                           <input type="date" name="data_pubbl" value="<?php echo $data['data_pubbl']; ?>">
                         </td>
                     </tr>

                     <!—Creare il pulsante per aggiornare -->
                     <tr>
                         <td></td>
                         <td><input type="submit" value="Update">&nbsp;&nbsp;<button onclick="goBack()">Go Back</button></td>
                     </tr>

                </table>
           </form>
                <?php
        }
        ?>
    </center>

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="js/main.js"></script> 
</body>
</html>

 <script>
                function handleData()
{
    var form_data = new FormData(document.querySelector("form"));

    if(!form_data.has("app[]"))
    {
        document.getElementById("chk_option_error").style.visibility = "visible";
      return false;
    }
    else
    {
        document.getElementById("chk_option_error").style.visibility = "hidden";
      return true;
    }

}

        </script>
