<?php
function distance($speed, $time)
{

    if ($time <= 0) {
        throw new Exception('Time cannot be zero or negative.'); // Throw exception if time is negative
    } else {

        $d = $speed * $time;
        echo "$speed * $time = $d";
    }
}

try {
    distance(10, 2);
    distance(30, -4); //code will stop execution at this point (due to negative time) and start finding the catch block
    distance(15, 3);

    echo 'All calculations done!'; // If an exception is thrown, this line will not execute
}

// catch block is executed when an exception is thrown in the try block
// an object $e of Exception class is created
catch (Exception $e) {

    echo "\n" . "Caught exception: " . $e->getMessage(); //Exception handling  
}

echo "\n" . "Hello World!"; // Continue execution

class DecelerationException extends Exception
{
} //DecelerationException inherits Exception
class TimeException extends Exception
{
} //TimeException inherits Exception

function acceleration($finalSpeed, $initialSpeed, $time)
{

    if ($time <= 0) {
        throw new TimeException('Time cannot be negative or zero.'); // Throw exception if time is negative or zero
    }
    if ($initialSpeed > $finalSpeed) {
        throw new DecelerationException('It is deceleration.'); // Throw exception if initial speed is greater than final speed
    } else {
        $a = ($finalSpeed - $initialSpeed) / $time;
        echo "($finalSpeed-$initialSpeed)/$time = $a";
    }
}
try {
    acceleration(20, 10, 2);
    acceleration(30, 10, -4); //code will stop execution at this point and start finding the catch block
    acceleration(15, 20, 5); //$initialSpeed>$finalSpeed

    echo 'All calculations done!'; // If an exception is thrown, this line will not execute
} catch (DecelerationException $e) {

    echo "\n" . "Caught deceleration exception: " . $e->getMessage(); //Exception handling  
} catch (TimeException $e) {

    echo "\n" . "Caught time exception: " . $e->getMessage(); //Exception handling  
}

echo "\n" . "Hello World!"; // Continue execution