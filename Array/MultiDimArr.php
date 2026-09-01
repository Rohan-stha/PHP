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

Array(
    [Newar] => Array
        (
            [0] => Hari
            [1] => Shyam
        ),

        [Brahman] => Array
        (
            [0] => Sita
            [1] => Gita
        ),
        [Chhetri] => Array
        (
            [0] => Ram
            [1] => Laxman
        )

)
echo "Hari is a " . $familes['Newar'][0] . ".<br>";//output: Hari is a Newar.
echo "Shyam is a " . $familes['Newar'][1] . ".<br>";//output: Shyam is a Newar.
echo "Sita is a " . $familes['Brahman'][0] . ".<br>";//output: Sita is a Brahman.
echo "Gita is a " . $familes['Brahman'][1] . ".<br>";//output: Gita is a Brahman.
echo "Ram is a " . $familes['Chhetri'][0] . ".<br>";//output: Ram is a Chhetri.
echo "Laxman is a " . $familes['Chhetri'][1] . ".<br>";//output: Laxman is a Chhetri.

?>