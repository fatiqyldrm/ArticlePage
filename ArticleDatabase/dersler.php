<?php
include ("connectDB.php");
session_start(); 
$_SESSION['aktif'] = 2;
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style7.css">
    <script type="text/javascript" src="jscript.js"></script>
    <title>Ders Sayfası</title>
  <link rel="icon" type="text/css" href="icon.png">
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
<br><br><hr style="width: 1750px;"><br><br>
<?php

if ($conn != null) {
    $sql = $conn->prepare("SELECT * FROM dersler");
    $sql->execute();
    echo '<center><div class="container">';
    while ($makale = $sql->fetch(PDO::FETCH_ASSOC))
    {
      echo '<div class="item">';
      echo '<p style="color: white; font-size: 25px; text-align: center;">Ders Adı: '.$makale['dersad'];
      echo '<p style="color: white; font-size: 20px; text-align: center;">Eğitmen Adı: '.$makale['dershoca'];
      echo '<p style="color: white; font-size: 19px; text-align: center;">Kredi: '.$makale['derskredi'];
      echo '</div>';
      echo '<br><br><hr style="width: 1750px;"><br><br>';
    }
    echo '</div></center>';
}

?>

</body>
</html>

