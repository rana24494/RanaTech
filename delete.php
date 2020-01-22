<?php
    require_once ("settings.php"); //connection info
	$conn = @mysqli_connect($host,
	$user,
	$pwd,
	$sql_db
	);
	if (!$conn) {
	echo"<p>DataBase connection failure</p>";
	}
	else{
		if (isset($_POST["firstname"])) {
	$firstname = $_POST["firstname"];
	if (isset($_POST["lastname"])) {
	$lastname = $_POST["lastname"];
}
}
	$query ="DELETE FROM Jobs WHERE FirstName='$firstname' and lastName='$lastname'"; 
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo"<p>something is wrong with",$query,"</p>";
		}
		else {
			echo "<p style ='font:20px/21px Arial,tahoma,sans-serif;color:blue'>Your Record succesfully deleted from Database, $firstname $lastname!</br>
			</p>";  
		}}
		
?>