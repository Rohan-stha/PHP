<?php
$familes = array(
    "John" => array(
        "age" => 30,
        "city" => "New York"
    ),
    "Jane" => array(
        "age" => 25,
        "city" => "Los Angeles"
    ),
    "Bob" => array(
        "age" => 35,
        "city" => "Chicago"
    ),
    "Harry" => array(
        "age" => 40,
        "city" => "Kathmandu"
    )
);
echo "John is " . $familes['John']['age'] . " years old and lives in " . $familes['John']['city'] . ".<br>";//output: John is 30 years old and lives in New York.
echo "Jane is " . $familes['Jane']['age'] . " years old and lives in " . $familes['Jane']['city'] . ".<br>";//output: Jane is 25 years old and lives in Los Angeles.
echo "Bob is " . $familes['Bob']['age'] . " years old and lives in " . $familes['Bob']['city'] . ".<br>";//output: Bob is 35 years old and lives in Chicago.
echo "Harry is " . $familes['Harry']['age'] . " years old and lives in " . $familes['Harry']['city'] . ".<br>";//output: Harry is 40 years old and lives in Kathmandu.

?>