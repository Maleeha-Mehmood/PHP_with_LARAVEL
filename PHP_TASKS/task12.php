<?php
//Access Modifier
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($name) {  // a public function (default)
    $this->name = $name;
  }
  function set_color($color) { // a protected function
    $this->color = $color;
  }
  function set_weight($weight) { // a private function
    $this->weight = $weight;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
  function get_weight() {
    return $this->weight;
  }
  
}
$mango = new Fruit();
$mango->set_name('Apple');
$mango->set_color('Red');
$mango->set_weight('300');
echo "<b>Name:".$mango->get_name(); 
echo "<br>";
echo "<i>Color:".$mango->get_color(); 
echo "<br>";
echo "<b>Weight:".$mango->get_weight(); 
?>
