<!DOCTYPE html>
<html>

<head>
<title>Course Read</title>
</head>

<body>
<h1>Course Read</h1>
<h2>List the rows of the Course table.</h2>

<?php
$host = "";
$username = "vware0";
$password = "vware0";
$database = "vware0";

$mysqli = new mysqli($host, $username, $password, $database);

if(mysqli_connect_errno())
{
  echo "<p>";
  echo "Error connecting: " .mysqli_connect_errno();
  echo "</p>";
}
else
{
  // do stuff with the $mysqli connection

  $query = "select * from course;";
  
  $result = $mysqli->query($query);

  if($result)
  {
    // do something with it
  }
  else
  {
    echo "Query error: " .$mysqli->error;
  }

  $mysqli->close();
}

?>

</body>

</html>
