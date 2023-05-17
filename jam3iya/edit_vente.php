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
$prixg = mysqli_real_escape_string($conn, $_POST['prixg']);
$priixbini = mysqli_real_escape_string($conn, $_POST['priixbini']);
$prixt = mysqli_real_escape_string($conn, $_POST['prixt']);
$prixt2 = mysqli_real_escape_string($conn, $_POST['prixt2']);
$nomproduit = mysqli_real_escape_string($conn, $_POST['nomproduit']);
$codebar = mysqli_real_escape_string($conn, $_POST['codebar']);
$stock = mysqli_real_escape_string($conn, $_POST['stock']);
$prixbini2 = mysqli_real_escape_string($conn, $_POST['prixbini2']);
$prixg2 = mysqli_real_escape_string($conn, $_POST['prixg2']);

$time = date("Y-m-d");
$mois= date("Y-m");
$yearr=date("Y");
	  
	 
$query = "UPDATE `vente` SET `prixt`='$prixt',`nomproduit`='$nomproduit',`prixbene`='$priixbini',`prixg`='$prixg',`prixg2`='$prixg2',`prixbene2`='$prixbini2' WHERE codebar='$codebar' && id='$id'";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>