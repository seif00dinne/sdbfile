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
$prixg2 = mysqli_real_escape_string($conn, $_POST['prixg2']);
$priixbini = mysqli_real_escape_string($conn, $_POST['priixbini']);
$priixbini2 = mysqli_real_escape_string($conn, $_POST['priixbini2']);
$prixt = mysqli_real_escape_string($conn, $_POST['prixt']);
$nomproduit = mysqli_real_escape_string($conn, $_POST['nomproduit']);
$codebar = mysqli_real_escape_string($conn, $_POST['codebar']);
$unm = mysqli_real_escape_string($conn, $_POST['unm']);
$time = date("Y-m-d");
$mois= date("Y-m");
$yearr=date("Y");
$timee = date("Y-m-d h:i:sa");
$user=mysqli_real_escape_string($conn, $_POST['user']);
$taille=mysqli_real_escape_string($conn, $_POST['taille']);
$numbon=mysqli_real_escape_string($conn, $_POST['numbon']);
$verssement=mysqli_real_escape_string($conn, $_POST['verssement']);
$cridi=mysqli_real_escape_string($conn, $_POST['cridi']);
$retour=mysqli_real_escape_string($conn, $_POST['retour']);
$qt=mysqli_real_escape_string($conn, $_POST['qt']);
$nom=mysqli_real_escape_string($conn, $_POST['nom']);
$telephone=mysqli_real_escape_string($conn, $_POST['telephone']);

	  
	 
$query = "INSERT INTO `vente`(`nom`, `telephone`,`nomproduit`, `id`, `prixt`, `prixbene`, `date`, `prixg`, `mois`, `yearr`, `codebar`, `timeid`, `unm`, `user`, `taille`, `numbon`, `verssement`, `cridi`, `retour`, `qt`, `prixg2`, `prixbene2`) VALUES ('$nom','$telephone','$nomproduit','$id','$prixt','$priixbini','$time','$prixg','$mois','$yearr','$codebar','$timee','$unm','$user','$taille','$numbon','$verssement','$cridi','$retour','$qt','$prixg2','$priixbini2')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>
