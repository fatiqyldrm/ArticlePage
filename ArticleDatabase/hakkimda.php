<?php
session_start();
include ("connectDB.php");
$_SESSION['aktif'] = 4;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hakkımda</title>
	<link rel="icon" type="text/css" href="icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
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
    
    <div class = "about-wrapper">
      <div class = "about-left">
        <div class = "about-left-content">
          <div>
            <div class = "shadow">
              <div class = "about-img">
                <img src = "profil.png">
              </div>
            </div>

            <h2>Fatih Yıldırım</h2>
            <h3>Bilgisayar Mühendisi</h3>
          </div>
        </div>
        
      </div>

      <div class = "about-right">
        <h1>Merhaba<span>!</span></h1>
        <h2>Ben Kimim & Ne Hedefliyorum?</h2>
        <div class = "about-btns">
          <a href="https://github.com/fatiqyldrm" target="_blank"><button type = "button" class = "btn btn-white">Github</button></a>
        </div>

        <div class = "about-para">
          <p>Ben Bilgisayar Mühendisliği 3. sınıf öğrencisiyim.</p>
          <p>Kişisel başarımlarımı, içeriklerimi ve hobilerimi bu blog sayfası ile insanlarla paylaşarak hem kişisel gelişimimi hem de interaktif şekilde toplum ile ilerlemeyi amaç olarak gütmekteyim.</p>
        </div>
      </div>
    </div>


</body>
</html>