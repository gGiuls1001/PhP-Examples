<?php
include "component/header.php" ;
?>
<?php
function sum($x, $y) {
  $z = $x + $y;
  return $z;
} // Function to return a value

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4); 
?>
