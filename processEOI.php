<?php
function sanitise_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8"/>
<meta name="description" content="creating web applications lab 10"/>
<meta name="keywords" content="php",mysql"/>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="creating web applications"/>
<meta name="keywords" content="php",mysql"/>
<title>retrieving records to html</title>
</head>
<body>
<h1 style ='font:20px/21px Arial,tahoma,sans-serif;color:green'>YOUR DETAILS ARE SUBMITTED SUCCESSFULLY!!!!!!!</h1>
<?php
	require_once ("settings.php"); //connection info
	
	$conn=@mysqli_connect($host,
	$user,
	$pwd,
	$sql_db
	);
	if (!$conn) {
		echo"<p>DataBase connection failure</p>";
	}
	else{
	
		if (isset($_POST["Jreference"])) {
	$Jreference = $_POST["Jreference"];
}
		if (isset($_POST["firstname"])) {
	$firstname = $_POST["firstname"];
}
		if (isset($_POST["lastname"])) {
	$lastname = $_POST["lastname"];
		}
	
		if (isset($_POST["sadress"])) {
	$sadress = $_POST["sadress"];
}
if (isset($_POST["suburb"])) {
	$suburb = $_POST["suburb"];
}
if (isset($_POST["pcode"])) {
	$pcode = $_POST["pcode"];
}
if (isset($_POST["email"])) {
	$email = $_POST["email"];
}
if (isset($_POST["pnumber"])) {
	$pnumber = $_POST["pnumber"];
}
	
if (isset($_POST["Other"])) {
	$Other = $_POST["Other"];
}
	$firstname = sanitise_input($firstname);
	$lastname = sanitise_input($lastname);
	$sadress = sanitise_input($sadress);
	$suburb = sanitise_input($suburb);
	$pcode = sanitise_input($pcode);
	$email = sanitise_input($email);
	$pnumber = sanitise_input($pnumber);
	$Other = sanitise_input($Other);
	$errMsg ="";
		if ($firstname == ""){
			$errMsg .= "<p>You must enter your first name</p>";
		}
		else if (!preg_match("/^[a-zA-Z]*$/",$firstname)){
			$errMsg .= "<p>Only alpha letters allowed in your first name.</p>";
		}
		if ($lastname == ""){
			$errMsg .= "<p>You must enter your last name</p>";
		}
		else if (!preg_match("/^[a-zA-Z]*$/",$lastname)){
			$errMsg .= "<p>Only alpha letters allowed in your last name.</p>";
		}
		if ($pnumber == ""){
			$errMsg .= "<p>You must enter your phone number</p>";
		}
		else if (!preg_match("/^\d{10}$/",$pnumber)){
			$errMsg .= "<p>Enter valid mobile number.</p>";
		}
		if ($email == ""){
			$errMsg .= "<p>You must enter your email address</p>";
		}
		else if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$errMsg .= "Invalid email format"; 
		}
		else{
		$sql_table="Jobs";
		$query = "INSERT INTO $sql_table (JobReferenceNumber, FirstName, LastName, StreetAddress, Suburb, PostCode, Email, Phone, Skills) VALUES ('$Jreference', '$firstname', '$lastname', '$sadress', '$suburb', $pcode, '$email', $pnumber,'$Other')";
		$result=mysqli_query($conn,$query);
		if(!$result){
			echo"<p class=\"wrong\">something is wrong with",$query,"</p>";
		}
		else{
			echo "<p style ='font:20px/21px Arial,tahoma,sans-serif;color:blue'>Your application is succesfully submitted $firstname $lastname!</br>
			We will access your application....</br>
			Get back to you when processing finish!</p>";  
		}
		mysqli_close($conn);
	}
	}
?>
</body>
</html>