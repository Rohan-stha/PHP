<?php

function increment(&$value) {
    $value++;
    echo "Value inside function: $value <br>";//output: 6
}

$number = 5;
increment($number);
echo $number; // Output: 6

?>