<?php

include ("connectDB.php");
session_start();
$_SESSION['aktif'] = 1;
?> 

<?php 

if (isset($_POST["kaydet"])) {

    $makaleyazar = $_POST["makaleyazar"]; 
    $makalebaslik = $_POST["makalebaslik"];
    $makaleicerik = $_POST["makaleicerik"];
    
    
    if(isset($makaleyazar) && isset($makalebaslik) && isset($makaleicerik))
    {           
                if (!empty($makalebaslik) && !empty($makaleyazar) && !empty($makaleicerik) )
                {
                    $stmt = $conn->prepare("INSERT INTO makaleler (makaleyazar, makalebaslik, makaleicerik) 
                        VALUES ('$makaleyazar','$makalebaslik','$makaleicerik')");
                    $stmt->execute();

                    Header("Location: anasayfa.php");

                    $stmt->close();
                    $conn->close();
                }
                elseif (empty($makalebaslik) || empty($makaleyazar) || empty($makaleicerik) )
                {
     
                }
    }
    
}
    

?>
</div>

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
    <title>Makale Ekleme Sayfası</title>
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
            <form action="makaleekle.php" method="POST">
                <div>
                    <label>
                    <h1>Makale Ekle</h1><br><br>

                    </label>
                </div>
                <div>
                </div>

                <div class="mb-3">
                    <label id="labelstil1">Yazar</label>
                    <input type="text" class="form-control" name="makaleyazar" required>
                   
                </div>
                <div class="mb-3">
                    <label id="labelstil1">Makale Başlık</label>
                    <input type="text" class="form-control" name="makalebaslik" required>
                    
                </div>
                <div class="mb-3">
                    <label id="labelstil1">Makale İçerik</label>
                    <textarea type="text" class="form-control" name="makaleicerik" style="height: 230px;" required></textarea>

                </div>

                <button type="submit" name="kaydet" class="button">Kaydet</button> 
            </form>
        </div>

    </div>
  
</body>

</html>