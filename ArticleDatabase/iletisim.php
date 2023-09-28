<?php
   session_start(); 
include ("connectDB.php");
$_SESSION['aktif'] = 5;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>İletişim</title>
	<link rel="icon" type="text/css" href="icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
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

	<center>
	<p id="iletisim">İletişim</p>
    <hr>
	<form action="mesaj.php" method="post" autocomplete="off" id="iletisimform"> 
		<table>
			<tr>
				<td>Adınız: </td>
				<td><input type="text" name="ad" placeholder="Ör. Fatih" required></td>
			</tr>
			<tr>
				<td>Soyadınız: </td>
				<td><input type="text" name="soyad" placeholder="Ör. Yıldırım" required></td>
			</tr>
				<tr>
				<td>Email: </td>
				<td><input type="email" name="email" placeholder="ornek@gmail.com" required></td>
			</tr>
				<tr>
				<td>Telefon: </td>
				<td><input type="tel" name="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" placeholder="5xx xxx xx xx" required></td>
			</tr>
			<tr>
				<td>Mesajınız: </td>
				<td><textarea style="width: 248px; height: 120px; font-size: 16px; resize: none;" required></textarea></td>
			</tr>
			<tr>
				<td>Dosyanız: </td>
				<td><input type="file" name="file" style="width: 244px; font-size: 18px;"></td>
			</tr>
			<tr>
				<td align="center"><input type="reset" name="reset" value="Temizle"></td>
				<td align="center"><input type="submit" name="submit" value="Gönder" return false></td>
			</tr>
		</table><br><br>
		<a href="https://www.instagram.com/yildirim.fath/" target="_blank"><img src="insta.png" style="width: 45px; height: 45px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="https://twitter.com/fatigyldrm/" target="_blank"><img src="twit.png" style="width: 45px; height: 45px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="mailto:fyildirim459@gmail.com" target="_blank"><img src="gmail.png" style="width: 45px; height: 45px;"></a>
	</form>

	</center>
</body>
</html>