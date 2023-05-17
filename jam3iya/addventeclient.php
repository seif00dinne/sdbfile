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
$user = mysqli_real_escape_string($conn, $_POST['user']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$prixg = mysqli_real_escape_string($conn, $_POST['prixg']);
$priixbini = mysqli_real_escape_string($conn, $_POST['priixbini']);
$prixt = mysqli_real_escape_string($conn, $_POST['prixt']);
$nomproduit = mysqli_real_escape_string($conn, $_POST['nomproduit']);
$codebar = mysqli_real_escape_string($conn, $_POST['codebar']);
$time = date("Y/m/d");
$mois= date("Y-m");
$yearr=date("Y");
$timee = date("Y-m-d h:i:sa");
	  
	 
$query = "INSERT INTO `vente`(`nom`, `telephone`, `nomproduit`, `id`, `prixt`, `prixbene`, `date`, `prixg`, `mois`, `yearr`, `codebar`, `timeid`) VALUES ('$user','$phone','$nomproduit','$id','$prixt','$priixbini','$time','$prixg','$mois','$yearr','$codebar','$timee')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);

?>
