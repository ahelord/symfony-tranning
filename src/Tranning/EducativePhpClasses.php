<?php
class Shape{
    public $sides = 0; // first property
    public $name= " "; // second property 
    
    public function description(){ //first method
      echo "A $this->name with $this->sides sides.";
    }
  }
  $myShape = new Shape();

// -- accediendo propiedades
$myShape1 = new Shape; //creating an object called myShape1
$myShape1->sides = 3; //setting the "sides" property to 3
$myShape1->name = "triangle"; //setting the "name" property to triangle
$myShape1->description(); //"A triangle with 3 sides"
echo "\n";

$myShape1->sides = 4; //setting the "sides" property to 4
$myShape1->name = "square"; //setting the "name" property to square
$myShape1->description(); //"A square with 4 sides"
echo "\n";

$myShape1->sides = 6; //setting the "sides" property to 6
$myShape1->name = "hexagon"; //setting the "name" property to hexagon
$myShape1->description(); //"A hexagon with 6 sides"

// -- self

//En PHP, como en muchos otros lenguajes, la selfpalabra clave se refiere a propiedades y métodos dentro del alcance de una clase. 
//El operador de resolución de alcance #
//El ::símbolo, conocido como operador de resolución de alcance, es una construcción incorporada en PHP que se utiliza para acceder a métodos y propiedades contenidos . Se usa con la selfpalabra clave.

//esto contra uno mismo #
//Úselo $this->member para acceder a miembros no estáticos (métodos y propiedades).
//Úselo self::$member para acceder a miembros estáticos (métodos y propiedades).

class Circle
{
    // properties
    public $radius= 0; //declaring public member
    public static $pi=3.14;  //declaring a public static member
    
    // Method to get the Circumference
    public function getCircumference(){
        return (2 * self::$pi * $this->radius );
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->radius * $this->radius*self::$pi);
    }
  
    // Method to get the diameter
    public function getDiameter(){
        return ($this->radius * 2);
    }
}

// Create a new Circle class object
$obj = new Circle;

 
// Set object properties values
$obj->radius = 4;

 
// Read the object properties values again to show the change
echo "Radius is ". $obj->radius . "\n"; 
echo "Diamater is ". $obj->getDiameter() . "\n"; 
 
 
// Call the object methods
echo "Circumference is ". $obj->getCircumference(),"\n";
echo "Area is " .$obj->getArea()."\n"; 
echo "Value of pi is " .$obj::$pi;


// -- Square
class Square {

    public $sides = 0;
    
    public $name = " ";  
    

    public function __construct($name, $sides)
    { //defining a constructor
        $this->sides = $sides; //initializing $this->sides to $sides
        $this->name = $name; //initializing $this->name to $name
        
    }
    
    public function __destruct()
    { //destructor for Shape gets called at the end
        echo "Destructor Called!\n";
    }

    public function description()
    { //method to display name and sides of a shape
        echo "A $this->name with $this->sides sides.";
    }

}


class Thing
{ //base class
    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //base class constructor
        $this->sides = $sides;
        $this->name = $name;
    }

    public function description()
    {
        return "A $this->name with $this->sides sides.";
    }
}

class Hexa extends Thing
{ //derived class inheriting from base class
    public $sideLength = 0;

    public function __construct($sideLength)
    {
        parent::__construct("square", 4); //calling parent class constructor
        $this->sideLength = $sideLength;
    }

    public function perimeter()
    {
        return $this->sides * $this->sideLength;
    }

    public function area()
    {
        return $this->sideLength * $this->sideLength;
    }
}

$mySquare = new Square(10);
$mySquare->description();
echo "Perimeter of the square is " . $mySquare->perimeter() . "\n";
echo "Area of the square is ";
echo $mySquare->area();