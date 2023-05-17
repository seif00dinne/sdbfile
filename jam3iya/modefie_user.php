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
$date = mysqli_real_escape_string($conn, $_POST['date']);
$card = mysqli_real_escape_string($conn, $_POST['card']);
$mot_de_pass = mysqli_real_escape_string($conn, $_POST['mot_de_pass']);
$time = date("Y/m/d");
$id_user=mysqli_real_escape_string($conn, $_POST['id_user']);
	  
	 
$query = "UPDATE `utulisateur` SET `nom`='$nom',`prenom`='$prenom',`date`='$date',`card`='$card',`time`='$time',`mot_de_pass`='$mot_de_pass' WHERE `id_user`=$id_user";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>