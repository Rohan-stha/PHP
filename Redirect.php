<?php

//Redirect to another page
header("Location: https:google.com");
exit();// it is important to call exit() after a redirect to ensure that the script stops executing and no further output is sent to the browser.
?>