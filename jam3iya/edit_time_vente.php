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
$yearr = mysqli_real_escape_string($conn, $_POST['yearr']);
$mois = mysqli_real_escape_string($conn, $_POST['mois']);
$date1 = mysqli_real_escape_string($conn, $_POST['date']);

	  
	 
$query = "UPDATE `vente` SET `date`='$date1',`mois`='$mois',`yearr`='$yearr' WHERE  idd='$id'";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>