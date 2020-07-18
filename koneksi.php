<?php 

$server= "localhost";
$username = "root";
$pass = "";
$databasename = "tugasuas";


$db= mysqli_connect($server,$username,$pass,$databasename);
if(!$db){
	
	
	die ('koneksi tidak terhubung');
}
?>