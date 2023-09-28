<?php
include ("connectDB.php");
session_start();
$_SESSION['menn'] = TRUE;
?>

<?php 

if (isset($_POST["btnLgn"])) { 
    
    $kad = $_POST["uName"]; 
    $ksifre = $_POST["pWord"];
    $sql = $conn->prepare("SELECT * FROM kullanıcılar");
    $sql->execute();

while ($kullanici = $sql->fetch(PDO::FETCH_ASSOC))
{
    if(isset($kad) && isset($ksifre))
    {           
                if (!empty($ksifre) && !empty($kad))
                {

                        if($kad == $kullanici['nickname'] && $ksifre == $kullanici['password'])
                        {
                            $_SESSION['isim'] = $kullanici['nickname'];
                            $_SESSION['menn'] = FALSE;
                            Header("Location: anasayfa.php");
                            sleep(1);
                            exit;
                        }
                        else{
                            echo "<script>alert('Böyle bir kullanıcı yoktur! Tekrar Deneyiniz..')</script>";
                            include("login.php");
                        }

                }
                else if (empty($ksifre) || empty($kad))
                {
                    Header("Location: login.php");
                }
    }
}

} 

?>