
<?php 

echo "<h1>Welcome, " . $_GET['name'] . "!</h1>";//In url data are visible in the address bar. For example, if you visit the URL "welcome.php?name=John&age=30", it will display "Welcome, John!" and "You are 30 years old." on the page.
echo "<p>You are " . $_GET['age'] . " years old.</p>";
?>