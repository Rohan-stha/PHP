<?php
function counter(){
    static $count = 0;
    //static variable retains its value between function calls
    //can be used to keep track of the number of times a function is called
    //static variables are initialized only once and retain their value between function calls
    echo "Counter: $count <br>";
    $count++;
    echo "Counter after increment: $count <br>";
    
}
counter();
counter();
counter();


?>