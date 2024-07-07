<!DOCTYPE html>
<html>
<body>

<?php
//traits in OOP
trait message1 {
  public function msg1() {
    echo "Maleeha is fun.Awwwwww!! "; 
  }
}

trait message2 {
  public function msg2() {
    echo "Maleeha is sweet...Awwwww!"; 
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";


$obj2 = new Welcome2();
$obj2->msg1();
echo "<br>";
$obj2->msg2();
?>
 
</body>
</html>
