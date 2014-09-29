<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">	
	
	
	
</head>
<body>
<?php
//phpMyAdmin Credentials.
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "heroes";

//If it cant connect to your database or your server then this is why.
$con = mysqli_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to mySQL");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




$result = mysqli_query($con, "SELECT name FROM heroes.heroes");
if (!$result) {
    die(mysqli_error($con));
}

echo "<table border='1'>
<tr>
<th>Name</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
}

echo "</table>";



mysqli_close($con);

?>
<div id="container">
<h1 id="title">GIVE ME A RANDOM HERO PLEASE</h1>







</div>
</body>
</html>