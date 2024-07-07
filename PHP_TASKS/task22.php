<!-- MYSQLI OOP inserting multi values-->
<?php
$servername = "localhost";
$username = "root";
$password = "<maleeha456>";
$dbname = "my_DB123";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Data (firstname, lastname, email)
VALUES ('Maleeha', 'Mehmood', 'maleeha@example.com');";
$sql .= "INSERT INTO Data (firstname, lastname, email)
VALUES ('Sara', 'Urooj', 'sara@example.com');";
$sql .= "INSERT INTO Data (firstname, lastname, email)
VALUES ('Hashim', 'Ali', 'hashim@example.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>