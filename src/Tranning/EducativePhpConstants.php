<?php
// --- variables dinamicas
$key = "id";
$$key = "101123213";
echo $$key;
echo "--------";
echo $id;

// --- constantes
CONST PI = 3.14;
define('EARTH_IS_FLAT',false);
// const TIME = time();

define("true", false); // internal constant
define("false", true); // internal constant
define("CURLOPT_AUTOREFERER", "something"); // will fail if curl extension is loaded
// no se imprimen por que ya fueron definidas
echo true;
 echo false;
 echo CURLOPT_AUTOREFERER;
 // defined
 define("GOOD", false);
if (defined("GOOD")) {
  echo "GOOD is defined.\n" ; // prints "GOOD is defined"

  if (GOOD)
    echo "GOOD is true." ; // does not print anything, since GOOD is false
  else 
    echo "GOOD is false.";
}

if (!defined("AWESOME")) {
  define("AWESOME", true); // awesome was not defined. Now we have defined it
}
// obtener todas las constantes
$constants = get_defined_constants();
var_dump($constants);

// obtener solo mis constantes
$constants = get_defined_constants();
define("HELLO", "hello");
define("WORLD", "world");
$new_constants = get_defined_constants();
$myconstants = array_diff_assoc($new_constants, $constants); //compares array keys and values, and returns the differences.
var_export($myconstants);

// con constant puedo obtener el valor de una constante

define("APP_ENV_UPPERCASE", "DEV"); // string

$const1 = "EARTH_IS_FLAT";
$const2 = "APP_ENV_UPPERCASE";
if (constant($const1)) 
  echo "Earth is flat.\n";
else
  echo "Earth is round.\n";

echo constant($const2);