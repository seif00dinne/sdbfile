<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");
$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
$prixg = mysqli_real_escape_string($conn, $_POST['prixg']);
$priixbini = mysqli_real_escape_string($conn, $_POST['priixbini']);
$prixt = mysqli_real_escape_string($conn, $_POST['prixt']);
$nomproduit = mysqli_real_escape_string($conn, $_POST['nomproduit']);
$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$numbon = mysqli_real_escape_string($conn, $_POST['numbon']);
$element = mysqli_real_escape_string($conn, $_POST['date_retour']);
$problem = mysqli_real_escape_string($conn, $_POST['problem']);
$total = mysqli_real_escape_string($conn, $_POST['total']);
$time = date("Y/m/d");

	 
$query = "INSERT INTO `repartion`(`nom`, `phone`, `date`, `prixbene`, `nomproduit`, `numbon`, `prixt`, `prixg`, `date_retour`, `problem`, `total`) VALUES ('$nom','$telephone','$time','$priixbini','$nomproduit','$numbon','$prixt','$prixg','$element','$problem','$total')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>