<?php

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.<br>";//output: Peter is 35 years old.
echo "Ben is " . $age['Ben'] . " years old.<br>";//output: Ben is 37 years old.
echo "Joe is " . $age['Joe'] . " years old.<br>";//output: Joe is 43 years old.


$grade['Peter'] = "A";
$grade["Hari"] = "B";
$grade["Shyam"] = "C";
echo "Peter's grade is " . $grade['Peter'] . ".<br>";//output: Peter's grade is A.
echo "Hari's grade is " . $grade['Hari'] . ".<br>";//  output: Hari's grade is B.
echo "Shyam's grade is " . $grade['Shyam'] . ".<br>";//   output: Shyam's grade is C.

?>