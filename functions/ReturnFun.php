<?php
function addNumbers($num1, $num2){
    return $num1 + $num2;
}

function subtractNumbers($num1, $num2){
    return $num1 - $num2;
}

function multiplyNumbers($num1, $num2){
    return $num1 * $num2;
}

function divideNumbers($num1, $num2){
    if($num2 == 0){
        return "Division by zero is not allowed.";
    }else{
        return $num1 / $num2;
    }
}

$sum = addNumbers(5, 10);
echo "The sum of 5 and 10 is: " . $sum;


$diff = subtractNumbers(10, 5);
echo "<br>The difference of 10 and 5 is: " . $diff;

$mult = multiplyNumbers(5, 10);
echo "<br>The product of 5 and 10 is: " . $mult;

$div = divideNumbers(10, 5);
echo "<br>The quotient of 10 and 5 is: " . $div;



?>