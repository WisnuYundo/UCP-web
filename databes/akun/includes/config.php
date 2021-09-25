<?php
$con = new PDO("mysql:host=localhost;dbname=basicrp", "root", "");
	
session_start();
function checkForLogin()
{
	if(!isset($_SESSION['UCP']))
	{
		//header("Location:login.php");
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';    
		exit;
	}
}
?>