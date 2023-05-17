<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}


$id_user = mysqli_real_escape_string($conn, $_POST['id_user']);

$time = date("Y/m/d");
	  
	 
$query = "DELETE FROM `utulisateur`WHERE id_user=$id_user";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }


?>