<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");

$numbon = mysqli_real_escape_string($conn, $_POST['numbon']);

$time = date("Y/m/d");
	  
	 
$query = "DELETE FROM `vente`WHERE numbon='$numbon'";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>