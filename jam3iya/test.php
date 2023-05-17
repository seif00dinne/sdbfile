<?php
$url='185.27.134.10:3306';
$username='epiz_30351650';
$password='vJMNQ3dh3tN4256';
$conn=mysqli_connect($url,$username,$password,"epiz_30351650_jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");
$id = mysqli_real_escape_string($conn, $_POST['id']);
$prixg = mysqli_real_escape_string($conn, $_POST['prixg']);
$priixbini = mysqli_real_escape_string($conn, $_POST['priixbini']);
$prixt = mysqli_real_escape_string($conn, $_POST['prixt']);
$nomproduit = mysqli_real_escape_string($conn, $_POST['nomproduit']);
$codebar = mysqli_real_escape_string($conn, $_POST['codebar']);
$stock = mysqli_real_escape_string($conn, $_POST['stock']);
$time = date("Y/m/d");
	  
	 
$query = "INSERT INTO `vissale`(`id`, `prixg`, `priixbini`, `prixt`, `nomproduit`, `time`, `codebar`,  `stock`) VALUES ('$id','$prixg','$priixbini','$prixt','$nomproduit','$time','$codebar','$stock')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>