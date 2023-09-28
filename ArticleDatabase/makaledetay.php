<?php

include ("connectDB.php");
session_start(); 
$_SESSION['aktif'] = 1;

?>


<?php 

if (isset($_POST["kaydet"])) {

    $yorumyazar = $_POST["yorumyazar"]; 
    $yorumicerik = $_POST["yorumicerik"];
    $yorumcuk = $_GET['stdID'];

    if(isset($yorumyazar) && isset($yorumicerik))
    {           
                if (!empty($yorumicerik) && !empty($yorumyazar))
                {
                    $stmt = $conn->prepare("INSERT INTO yorumlar (yorummakale, yorumyazar, yorumicerik) 
                        VALUES ('$yorumcuk','$yorumyazar','$yorumicerik')");
                    $stmt->execute();

                    header("Refresh:0");
                    
                    $stmt->close();
                    $conn->close();
                }
    }
    
}
    

?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style6.css">
    <script type="text/javascript" src="jscript.js"></script>
    <title>Makale Detay Sayfası</title>
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
    $sql = $conn->prepare("SELECT * FROM makaleler WHERE makaleid=:id");
    $sql->execute(['id'=> $_GET['stdID']]);
    $makale = $sql->fetch(PDO::FETCH_ASSOC);
    echo '<center><div class="container">';
    echo '<div class="item">';
    echo '<p style="color: white; font-size: 25px; text-align: center; font-weight: bold;">'.$makale['makalebaslik'].'</p>';
    echo '<p style="color: white; font-size: 20px; text-align: left;">  '.$makale['makaleicerik'].'</p>';
    echo '</div>';
    echo '<p style="color: white; position: absolute; left: 370px; font-size: 19px">Yazar: '.$makale['makaleyazar'];
    echo '<p style="color: white; position: absolute; right: 370px; font-size: 19px">'.$makale['makaletarih'].'</p>';
    echo '<br><br><hr style="width: 1750px;"><br><br>';
    echo '</div></center>';
}

?>
<center>
<div class="container p-5" style="width: 1500px; text-align: left;" >
        <div class="card p-5">
            <form action="" method="POST">
                <div style="text-align: center;">
                    <label>
                    <h2>Yorum Ekle</h2><br><br>
                    </label>
                </div>
                <div>
                </div>

                <div class="mb-3">
                    <label id="labelstil1">Adınız:</label>
                    <input type="text" class="form-control" name="yorumyazar" required>
                   
                </div>
                <div class="mb-3">
                    <label id="labelstil1">Yorumunuz:</label>
                    <input type="text" class="form-control" name="yorumicerik" required>
                    
                </div><br>
                <button type="submit" name="kaydet" class="button">Yorum Yap</button> 
            </form>
        </div>

    </div>
</center>

<?php

if ($conn != null) {
    $sql = $conn->prepare("SELECT * FROM yorumlar WHERE yorummakale=:id");
    $sql->execute(['id'=> $_GET['stdID']]);
    echo '<center><div class="container">';
    while ($yorum = $sql->fetch(PDO::FETCH_ASSOC))
    {
    echo '<div class="item" style="padding: 30px">';
    echo '<p style="color: white; font-size: 25px; text-align: center; font-weight: bold;">'.$yorum['yorumyazar'].'</p>';
    echo '<p style="color: white; font-size: 20px; text-align: left;">  '.$yorum['yorumicerik'].'</p>';
    echo '</div>';
    echo '<br><br><hr style="width: 1750px;"><br><br>';
    }
    echo '</div></center>';

}

?>

</body>
</html>

