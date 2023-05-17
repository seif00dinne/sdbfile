
<?php
$url='185.27.134.10:3306';
$username='epiz_30351650';
$password='vJMNQ3dh3tN4256';
$conn=mysqli_connect($url,$username,$password,"epiz_30351650_jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");
$time=date("Y-m-d");


$sql  = "SELECT * FROM `cridi`" ;  
 $stmt = $conn->prepare($sql);
 $stmt->execute() ; 
 $resultSet = $stmt->get_result();
$data = $resultSet->fetch_all(MYSQLI_ASSOC); 

 echo json_encode($data) ; 

//echo json_encode($result);
?>