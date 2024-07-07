<!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that is not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "Maleeha Mehmood") {
      $prefix = "Ms";
    } elseif ($name == "Maleeha Mehmood") {
      $prefix = "Ms";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("Maleeha Mehmood");
echo "<br>";  
echo $class->prefixName("Maleeha Mehmood");
?>
 
</body>
</html>
