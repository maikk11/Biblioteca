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
						<li class="scroll"><a href="autori.php">Autori</a></li> 
						<li class="scroll"><a href="editori.php">Editori</a></li> 
						<li class="scroll"><a href="register.php">Register</a></li>
						<li class="scroll"><a href="login.php">login</a></li>
						<li class="scroll"><a href="logout.php">logout</a></li>
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
    <h3>Libri</h3>
    <a href="create.php">+ AGGIUNGI UN LIBRO</a>
    <br/>
	<br/>
    <table border="1">
    <tr>
        <th>No.</th>
        <th>Titolo</th>
        <th>Prezzo</th>
        <th>Codice Editore</th>
        <th>Numero di pagine</th>
        <th>Data pubblicazione</th>
        <th>ISBN</th>
    </tr>
        <?php
        include 'conn.php';
        $no = 1;
        #leggi i libri nel database
        $query = mysqli_query($conn,"select * from libri") or die(mysql_error());;

        # Stampa un messaggio se non ci sono libri nel database
        if(mysqli_num_rows($query) == 0) {
           echo '<tr style="background-color: #ff4d4d"><td colspan="8"><center>Nessun libro nel database!</center></td></tr>';
           }
           else{

             while($data = mysqli_fetch_array($query)){
        ?>
           <tr>
               <td><?php echo $no++; ?>.</td>
               <td><?php echo $data['titolo']; ?></td>               
               <td><?php echo $data['prezzo']; ?></td>
               <td><?php echo $data['cod_ed']; ?></td>
               <td><?php echo $data['pagine']; ?></td>
               <td><?php echo $data['data_pubbl']; ?></td>
               <td><?php echo $data['isbn']; ?></td>
               <td>
                  <a href="update.php?id=<?php echo $data['idLibro']; ?>">EDIT</a>&nbsp;&nbsp;
                  <a href="delete.php?id=<?php echo $data['idLibro']; ?>" onclick="return checkDelete()">DELETE</a>
               </td>
           </tr>
        <?php
            }
            }
        ?>
        </table>
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
