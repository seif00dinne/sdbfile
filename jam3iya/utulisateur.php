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
	  
	 
$query = "INSERT INTO `utulisateur`(`nom`, `prenom`, `date`, `card`, `time`, `mot_de_pass`, `role`) VALUES ('$nom','$prenom','$date','$card','$time','$mot_de_pass','[value-7]')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>