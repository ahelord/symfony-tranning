<?php
/* 
El operador de nave espacial (<=>) es un tipo especial de operador
 de comparación. Eso

devuelve -1 si la primera expresión es menor que la segunda expresión.
devuelve 1 si la primera expresión es mayor que la segunda expresión.
devuelve 0 si la primera expresión es igual a la segunda expresión.
 */
// Integers
echo (1<=>1) . ","; //prints 0
echo (1<=>2) . ","; //prints -1
echo (2<=>1); //prints 1
echo "\n"; //skips to next line
// Floats
echo (1.5<=>1.5) . ","; //prints 0
echo (1.5<=>2.5) . ","; //prints -1
echo (2.5<=>1.5); //prints 1
echo "\n"; //skips to next line
// Strings
echo ("a"<=>"a") . ","; //prints 0
echo ("a"<=>"b") . ","; //prints -1
echo ("b"<=>"a"); //prints 1


// -- operadores logicos

$x = 5;
$y = 4;
$z = 2;

if ($x > $y && $x > $z) echo "x is greater than y and z\n";

if ($z < $y and $z < $x) echo "z is smaller than y and z\n";


// operadores de asignacion
$a = 2;
$b = 4;
echo $a**=$b; // $a now is (2^4) => 16 (2 raised to the power of 4)
echo "\n";
echo $b**=3; // $b now is (4^3) => 64 (4 raised to the power of 3)