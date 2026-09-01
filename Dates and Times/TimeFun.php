<?php
date_default_timezone_set("Asia/Kathmandu");
// Unix Timestamp भनेको एउटा लामो अंक (Number) हो। यसले जनवरी १,
//  १९७० (00:00:00 UTC) देखि अहिलेसम्म कति सेकेन्ड बित्यो भनेर गणना 
//  गर्छ। कम्प्युटर विज्ञानमा यस ऐतिहासिक क्षणलाई 'Unix Epoch' भनिन्छ।
$timestamp = time(); // Get the current timestamp
echo "Current timestamp is: " . $timestamp . "<br>";//output: Current timestamp


echo"<br>";
//converting timestamp to date and time
$date = date("Y-m-d H:i:s", $timestamp); // Convert timestamp to date
echo "Converted date and time is: " . $date . "<br>";//output: Converted date and time
?>