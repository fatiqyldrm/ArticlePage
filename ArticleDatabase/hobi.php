<?php
   session_start();
include ("connectDB.php");
$_SESSION['aktif'] = 3;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hobilerim</title>
	<link rel="icon" type="text/css" href="icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
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
<body background="resim1.png" class="arka">
<?php if ($_SESSION['menn']) {
	include("m.php");
}
else{
	include("m2.php");
} ?>

<div class="pic-ctn">
    <img src="kup.jpg" class="pic">
    <img src="bisiklet.jpg" class="pic">
    <img src="muzik.jpg" class="pic">
    <img src="pc.jpg" class="pic">
    <img src="mangal.jpg" class="pic">
 </div>
<div class="lbl-ctn">
	<label class="lbl">Küp Çözmek</label>
	<label class="lbl">Bisiklet Sürmek</label>
	<label class="lbl">Müzik Dinlemek</label>
	<label class="lbl">Bilgisayarda Takılmak</label>
	<label class="lbl">Mangal Yapmak</label>
</div>
</body>
</html>