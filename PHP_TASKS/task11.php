<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit's color  is {$this->color} and the fruit is {$this->name}."; 
  }
}

$apple = new Fruit("Apple", "red");
?>
 
</body>
</html>
