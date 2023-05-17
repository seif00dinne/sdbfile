<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");

$nomproduit = mysqli_real_escape_string($conn, $_POST['nomproduit']);
$codebar = mysqli_real_escape_string($conn, $_POST['codebar']);
$prixg = mysqli_real_escape_string($conn, $_POST['prixg']);
$nomfornuseur = mysqli_real_escape_string($conn, $_POST['nomfornuseur']);
$codebar = mysqli_real_escape_string($conn, $_POST['codebar']);
$time = date("Y/m/d");
$annee = date("Y");
$mois = date("Y-m");
	  
	 
$query = "INSERT INTO `pouballe`(`nomproduit`, `codebar`, `prixg`, `nomfornuseur`, `date`, `mois`, `year`) VALUES ('$nomproduit','$codebar','$prixg','$nomfornuseur','$time','$mois','$annees')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>