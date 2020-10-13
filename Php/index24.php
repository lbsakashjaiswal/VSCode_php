<!DOCTYPE html>
<html>

<head>
    <title>Akash Training</title>
    <link rel="icon" href="\icon.JPG">
</head>

<body>

    <!-- Div created for giving some sytles  -->
<div style="color: crimson; margin-left:15px;">

<?php
        
$fullName = "Akash Kumar Jaiswal";    // Variable Declare  

// Head content 
echo    "<center>
              <h1>
                  <u>Hello SM Tech Family</u>
              </h1>   
        </center>";
 
// function created  
function displayProfile($fullName)
{ 
    // Introduction part
    print   "<center>
                <h2>My self " . $fullName . "</h2>
            </center>";

    print   "<center>
                <h3>(Junior Software Developer)</h3>
            </center>";
}

displayProfile($fullName);      // Run function for my profile

//  Practice topics  
echo    "<h4>
            <u>Practice Topics</u>
        </h4>";

//Creating a function
function usingInterfaces()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    1) Create a program to access multiple classes using Trait.
            </span>'. "<br>";
    echo "<br>";
}
usingInterfaces();

trait message1 
{
  public function msg1() 
  {
    echo "Traits are used to declare methods that can be used in multiple classes."; 
  }
}

class Welcome 
{
  use message1;
}

$obj = new Welcome();
$obj->msg1();

?>

<br><br>


<?php
//Creating a function
function usingTrait()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    2) Create a program to access multiple classes using Trait.
            </span>'. "<br>";
    echo "<br>";
}
usingTrait();

trait className1 {
  public function printClass1() {
    echo "Class 1 printed "; 
  }
}

trait className2 {
  public function printClass2() {
    echo "Class 2 printed"; 
  }
}

class WelcomeClass 
{
  use className1;
}

class WelcomeClass2 
{
  use className1, className2;
}

$obj = new WelcomeClass();
$obj->printClass1();
echo "<br>";


$obj2 = new WelcomeClass2();
echo "1st & 2nd Class call :- ";
$obj2->printClass1();
$obj2->printClass2();
?>
 
 <br><br>


<?php
//Creating a function
function usingStatic()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    3) Create a program to print classes data using Static.
            </span>'. "<br>";
    echo "<br>";
}
usingStatic();

class greeting 
{
    public static function welcome() 
    {
		echo "Hello SM-Tech!";
	}
    public function __construct() 
    {
		self::welcome();
	}
}

new greeting();
?>

<br><br>


<?php
//Creating a function
function usingStaticDetails()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    4) Create a program to call a static method from a child class using static method.
            </span>'. "<br>";
    echo "<br>";
}
usingStaticDetails();

class domain {
    protected static function getstaticDetails() 
    {
		echo "Static method can be public or protected";
	}
}

class domainW3 extends domain 
{
	public $staticDetails;
    public function __construct() 
    {
		$this -> staticDetails = parent::getstaticDetails();
	}	
}

$domainW3 = new domainW3;
echo $domainW3 -> staticDetails;

?>


<br><br>


<?php
//Creating a function
function usingXStaticDetails()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    5) Create a program to get value static property via child class and xStatic() method.
            </span>'. "<br>";
    echo "<br>";
}
usingXStaticDetails();

class pi 
{
  public static $value=3.14159;
}

class x extends pi 
{
  public function xStatic() 
  {
    return parent::$value;
  } 
}

// Get value of static property directly via child class

echo "Print the data via static property directly<br>";
echo "value of pi : ";
echo x::$value;
echo "<br>";


// Get value of static property via xStatic() method
$x = new x();
echo "Print the data via xStatic Method <br>";
echo "value of pi : ";
echo $x->xStatic();

?>
 


</div>

</body>
</html>
