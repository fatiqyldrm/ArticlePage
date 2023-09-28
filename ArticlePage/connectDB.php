<?php 

try
{
	$dbConnection = new PDO("mysql:host=localhost; dbname=vt_blog", "", "");
}
catch (Exception $e)
{
	echo $e->getMessage();
}


?>