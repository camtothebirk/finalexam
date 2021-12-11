<!DOCTYPE HTML 

<html>
<head>
<title> updateData </title>
<meta http-equiv="Content Type" content="text/html"; charset="UTF-8">
</head>

<body>
<?php

$Student_id=$_GET['Student_id'];
$Student_surname=$_GET['Student_surname'];
$Student_name=$_GET['Student_name'];



mysql_connect("localhost", "root", "password");
mysql_select_db("DataTest");
mysql_query("insert into Student values('$Student_surname', '$Student_forename', '$Student_id')");


?>
</body>
</html>