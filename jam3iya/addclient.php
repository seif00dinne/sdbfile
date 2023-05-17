<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");
$nomp = mysqli_real_escape_string($conn, $_POST['nom']);
$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
$NIF = mysqli_real_escape_string($conn, $_POST['NIF']);
$NIS = mysqli_real_escape_string($conn, $_POST['NIS']);
$RCN = mysqli_real_escape_string($conn, $_POST['RCN']); 
$adrasse = mysqli_real_escape_string($conn, $_POST['adrasse']); 
$query = "INSERT INTO `client`(`nom`, `numtelephone`, `RCN`, `NIF`, `NIS`, `adrasse`) VALUES ('$nomp','$telephone','$RCN','$NIF','$NIS','$adrasse')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>