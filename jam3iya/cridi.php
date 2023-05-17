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
$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
$nomproduit = mysqli_real_escape_string($conn, $_POST['nomproduit']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$card = mysqli_real_escape_string($conn, $_POST['card']);
$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
$prixt = mysqli_real_escape_string($conn, $_POST['prixt']);
$cridi = mysqli_real_escape_string($conn, $_POST['cridi']);
$prixg = mysqli_real_escape_string($conn, $_POST['prixg']);
$priixbini = mysqli_real_escape_string($conn, $_POST['priixbini']);
$time = date("Y-m-d");
$mois = date("Y-m");
$year = date("Y");
$numbon=mysqli_real_escape_string($conn, $_POST['numbon']);
$qt=mysqli_real_escape_string($conn, $_POST['qut']);
	  
	 
$query = "INSERT INTO `cridi`(`nom`, `prenom`, `date`, `card`, `telephone`, `prixt`,`cridii`, `nomproduit`,`datecridi`, `prixg`, `priixbini`, `mois`, `year`, `numbon`, `qt`) VALUES ('$nom','$prenom','$time','$card','$telephone','$prixt','$cridi','$nomproduit','$time','$prixg','$priixbini','$mois','$year','$numbon','$qt')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>