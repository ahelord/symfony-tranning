<?php
function swap(&$arg1, &$arg2)
{ //parameters num1 and num2 passed using pass by reference method
    $temp = $arg2; //creating a variable temp and setting equal to arg2
    $arg2 = $arg1; //setting the value of arg2 equal to arg1
    $arg1 = $temp; //setting the value of arg1 equal to temp which is equal to arg2
    
}

$num1 = 4;
$num2 = 5;

// Calling the function with arguments num1 and num2
swap($num1, $num2);
echo "num1 is: $num1\n";
echo "num2 is: $num2";


// variables globales

$num1 = 5;
$num2 = 2;

function multiply(){
    // Nota: No puede asignar un valor a una variable en la misma declaración que la global palabra clave .

  global $num1; // Accessing global variables from function scope requires this explicit statement
  global $num2;
  $answer = $num1*$num2;
  return $answer;
}

// When in the global scope, regular global variables can be used
// without explicitly stating 'global $variable;'
echo "num1 is: $num1\n";
echo "num2 is: $num2\n";
echo multiply();

// variables dinamicas para asignar nombre de funciones

function sum($x, $y)
{
    return $x + $y;
}
$funcName = 'sum';
echo $funcName(2, 4); // outputs 6;

