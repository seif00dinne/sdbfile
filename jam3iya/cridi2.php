<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");

$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$cridi = mysqli_real_escape_string($conn, $_POST['cridi']);
$time = date("Y-m-d");
$mois = date("Y-m");
$year = date("Y");
	  
	 
$query = "UPDATE `cridi` SET `cridii`='$cridi',`datecridi`='$time',`mois`='$mois',`year`='$year' WHERE id='$nom'";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>