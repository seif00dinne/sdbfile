<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");

$etat = mysqli_real_escape_string($conn, $_POST['etat']);
$phone= mysqli_real_escape_string($conn, $_POST['phone']);
$id= mysqli_real_escape_string($conn, $_POST['id']);
$time = date("Y/m/d");
	  
	 
$query = "UPDATE `repartion` SET `etat`='$etat' WHERE phone='$phone' && id='$id'";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>