<?php 
$server = "localhost";
$usuario = "root";
$password ="";
$db = "inter_news";
$conn =  mysqli_connect($server,$usuario,$password,$db) or die("Error connecting");
$stmt = mysqli_prepare($conn,"SELECT * FROM `usuarios`");
mysqli_stmt_execute($stmt);
$result = $stmt->get_result();
$resultarray = array();
if(mysqli_num_rows($result)){
	while ($resultarray = mysqli_fetch_assoc($result)) {
		echo $resultarray["ID"];

	}
	
}mysqli_close($conn);

?>