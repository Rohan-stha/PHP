<?php
date_default_timezone_set("Asia/Kathmandu");
$today = date("Y-m-d"); // Get today's date in the format YYYY-MM-DD
echo "Today's date is: " . $today . "<br>";//output: Today's date
// d represents the day of the month (01 to 31)
// m represents the month (01 to 12)
// Y represents the year in 4 digits (e.g., 2023)
// H represents the hour in 24-hour format (00 to 23)
// i represents the minutes (00 to 59)
// s represents the seconds (00 to 59)
// D represents the day of the week (Mon, Tue, Wed, etc.)
//M represents the month in 3 letters (Jan, Feb, Mar, etc.)
// y represents the year in 2 digits (e.g., 23 for 2023)
// a represents am or pm
//F represents the full month name (January, February, etc.)
//j represents the day of the month without leading zeros (1 to 31)

$time = date("H:i:s"); // Get the current time in the format HH:
echo "Current time is: " . $time . "<br>";//output: Current time

$datetime = date("Y-m-d H:i:s"); // Get the current date and time
echo "Current date and time is: " . $datetime . "<br>";//output: Current date and time

echo date("l, F j, Y") . "<br>";//output: Day of the week, Month day, Year (e.g., Monday, January 1, 2023)
echo date("D, M j, Y") . "<br>";//output: Day of the week (3 letters), Month (3 letters) day, Year (e.g., Mon, Jan 1, 2023)
echo date("h:i A") . "<br>";//output: Hour:Minute AM/PM (e.g., 01:30 PM)
echo date("h:i:a") . "<br>";//output: Hour:Minute:am/pm (e.g., 01:30:pm)

?>