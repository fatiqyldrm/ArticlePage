<?php 

try
{
	$conn = new PDO("mysql:host=localhost; dbname=vt_blog", "root", "15371537");
}
catch (Exception $e)
{
	echo $e->getMessage();
}

?>