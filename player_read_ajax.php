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

  $query = "select * from player;";
  
  $result = $mysqli->query($query);

  if($result)
  {
    // do something with it
    
    $num_rows = $result->num_rows;
    $num_cols = $result->field_count;

    echo "<p>";
    echo "num rows: " .$num_rows;
    echo "</p>";
    echo "<p>";
    echo "num cols: " .$num_cols;
    echo "</p>";

    $fields = $result->fetch_fields();

    echo "<table border='1' cellpadding='4'>";

    echo "<tr>";
    for($i=0; $i<$num_cols; $i++)
    {
      echo "<th>";
      echo $fields[$i]->name;
      echo "</th>";
    }
    echo "</tr>";

    while($row=$result->fetch_row())
    {
      echo "<tr>";
      for($i=0; $i<$num_cols; $i++)
      {
        echo "<td>";
        echo $row[$i];
        echo "</td>";
      }
      echo "</tr>";
    }

    echo "</table>";

  }
  else
  {
    echo "Query error: " .$mysqli->error;
  }

  $mysqli->close();
}

?>

