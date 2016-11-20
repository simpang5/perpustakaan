<?php
if (!defined("read")) {
	echo "403 Forbidden";
	exit();
} else {
	if (read!==true) {
		echo "403 Forbidden";
		exit();
	}
}
?>
<html lang="in">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>

		<!-- FONT –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  		<link href='font/css/Raleway400-300-600.css' rel='stylesheet' type='text/css'>

  		<!-- CSS ___________________________________________________ -->
  		<link rel="stylesheet" href="CSS/style.css">
  		<link rel="stylesheet" href="font/css/font-awesome.min.css">
  		<link rel="stylesheet" href="CSS/bootstrap.min.css">

  		<!-- Scripts–––––––––––––––––––––––––––––––––––––––––––––––––– -->
  		<script src="js/fontawesome_1dbdbeefba.js"></script>
  		<script src="js/jquery-2.1.1.js"></script>
  		<script src="js/jquery-1.9.1.js"></script>
  		<script src="js/jquery-1.11.2.js"></script>
	</head>
	<body>
		<div class="container">
<ul>
<h1>Simpang5</h1>
<li><a href="#contact"><i class="fa fa-address-book">Contact</i></a></li>
<li><a href="#tentangkami"><i class="fa fa-info-circle" aria-hidden="true">Tentang Kami</i></a></li>
<li><a href="#topbuku"><i class="fa fa-line-chart" aria-hidden="true">Top Buku</i></a></li>
<li><a href="#listbuku"><i class="fa fa-book" aria-hidden="true">List Buku</i></a></li>
<li><a class="active" href="#home"><i class="fa fa-home" aria-hidden="true">Home</i></a></li>
</ul>
