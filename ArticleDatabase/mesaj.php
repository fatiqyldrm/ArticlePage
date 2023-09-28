<?php
include ("connectDB.php");
session_start();
?>

<?php 

if (isset($_POST["submit"])) {
	echo "<script>alert('Mesajınız başarıyla iletilmiştir..')</script>";
    include("iletisim.php");
}
?>
