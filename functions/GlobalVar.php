<?php
$count = 5;
function cal_count(){
    global $count;
    /* accessing the global variable
      $count inside the function so we use the keyword global*/



    $count++;  // Post-increment operatos
     echo "The Post-increment count inside the function is: $count <br>";
    
    
    --$count;  // Pre-decrement operator
    echo "The Pre-decrement count inside the function is: $count <br>";
    }
   
    
echo "The count is: $count <br>";
cal_count();
?>