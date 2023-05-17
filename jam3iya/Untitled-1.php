<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");
$timestar=$_POST['timestar'];
$prof =$_POST['prof'];
$groupes =$_POST['groupes'];
	  
	 
$query = "INSERT INTO `calender`(`timestar`, `prof`, `groupes`)  VALUES('$timestar', '$prof','$groupes')";
$results = mysqli_query($conn, $query);
if($results>0)
	{
	        echo "user added successfully";
	 }

//echo json_encode($result);
?>