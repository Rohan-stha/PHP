<?php
function intrest($principal, $rate = 5, $time = 1) {
    $interest = ($principal * $rate * $time) / 100;
    
    print "The interest is: " . $interest . "<br>";
}

intrest(1000); // Uses default rate and time
intrest(1000, 10); // Uses default time
intrest(1000, 10, 2); // Uses all specified parameters  
?>