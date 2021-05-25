<?php
$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
print_r($fruits);

$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
var_dump($fruits);

$fruits = array("Type"=>"Citrus",1=>"Orange",2=>"Grapefruit",3=>"Lemon");//initializing associative array
echo "Length of \$fruits is ".count($fruits);


$check=array("elephant", array("honey", "sad", 5)); 
print_r($check);

$economy = array(
    array(
        "country" => "Germany",
        "currency" => "Euro",
    ),
    array(
        "country" => "Switzerland",
        "currency" => "Swiss Franc",
    ),
    array(
        "country" => "England",
        "currency" => "Pound",
    )
);

echo "Currency of Germany is: " . $economy[0]["currency"];

$myArray = array(1, 2, 3);
array_unshift($myArray, 4,5);
print_r($myArray);


$array = [1,2,3];
print_r($array);
array_push($array, 5, 6); // Pushing 5 and 6 at the end of $array
print_r($array); 

$arr=array(1,3,5,7,9);
$arr[23]=71; // adding a new key and its assocaited value
print_r($arr);

$arr[2]=22; // replacing an old value at 2nd index
print_r($arr);

$fruit = array("bananas", "apples", "peaches");
unset($fruit[1]);
print_r($fruit);

$fruit = array('first'=>'banana', 'second'=>'apple', 'third'=>'peaches');
unset($fruit['third']);
print_r($fruit);

unset($fruit);

$fruits = ['Rasberry', 'Orange', 'Apricot','Banana', 'Apple','Olive' ]; //defining and array
sort($fruits); //applying the sort function
print_r($fruits); //printing the sorted array

$fruits = [1=>'Rasberry',2=> 'Orange',3=> 'Apricot',4=>'Banana', 5=>'Apple',6=>'Olive' ]; //defining and array
asort($fruits); //applying the sort function
print_r($fruits); //printing the sorted array

$fruits = [1=>'Rasberry',2=> 'Orange',3=> 'Apricot',4=>'Banana', 5=>'Apple',6=>'Olive' ]; //defining and array
arsort($fruits); //applying the sort function
print_r($fruits); //printing the sorted array

$fruits = ['f'=>'Rasberry','d'=>'Orange','a'=> 'Apricot','c'=>'Banana', 'b'=>'Apple','e'=>'Olive' ]; //defining and array
ksort($fruits); //applying the sort function
print_r($fruits); //printing the sorted array

$fruits = ['d'=>'Rasberry','b'=>'Orange','a'=> 'Apricot','e'=>'Banana', 'f'=>'Apple','c'=>'Olive' ]; //defining and array
krsort($fruits); //applying the sort function
print_r($fruits); //printing the sorted array

$a1 = array("red","green");
print_r($a1);
$a2 = array("blue","yellow");
print_r($a2);
$a3=array("black");
print_r($a3);
print_r(array_merge($a1,$a2,$a3));

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
$a3=array("e"=>3);
print_r(array_merge($a1,$a2,$a3));


$numbers = array(-22, 4, 1, 20, 0, -44);
sort($numbers);
print_r($numbers);