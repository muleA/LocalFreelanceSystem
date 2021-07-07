<!doctype html>
<html>

<body>
<h1>amharic output from database</h1>
<?php
    $server= "localhost";
    $user="root";
    $pwd = "";
    $database = "mydb";

    $conn = new mysqli($server,$user,$pwd,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
$sql = "SELECT category_name FROM `categories` WHERE category_id=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["category_name"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close()

?>


</body>


</html>
