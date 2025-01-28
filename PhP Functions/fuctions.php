<?php
include "component/header.php" ;
?>
<?php

function  calculateArea($lenght, $width) {
    $area = $lenght * $width;
    return $area;
}
    $result = calculateArea(5,10);
    echo "The area is: " . $result; //Output: the area is : 50


    include "component/footer.php" ;
    ?>