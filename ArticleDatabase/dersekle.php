<?php

include ("connectDB.php");
session_start(); 
$_SESSION['aktif'] = 2;
?>

<?php 

if (isset($_POST["kaydet"])) {

    $dersad = $_POST["dersad"]; 
    $dershoca = $_POST["dershoca"];
    $derskredi = $_POST["derskredi"];
    
    
    if(isset($dersad) && isset($dershoca) && isset($derskredi))
    {           
                if (!empty($dershoca) && !empty($dersad) && !empty($derskredi) )
                {
                    $stmt = $conn->prepare("INSERT INTO dersler (dersad, dershoca, derskredi) 
                        VALUES ('$dersad','$dershoca','$derskredi')");
                    $stmt->execute();

                    Header("Location: anasayfa.php");

                    $stmt->close();
                    $conn->close();
                }
    }
    
}
    

?>


<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jscript.js"></script>
    <title>Ders Ekleme Sayfası</title>
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

    <div class="container p-5">
        <div class="card p-5">
            <form action="dersekle.php" method="POST">
                <div>
                    <label>
                    <h1>Ders Ekle</h1><br><br>

                    </label>
                </div>
                <div>
                </div>

                <div class="mb-3">
                    <label id="labelstil1">Ders Adı</label>
                    <input type="text" class="form-control" name="dersad" required>
                   
                </div>
                <div class="mb-3">
                    <label id="labelstil1">Ders Hocası</label>
                    <input type="text" class="form-control" name="dershoca" required>
                    
                </div>
                <div class="mb-3">
                    <label id="labelstil1">Ders Kredisi</label>
                    <input type="number" min="1" max="45" value="5" class="form-control" name="derskredi" style="height: 45px; width: 90px;" required></input><br>

                <button type="submit" name="kaydet" class="button">Kaydet</button> 
            </form>
        </div>

    </div>
  
</body>

</html>