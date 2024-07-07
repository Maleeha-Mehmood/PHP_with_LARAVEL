<!DOCTYPE html>
<html>
<body>

<?php
//inheritance overriding
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight; 
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram and it's so sweet "; 
  }
}

$strawberry = new Strawberry("Strawberry", "red", 100);
$strawberry->intro();
?>

<?php
//constants
echo "<br>"; 
class Goodbye {

  const LEAVING_MESSAGE = "<b><i>Thank you for visiting my repository!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>

</body>
</html>
