<!DOCTYPE html>
<html>
<body>
<?php
//PHP JSON
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>

</body>
</html>