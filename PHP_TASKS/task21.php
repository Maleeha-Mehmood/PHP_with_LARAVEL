<!-- MYSQLI OOP getting last id-->
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
VALUES ('Maleeha', 'Mehmood', 'maleeha456@gmail.com')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
