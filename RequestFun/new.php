<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = htmlspecialchars($_POST['name']);
    if(empty($name)){
        echo "Name is required.";
    } else {
        echo "Hi " . $name . "<br/>";
    }
    $age = (int)$_POST['age'];
    if(empty($age)){    
        echo "Age is required.";
    } else {
        echo "You are " . $age . " years old.";
    }   
}