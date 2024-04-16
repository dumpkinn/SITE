<?php
session_start();
if(isset($_SESSION["css_counter"])){
	$_SESSION["css_counter"]++;
}else{
	$css_counter=40;
	$_SESSION["css_counter"]=$css_counter;
}
?>


<!DOCTYPE html>
<html lang='en'>
	<head>
	<title>Rumo ao Futuro</title>
	<link href="styles/site.css?v=<?php echo $_SESSION["css_counter"];?>" rel="stylesheet" type="text/css" />

	</head>
<body>
	<nav>
	<a href='/rumo_teste/'>Home</a>

	<?php include "mech/menu.php";?>
   </nav>
	<div id='header'>
	</div>