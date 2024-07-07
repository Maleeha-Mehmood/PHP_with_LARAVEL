<!DOCTYPE html>
<html>
<body>
<!-- OOP static methods -->
<?php
class domain {
  protected static function getWebsiteName() {
    return "Maleeha.com";
  }
}

class domainM3 extends domain {
  public $websiteName;
  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();
  }	
}

$domainM3 = new domainM3;
echo $domainM3 -> websiteName;
?>
 <?php
//  mysql procedural
$servername = "localhost";
$username = "root";
$password = "<maleeha456>";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "<br>";

echo "Connected successfully";
//mysqli_close($conn);

?>

<?php
//mysql oop
$servername = "localhost";
$username = "root";
$password = "<maleeha456>";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<br>";
echo "Connected successfully";
$conn->close();
//{ echo "Connection closed!";}

?>
<?php
//mysql PDO
$servername = "localhost";
$username = "root";
$password = "<maleeha456>";

try {
  $conn = new PDO("mysql:host=$servername;dbname=my_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<br>";

  echo "Connected successfully";
} catch(PDOException $e) {
    echo "<br>";

  echo "Connection failed: " . $e->getMessage();
}

//$conn = null;

?>
</body>
</html>
