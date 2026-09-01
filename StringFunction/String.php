<?php
$firstName = " Rohan";
$lastName = "Shrestha";
$middleName = "rohan";
$fullName = $firstName . $lastName; // Concatenate first name and last name
echo "Full Name: " . $fullName . "<br>";//output: Full Name: Rohan Shrestha


$repeatName =str_repeat($firstName, 3); // Repeat the string 3 times
echo $repeatName . "<br>";//output: Rohan Rohan Rohan


$replaceName = str_replace("Rohan", "Hari", $firstName); // Replace "Rohan" with "Hari"
echo $replaceName . "<br>";//output: Hari

$count = str_word_count($firstName); // Count the number of words in the string
echo "Number of words in the string: " . $count . "<br>";//output: Number of words in the string: 2

$lastNameLength = strlen($lastName); // Get the length of the string
echo "Length of the last name string: " . $lastNameLength . "<br>";//output: Length of the last name string: 9

$cmp = strcmp($firstName, $middleName); // Compare two strings case-sensitively
if ($cmp < 0) {
    echo "First name is less than middle name.<br>";//output: First name is less than middle name.
} elseif ($cmp > 0) {
    echo "First name is greater than middle name.<br>";
} else {
    echo "First name is equal to middle name.<br>";
}  

$chr = strchr($lastName, "S"); // Find the first occurrence of "S" in the string
if ($chr !== false) {
    echo "First occurrence of 'S' in the last name: " . $chr . "<br>";//output: First occurrence of 'S' in the last name: Shrestha
} else {
    echo "'S' not found in the last name.<br>";
}

$casecmp = strcasecmp($firstName, $middleName); // Compare two strings case-insensitively
if ($casecmp < 0) {
    echo "First name is less than middle name (case-insensitive).<br>";
} elseif ($casecmp > 0) {
    echo "First name is greater than middle name (case-insensitive).<br>";
} else {
    echo "First name is equal to middle name .<br>";
}   


$pos = strpos($lastName, "S"); // Find the position of the first occurrence of "S" in the string
if ($pos !== false) {
    echo "Position of first occurrence of 'S' in the last name: " . $pos ." "."index"." ". "<br>";//output: Position of first occurrence of 'S' in the last name: 0
} else {
    echo "'S' not found in the last name.<br>";
}


stristr($lastName, "S"); // Find the first occurrence of "S" in the string (case-insensitive)
$chr = stristr($lastName, "s"); // Find the first occurrence of "s" in the string (case-insensitive)
if ($chr !== false) {
    echo "First occurrence of 'S' in the last name: " . $chr . "<br>";
} else {
    echo "'S' not found in the last name.<br>";
}

strpbrk($lastName, "S"); // Find the first occurrence of any character from the set "S" in the string
$chr = strpbrk($lastName, "S"); // Find the first occurrence of any character from the set "S" in the string
if ($chr !== false) {
    echo "First occurrence of any character from the set 'S' in the last name: " . $chr . "<br>";
} else {
    echo "No characters from the set 'S' found in the last name.<br>";
}

strrchr($lastName, "S"); // Find the last occurrence of "S" in the string
$chr = strrchr($lastName, "S"); // Find the last occurrence of "S" in the string
if ($chr !== false) {
    echo "Last occurrence of 'S' in the last name: " . $chr . "<br>";
} else {
    echo "'S' not found in the last name.<br>";
}   


 strrev($middleName); // Reverse the string
$reversed = strrev($middleName); // Reverse the string
echo "Reversed middle name: " . $reversed . "<br>";//output: Reversed middle name: nahoR

strtok($lastName, " "); // Tokenize the string using space as a delimiter
$token = strtok($lastName, " "); // Tokenize the string using space as a delimiter
while ($token !== false) {
    echo "Token: " . $token . "<br>";//output: Token: Shrestha
    $token = strtok(" "); // Get the next token 
}


strtolower($firstName); // Convert the string to lowercase
$lowercase = strtolower($firstName); // Convert the string to lowercase
echo "Lowercase first name: " . $lowercase . "<br>";//output: Lowercase first name: rohan

strtoupper($lastName); // Convert the string to uppercase
$uppercase = strtoupper($lastName); // Convert the string to uppercase     
echo "Uppercase last name: " . $uppercase . "<br>";//output: Uppercase last name: SHRESTHA  



trim($firstName); // Remove whitespace from the beginning and end of the string
$trimmed = trim($firstName); // Remove whitespace from the beginning and end of the string
echo "Trimmed first name: " . $trimmed . "<br>";//output: Trimmed first name: Rohan


?>

