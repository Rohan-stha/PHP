<?php
// नियम १: सेसन प्रयोग गर्नु भन्दा पहिले यो फंक्शन सबैभन्दा माथि लेख्नै पर्छ।
session_start();

// १. सेसनमा डेटा सेभ गर्ने (Saving Data)
$_SESSION["username"] = "Sita Sharma";
$_SESSION["role"] = "Editor";

// २. सेसन डिलिट गर्ने तरिका (Uncomment below lines to delete/logout)
// session_unset();   // सबै सेसन भ्यारिएबल खाली गर्छ
// session_destroy(); // सर्भरबाट सेसन नै पूरै नष्ट गर्छ
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Session Example</title>
</head>
<body>

    <h1>PHP Session Tutorial</h1>

    <?php
    // ३. सेसनको डेटा पढ्ने (Reading Data)
    // जहिले पनि डेटा पढ्नु अघि isset() प्रयोग गरेर चेक गर्नुपर्छ
    if (isset($_SESSION["username"])) {
        echo "<p>Welcome back, <b>" . htmlspecialchars($_SESSION["username"]) . "</b>!</p>";
        echo "<p>Your Role is: " . htmlspecialchars($_SESSION["role"]) . "</p>";
    } else {
        echo "<p>You are not logged in. Session not found.</p>";
    }
    ?>

</body>
</html>
