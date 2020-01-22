<!DOCTYPE html>
<html lang="en">
<head>
<title>retrieving records</title>
</head>
<body>
<h1></h1>creating web applications</h1>
<?php	
	require_once ("settings.php"); //connection info
	
	$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
	if (!$conn) {
		echo "<p>database connection failure</p>";
	}
	else{
		$sql_table="Jobs";
		$query="select *From Jobs;
		$result=mysqli_query($conn,$query);
	if(!$result) {
		echo"<p>something is wrong with",$query,"</p>";
	}else{
		echo "<table border=\"1\">\n";
		echo "<tr>\n"
			."<th scope=\"col\">id</th>\n"
			."<th scope=\"col\">JobReferenceNumber</th>\n"
			."<th scope=\"col\">FirstName</th>\n"
			."<th scope=\"col\">LastName</th>\n"
			."<th scope=\"col\">StreetAddress</th>\n"
			."<th scope=\"col\">Suburb</th>\n"
			."<th scope=\"col\">PostCode</th>\n"
			."<th scope=\"col\">Email</th>\n"
			."<th scope=\"col\">Phone</th>\n"
			."<th scope=\"col\">Skills</th>\n"
			."</tr>\n ";
			while ($row=mysql_fetch_assoc($result)){
		echo "<tr>\n";
	echo "<td>",$row["id"],"</td>\n";
	echo "<td>",$row["JobReferenceNumber"],"</td>\n";
	echo "<td>",$row["FirstName"],"</td>\n";
	echo "<td>",$row["LastName"],"</td>\n";
	echo "<td>",$row["StreetAddress"],"</td>\n";
	echo "<td>",$row["Suburb"],"</td>\n";
	echo "<td>",$row["PostCode"],"</td>\n";
	echo "<td>",$row["Email"],"</td>\n";
	echo "<td>",$row["Phone"],"</td>\n";
	echo "<td>",$row["Skills"],"</td>\n";
	echo "</tr>\n";
	}
echo "</table>\n";
mysqli_free_result($result);
	}
	mysqli_close($conn);
	}
?>
</body>
</html>