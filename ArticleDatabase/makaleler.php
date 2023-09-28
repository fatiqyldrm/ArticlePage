<?php
include ("connectDB.php");
session_start(); 
$_SESSION['aktif'] = 1;

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style6.css">
    <script type="text/javascript" src="jscript.js"></script>
    <title>Makale Sayfası</title>
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

<?php

if ($conn != null) {
    $sql = $conn->prepare("SELECT * FROM makaleler");
    $sql->execute();
    echo '<center><div class="container">';
    while ($makale = $sql->fetch(PDO::FETCH_ASSOC))
    {
      echo '<div class="item">';
      echo '<p style="color: white; font-size: 25px; text-align: center; font-weight: bold;">'.$makale['makalebaslik'].'</p>';
      echo '<a href="makaledetay.php?stdID='.$makale['makaleid'].'" style="text-decoration-line: none; color: white; onclick=';
      echo '"><p style="color: white; font-size: 20px; text-align: left;">  '.$makale['makaleicerik'];
      echo '</a></div>';
      echo '<p style="color: white; position: absolute; left: 370px; font-size: 19px">Yazar: '.$makale['makaleyazar'];
      echo '<p style="color: white; position: absolute; right: 370px; font-size: 19px">'.$makale['makaletarih'].'</p>';
      echo '<br><br><hr style="width: 1750px;"><br><br>';
    }
    echo '</div></center>';
}

?>

</body>
</html>

