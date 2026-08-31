<?php
function calculate_count() {
     $count = 9;//local variable only accessible within this function
    echo"<br>" . $count;
    $count++;
    echo "<br>" . $count;
    
    
   
}

calculate_count();
calculate_count();
calculate_count();

?>