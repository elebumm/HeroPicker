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
@mysql_connect("$db_host","$db_username","$db_pass") or die ("Could not connect to mySQL");

@mysql_select_db("$db_name") or die ("No database");

echo"Successful Connection";

//Holds string that is 
$MaxIDQuery = "SELECT * FROM heroes;";

//echo $MaxIDQuery;

$MaxIDResult = mysql_query($MaxIDQuery);
$MaxArray = mysql_fetch_array($MaxIDResult);

echo $MaxIDResult;

?>
<div id="container">
<h1 id="title">GIVE ME A RANDOM HERO PLEASE</h1>







</div>
</body>
</html>