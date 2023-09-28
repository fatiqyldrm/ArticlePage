<?php
   session_start(); 
include ("connectDB.php");
$_SESSION['aktif'] = 6;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Sayfası</title>
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
} 

?>
	<center>
	<br>	<br>	<br>	<br>	<br>	<br>	<br>
	<br>	<br>	<br>	<br>	<br>	<br>	<br>
	&nbsp;&nbsp;&nbsp;&nbsp;<label id="labeltext" style="font-size: 28px; color: white;">Giriş Yap</label>
</center>
<br>
<center>
<form action="lgn.php" method="POST" autocomplete="off">
<div id="loginDiv">             
	<table>
		<tr>
			<td style="font-family: Audiowide, sans-serif;
    						font-size: 20px;
    						font-weight: bold;
    						color: white;">Username: </td>
			<td>
				<input type="text" id="uName" name="uName" 
				<?php if (isset($_COOKIE['userName'])){?>
					value="<?php echo $_COOKIE['userName'] ?>"
				<?php }?> required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td style="font-family: Audiowide, sans-serif;
    						font-size: 20px;
    						font-weight: bold;
    						color: white;">Password: </td>
			<td>
				<input type="Password" id="pWord" name="pWord"
				<?php if (isset($_COOKIE['userName'])){?>
					value="<?php echo $_COOKIE['passWord'] ?>"
				<?php }?> required autocomplete="off">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" class="lgBtn" name="btnLgn" value="Login" required>
			</td>
		</tr>
	</table>
</form>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;<label id="labeltext1" style="font-size: 28px; color: white;"></label>
</center>
</body>
</html>