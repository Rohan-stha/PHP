<?php
// 1. SETTING A COOKIE
// Syntax: setcookie(name, value, expire, path, domain, secure, httponly)
// This cookie named "user_name" holds the value "Ram" and expires in 1 hour (3600 seconds)
// 'httponly' is set to true to protect against XSS attacks.
setcookie("user_name", "Rohan", time() + 3600, "/", "", false, true);

// 2. DELETING A COOKIE (Uncomment the line below to delete the cookie)
// To delete a cookie, set its expiration time to the past (e.g., time() - 3600)
// setcookie("user_name", "", time() - 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies Example</title>
</head>
<body>

    <h1>PHP Cookies Tutorial</h1>

    <?php
    // 3. READING A COOKIE
    // Always check if the cookie exists using isset() before reading it
    if (isset($_COOKIE["user_name"])) {
        // Always use htmlspecialchars to prevent XSS when displaying user data
        echo "<p>Welcome back, <b>" . htmlspecialchars($_COOKIE["user_name"]) . "</b>!</p>";
        echo "<p>The cookie is successfully loaded from your browser.</p>";
    } else {
        echo "<p>Welcome Guest! The cookie is not set yet. Refresh the page to see it.</p>";
    }
    ?>

</body>
</html>
