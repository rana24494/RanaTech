<style>
table {
  font-family: "Trebuchet MS", Helvetica, sans-serif;
  border: 2px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 101%;
  text-align: middle;
  border-collapse: collapse;
}
table td, table th {
  border: 2px solid #AAAAAA;
  padding: 4px 27px;
}
table  tbody td {
  font-size: 15px;
  color: #0E0B23;
}
table tr:nth-child(even) {
  background: #D0E4F5;
}
table thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table thead th {
  font-size: 18px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table thead th:first-child {
  border-left: none;
}

table tfoot {
  font-size: 11px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table tfoot td {
  font-size: 11px;
}
table tfoot .links {
  text-align: right;
}
table tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 5px 8px;
  border-radius: 5px;
}
</style>
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
		if (isset($_POST["Jref"])) {
	$Jreference = $_POST["Jreference"];
}
}
    echo"<p> '$Jreference'</p>";
	$query ="SELECT  *FROM Jobs WHERE JobReferenceNumber ='$Jreference'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo"<p>something is wrong with",$query,"</p>";
		}
		else {
	echo "<table>";
    echo"<caption>List Of The People Applied For Jobs</caption>";
	echo "<tr>";
	echo "<th>Id</th><th>JobReferenceNumber</th><th>FirstName</th><th>LastName</th><th>StreetAddress</th><th>Suburb</th>
	    <th>PostCode</th><th>Email</th><th>Phone</th><th>Skills</th>";
	echo "</tr>";
	while($row=mysqli_fetch_assoc($result)) 
	{
		echo "<tr>";
		echo "<td>".$row['Id']."</td>";
		echo "<td>".$row['JobReferenceNumber']."</td>";
		echo "<td>".$row['FirstName']."</td>";
		echo "<td>".$row['LastName']."</td>";
		echo "<td>".$row['StreetAddress']."</td>";
		echo "<td>".$row['Suburb']."</td>";
		echo "<td>".$row['PostCode']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['Phone']."</td>";
		echo "<td>".$row['Skills']."</td>";		
	}
}
?>

