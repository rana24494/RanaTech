<?php
include 'header.inc';
require_once('settings.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Applications</title>
<link rel="stylesheet" href="style/style.css">
</head>

<body>

<form id="eoi" method="post">
<legend>List All EOI</legend>
	<input type="submit" name="eoi" value="List All EOI"/>
</form>

<form id="jobref" method="post">
<legend>List By Job Reference Number</legend>
	<input type="number" name="job_ref"/>
	<input type="submit" name="jobref" value="List by Job Reference"/>
</form>

<form id="name" method="post">
<legend>List By First Name and Last Name</legend>
	<input type="text" name="first_name"/>
  	<input type="text" name="last_name"/>
	<input type="submit" name="byname" value="List by Name"/>
</form>

<?php

if(isset($_POST['eoi'])) 
{
	$eoi="select * from eoi";
	
	$result = mysqli_query($conn, $eoi);
	
	echo "<table>";
	echo "<tr>";
	echo "<th>EOI</th><th>Job Reference Number</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Address</th><th>Email</th><th>Phone</th><th>Skills</th><th>Status</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		echo "<td>".$row['EOInumber']."</td>";
		echo "<td>".$row['JobReferenceNumber']."</td>";
		echo "<td>".$row['firstName']."</td>";
		echo "<td>".$row['lastName']."</td>";
		echo "<td>".$row['dateOfBirth']."</td>";
		echo "<td>".$row['streetAddress']."<br>".$row['suburb']."<br>".$row['state']." ".$row['postCode']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['phoneNumber']."</td>";
		echo "<td>".$row['skill1']." ".$row['skill2']." ".$row['skill3']." ".$row['otherSkills']."</td>";
		echo "<td>".$row['status']."</td>";
		
	}
}