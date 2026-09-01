Hi <?php echo htmlspecialchars($_POST['name']); ?><br/>
 <!-- htmlspecialchars() function is used to convert special 
characters to HTML entities, preventing XSS attacks. For example,
 if the user enters "<script>alert('XSS');</script>", it will be 
 displayed as "&lt;script&gt;alert('XSS');&lt;/script&gt;" on the 
 page, instead of executing the script.
  -->
you are <?php echo (int)$_POST['age']; ?> years old.
<!-- (int) is used to cast the age input to an integer, ensuring that
 only numeric values are accepted. If the user enters a non-numeric value, it will be converted to 0. -->