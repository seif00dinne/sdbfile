<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"jam3iya");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
 
}
//$result = mysqli_query($conn,"SELECT * FROM admine");
$time=mysqli_real_escape_string($conn, $_POST['nomproduit']);
$sql  = "SELECT * FROM `vente` WHERE date='$time'" ;  
 $stmt = $conn->prepare($sql);
 $stmt->execute() ; 
 $resultSet = $stmt->get_result();
$data = $resultSet->fetch_all(MYSQLI_ASSOC); 

 echo json_encode($data) ; 

//echo json_encode($result);
?>