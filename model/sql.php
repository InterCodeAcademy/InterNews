<?php 
function SQLQuery($query, $get){ // Llamar SQLQuery("COMANDO SQL", DATOS QUE SE NECESITAN)
$server = "localhost";
$usuario = "root";
$password ="";
$db = "inter_news";
$conn =  mysqli_connect($server,$usuario,$password,$db) or die("Error connecting");
$stmt = mysqli_prepare($conn,$query);
mysqli_stmt_execute($stmt);
$result = $stmt->get_result();
$resultarray = array();
if(mysqli_num_rows($result)){
	while ($resultarray = mysqli_fetch_assoc($result)) {
		echo $resultarray[$get];
	}
	
}mysqli_close($conn);
}

?>
