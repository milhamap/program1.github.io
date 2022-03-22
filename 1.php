<?php
    for($loop=1;$loop<=100;$loop++){
        if ($loop%3==0 && $loop%5==0)
            echo "FizzBuzz</br>";
        elseif ($loop%3==0)
            echo "Fizz</br>";
        elseif ($loop%5==0)
            echo "Buzz</br>";
        else
            echo "$loop</br>";
    }
?>