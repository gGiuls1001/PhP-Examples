<?php
function add_five(&$value) {
  $value += 5;
}
// This is Passing Arguments by Reference function. When  an argument is passed by reference, changes to the argument also change the variable that was passed in.
// This is accomplished by using the "&" operator.
$num = 2; 
add_five($num);
echo $num;
?>