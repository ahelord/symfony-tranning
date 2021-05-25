<?php
// -- imprimir variables en echo
$name = 'Joel';
echo "Hello $name, Nice to see you."; // $name will be replaced with `Joel`

echo 'Hello $name, Nice to see you.';

// Example using the curly brace syntax for the variable $name
echo "We need more {$name}s to help us!\n";

// -- concatenar operador de concatenacion mas asignacion
$a = "a";
$a .= "b"; // $a => "ab"
echo $a;

// -- extraer caracteres
$foo = 'Hello world';
echo $foo[6]; // returns 'w'
echo "\n";
echo $foo{6}; // also returns 'w'
echo "\n";
echo substr($foo, 6, 1); // also returns 'w'
echo "\n";
echo substr($foo, 6, 2); // returns 'wo

// -- encontrar finding position of subtring

echo "The occurence of hay is at position: ".strpos("haystack", "hay")."\n"; // int(0)
echo "The occurence of stack is at position: ".strpos("haystack", "stack")."\n"; // int(3)

// -- reemplazar substring
$foo = 'hello world';

$foo[6] = 'W'; // capitalizes the 'w' in 'hello world'
echo $foo;
echo "\n";

$foo{0} = 'H'; // capitalizes the 'h' in 'hello world'
echo $foo;
echo "\n";

$bar = substr_replace($foo, '!', 11, 1); // results in $bar = 'Hello World!'
echo $bar;
echo "\n";

$bar = substr_replace($foo, 'Whi', 6, 2); // results in 'Hello Whirld'
// Note that the replacement string need not be the same length as the substring replaced
echo $bar;
echo "\n";


// -- string replace
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Perform string replacement
str_replace("facts", "truth", $my_str, $count);
 
// Display number of replacements performed
echo "The text was replaced $count times.";

// -- string length

$my_str = 'Welcome to Educative!';
echo strlen($my_str);

// -- contar palabras en string
$my_str = 'The quick brown fox jumps over the lazy dog.';
echo str_word_count($my_str);

// reversar string
$my_str = 'You can do anything, but not everything.';

echo strrev($my_str);

?>