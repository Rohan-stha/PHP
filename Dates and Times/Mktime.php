<?php
date_default_timezone_set("Asia/Kathmandu");

// mktime() function ले दिइएको मिति र समयको आधारमा Unix timestamp (सेकेन्ड) निकाल्छ।
//mktime(hour, minute, second, month, day, year) को रूपमा प्रयोग गरिन्छ।
$timestamp = mktime(14, 30, 0, 6, 15, 2023); // Create a timestamp for June 15, 2023, 14:30:00
echo "Timestamp for June 15, 2023, 14:30:00 is: " . $timestamp . "<br>";//output: Timestamp for June 15, 2023, 14:30:00 is: 1686834600


// कुनै साताको दिन पत्ता लगाउने उदाहरण (जस्तै: १ जनवरी २०२७ मा के बार पर्छ?)
$future_time = mktime(0, 0, 0, 1, 1, 2027);

// "l" (सानो L) ले बारको नाम (Sunday, Monday आदि) देखाउँछ
echo "१ जनवरी २०२७ मा " . date("l", $future_time) . " पर्छ।";
// l represents the full name of the day of the week (e.g., Sunday, Monday, etc.)

?>