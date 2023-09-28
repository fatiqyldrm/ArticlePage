<?php
   session_start();
	$_SESSION['aktif'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fatih Yıldırım</title>
	<link rel="icon" type="text/css" href="icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style4.css">
	<script type="text/javascript" src="jscript.js"></script>
	<style>
		body {
			background-color: black;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
		}
	</style>
</head>
<body background="resim1.png">
		
<?php if ($_SESSION['menn']) {
	include("m.php");
}
else{
	include("m2.php");
} ?>

<div class="anamesaj">
	<h1>Blog Sayfama Hoşgeldiniz</h1>
</div>

</body>
</html>