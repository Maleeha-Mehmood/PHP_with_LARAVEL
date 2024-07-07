<!DOCTYPE html>
<html>
<body>
<h1>my 3rd php program</h1>
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>


<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
#echo "My boat is " . $colOR . "<br>"; //single line comment

/*echo "my name is maleeha <br>";
echo "i want to learn php and laravel <br>";*/

$x = 5 /* + 15 */ + 5;//multi line comment inside text 
echo $x;

//vardump() returning data types 
echo "<br>";
var_dump(5);
echo "<br>";
var_dump("maleeha");
echo "<br>";
var_dump(3.14);
echo "<br>";
var_dump(true);
echo "<br>";
var_dump([2, 3, 56]);
echo "<br>";
var_dump(NULL);

$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  //echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

function myTest1() {
    $x = 5; // local scope
   echo "<p>Variable x inside function is: $x</p>";
  }
  myTest1();
  
  // using x outside the function will generate an error
  //echo "<p>Variable x outside function is: $x</p>";

//using global keyword  
  $x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;

}

myTest2();
echo $y; // outputs 15

//global variable using array

$x = 5;
$y = 20;

function myTest3() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
echo "<br>";
myTest3();
echo $y; // outputs 25

function myTest4() {
    static $x = 0;
    echo $x;
    $x++;
  }
  echo "<br>";
  myTest4();
  echo "<br>";
  myTest4();
  echo "<br>";
  myTest4();

  $x = "maleeha";
echo '<br> Hello $x <br>';// returns hello $x instead of value
echo "Hello $x <br>";//returns hello with $x's value
echo "<br>";

echo strlen("Hello world");//finds string length
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo strpos("Hello world!", "world");
echo "<br>";

$x = "Hello World!";
echo strtoupper($x);//returns in upper case
echo "<br>";

$x = "Hello World!";
echo str_replace("World", "Maleeha", $x);//replaces world with Maleeha

echo "<br>";

$x = "Hello World!";
echo strrev($x);
echo "<br>";

//splits a srings into array
$x = "Maleeha Mehmood!";
$y = explode(" ", $x);
print_r($y);

//Start the slice at index 6 and end the slice 5 positions later:
echo "<br>";
$x = "Hello World!";
echo substr($x, 6, 5);

//Start the slice at index 6 and go all the way to the end:
echo "<br>";
$x = "Hello World!";
echo substr($x, 6);

//Get the 3 characters, starting from the "o" in world (index -5):
echo "<br>";
$x = "Hello World!";
echo substr($x, -5, 3);

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

echo "<br>";

$a = (array) $a;
echo "<br>";

$b = (string) $b;
echo "<br>";

$c = (integer) $c;
echo "<br>";

$d = (array) $d;
echo "<br>";

$e = (float) $e;

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  echo "<br>";

  
  $myCar = (array) $myCar;
  var_dump($myCar);
  echo "<b>";
//if else if else
echo "<br>";

  $a = 13;

if ($a > 10) {
  echo "Above 10";
  if ($a > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}
echo "<br>";
//php switch
$d = 90;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}
//while loop
$i = 0;
while ($i < 6) {
    echo "<br>";
  $i++;
  if ($i == 3) continue;
  echo $i;
}
//for each loop associative arrays
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
    echo "<br>";
  echo "$x : $y <br>";
}

//foraech loop object
class Cars {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  
  $myCars = new Cars("red", "Volvo");
  
  foreach ($myCars as $x => $y) {
    echo "$x: $y <br>";
  }
  
  //function stricttype requirements having return type hand arguments types different
 //declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
?>
</body>
</html>