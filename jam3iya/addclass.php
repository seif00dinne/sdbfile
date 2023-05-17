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
$prixt2 = mysqli_real_escape_string($conn, $_POST['prixt2']);
$fornuseur = mysqli_real_escape_string($conn, $_POST['fornuseur']);
$numfornuseur = mysqli_real_escape_string($conn, $_POST['numfornuseur']);
$nomproduit = mysqli_real_escape_string($conn, $_POST['nomproduit']);
$codebar = mysqli_real_escape_string($conn, $_POST['codebar']);
$stock = mysqli_real_escape_string($conn, $_POST['stock']);
$time = date("Y-m-d");
$annee = date("Y");
$mois = date("Y-m");
$qtac=mysqli_real_escape_string($conn, $_POST['qtac']);
$exp=mysqli_real_escape_string($conn, $_POST['exp']);
	  if($exp==null){
		$exp=$time;
	  }
echo $time;
echo $annee;
echo $exp;
echo $mois;
echo $prixt2;	 
$query = "INSERT INTO `vissale`(`id`,`prixg`, `priixbini`, `prixt`, `nomproduit`, `time`, `codebar`,  `stock`, `anne`, `mois`, `exp`, `prixt2`, `nomfornuseur` ,`numfornuseur`,`prixg2`, `prixbini2`, `qtac`) VALUES ('$id','$prixg','$priixbini','$prixt','$nomproduit','$time','$codebar','$stock','$annee','$mois','$exp','$prixt2','$fornuseur','$numfornuseur','$prixg2','$priixbini2','$qtac')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

echo json_encode($result);
?>