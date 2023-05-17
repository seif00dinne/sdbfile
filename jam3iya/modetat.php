<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");
$id = mysqli_real_escape_string($conn, $_POST['id']);
$etat = mysqli_real_escape_string($conn, $_POST['etat']);

$time = date("Y-m-d");
$mois= date("Y-m");
$yearr=date("Y");
	  
	 
$query = "UPDATE `vissale` SET`etat`='$etat' WHERE codebar='$id'";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>