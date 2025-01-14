<?php
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}
// Variable Number of Arguments , by using the "..." operator in front of the function parameter, the function accepts an unknonw number of arguments. 
// This is normally called a "Variadic function".

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
?>