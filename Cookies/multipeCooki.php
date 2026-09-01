<?php
// 1. Prepare multiple data in an array
$user_settings = [
    "name" => "Ram Thapa",
    "role" => "Admin",
    "theme" => "dark"
];

// 2. Convert array to text string and save it in a single cookie
// json_encode converts array to string. httponly (true) prevents XSS.
setcookie("user_data", json_encode($user_settings), time() + 3600, "/", "", false, true);
?>

<!DOCTYPE html>
<html>
<head><title>Multiple Data Cookie</title></head>
<body>
<?php
// 3. Read and decode the multiple data
if (isset($_COOKIE["user_data"])) {
    // json_decode converts the text back into a PHP array
    $my_data = json_decode($_COOKIE["user_data"], true);

    echo "Name: " . htmlspecialchars($my_data['name']) . "<br>";
    echo "Role: " . htmlspecialchars($my_data['role']) . "<br>";
    echo "Theme: " . htmlspecialchars($my_data['theme']) . "<br>";
} else {
    echo "No data found. Please refresh the page.";
}
?>
</body>
</html>
