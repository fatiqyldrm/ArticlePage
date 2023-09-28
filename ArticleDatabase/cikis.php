<?php
include ("connectDB.php");
session_start();
$_SESSION['menn'] = TRUE;
$_SESSION['aktif'] = 6;
Header("Location: anasayfa.php");
sleep(1);
?>