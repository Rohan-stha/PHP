<?php


function adder($num){
    $num += 5;
    echo "Inside adder function: " . $num . "<br>"; // Output: 15
  
}

function subtractor(&$num){
    $num -= 6;
    echo "Inside subtractor function: " . $num . "<br>"; // Output: 4
}
  

$originalNum = 10;
adder($originalNum);
echo "After adding 5: " . $originalNum . "<br>"; // Output: 10  
subtractor($originalNum);
echo "After subtracting 6: " . $originalNum . "<br>"; // Output: 4
?>