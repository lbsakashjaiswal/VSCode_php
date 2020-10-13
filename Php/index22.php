
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

?>
<!-- 
//Creating a function
function usingClass()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    1) Calculate sum of 2 numbers using class.
            </span>'. "<br>";
    echo "<br>";
}
usingClass();

class Calculation
{
    public $num1;
    public $num2;
    public $total;
    
    function sum($num1,$num2)
    {
        $this->total = $this->num1 + $this->num2;
        return($this->total);
    }
}

$cal = new Calculation();
$cal->num1 = 10;
$cal->num2 = 6;
echo "Sum of ".$cal->num1." & ".$cal->num2." is :";
echo $cal->sum($cal->num1,$cal->num2);

?>

<br><br>

<?php

//Creating a function
// function chechClassObject()
// {   echo    '<span style="color:teal;
//                     margin-left:-15px;">
//                     2) To check if an object belongs to a specific class using instanceof keyword.
//             </span>'. "<br>";
//     echo "<br>";
// }
// chechClassObject();

// class language
// {
//     public $name;
// }

// $HTML = new language;

// var_dump($HTML instanceof language);

// ?>

// <br><br>

// <?php

// //Creating a function
// function chechClassCons()
// {   echo    '<span style="color:teal;
//                     margin-left:-15px;">
//                     3) Using a constructor saves us from calling the set_name() method which reduces the amount of code.
//             </span>'. "<br>";
//     echo "<br>";
// }
// chechClassCons();

// class Fruit 
// {
//   public $name;

//   function __construct($name)       //Constructor created 
//   {
//     echo $name; 
//   }
// }

// $apple = new Fruit("Apple");

// ?>

// <br><br>

// <?php

// //Creating a function
// function chechConsDes()
// {   echo    '<span style="color:teal;
//                     margin-left:-15px;">
//                     4) Create a program to show how constructor and destructor work.
//             </span>'. "<br>";
//     echo "<br>";
// }
// chechConsDes();

// class Books 
// {
//   // Properties
//   var $sub1;
//   var $sub2;

//   // Methods
//   function __construct($sub1, $sub2) 
//   {
//     $this->sub1 = $sub1;
//     $this->sub2 = $sub2; 
//     echo "My favorite book is Computer and Physics";
//   }
//   // function __destruct() 
//   // {
//   //   echo "<div  style='color: crimson; margin-left:15px;'>My favorite book is {$this->sub1} and {$this->sub2}". "</div>"; 
//   // }
// }

// $favbook = new Books("Computer", "Physics");
// ?>

// <br><br>

// <?php

// //Creating a function
// function usingAccessMod()
// {   echo    '<span style="color:teal;
//                     margin-left:-15px;">
//                     5) Create a program to check the accessing of private, protected and public function data. 
//             </span>'. "<br>";
//     echo "<br>";
// }
// usingAccessMod();

// class access_mod 
// {
//   public $name;
//   public $class;
//   public $dob;

//   function set_name($n)     // a public function (default)
//   { 
//     echo "call public function:<br>";
//     $this->name = $n;
//     return($this->name);
//   }
//   protected function set_class($n) // a protected function
//   { 
//     $this->class = $n;
//     return($this->class);
//   }
//   private function set_dob($n)  // a private function
//   {
//     $this->dob = $n;
//     return($this->dob);
//   }
//   function __construct()
//   {
//     echo "Function set_class() and set_dob() not call due to function created in private and protected modes
//           only we can use public modes variables.<br><br>";
//   }
// }

// $obj1 = new access_mod();
// // $obj1->set_name('Rahul'); // OK
// echo $obj1->set_name('Rahul');
// echo "<br>";
// // echo $obj1->set_class('12TH'); // ERROR
// // echo "<br>";
// // echo $obj1->set_dob('02/05/1999'); // ERROR
// ?>

// <br><br>

// <?php

// //Creating a function
// function usingInherit()
// {   echo    '<span style="color:teal;
//                     margin-left:-15px;">
//                     6) Create a program to print information from 2 classes with the help of Inheritance. 
//             </span>'. "<br>";
//     echo "<br>";
// }
// usingInherit();

// class userInfo
// {
//   public $name;
//   public $age;
//   public function __construct($name, $age) 
//   {
//     $this->name = $name;
//     $this->age = $age; 
//   }
//   public function intro() 
//   {
//     echo "User name is {$this->name} and the age is {$this->age}."; 
//   }
// }

// // biodata is inherited from userInfo
// class biodata extends userInfo 
// { }

// $biodata = new userInfo("Aman", "22");
// $biodata->intro();
?>
 -->
<!-- 
<?php

// //Creating a function
// function usingInheritPro()
// {   echo    '<span style="color:teal;
//                     margin-left:-15px;">
//                     7) Create a program to print information from protected class. 
//             </span>'. "<br>";
//     echo "<br>";
// }
// usingInheritPro();

// class userInfo 
// {
//   public $name;
//   public $age;

//   public function __construct($name, $age) 
//   {
//     $this->name = $name;
//     $this->age = $age; 
//   }

//   protected function intro() 
//   {
//     echo "My self {$this->name} and my age is {$this->age}."; 
//   }
// }

// class biodata extends userInfo 
// {
//   public function display() 
//   {
//     // Call protected function from within derived class - OK 
//     $this -> intro();
//   }
// }

// $biodata = new biodata("Deepak", "24");  // OK. __construct() is public
// $biodata->display(); // OK. message() is public and it calls intro() (which is protected) from within the derived class

// ?> 

<br><br>
 -->

<!-- <?php

//Creating a function
// function preventInher()
// {   echo    '<span style="color:teal;
//                     margin-left:-15px;">
//                     8) Write a program to prevent class inheritance or to prevent method overriding using final. 
//             </span>'. "<br>";
//     echo "<br>";
// }
// preventInher();

// final class userInfoData //final keyword to prevent inheritance 
// {
//   public $name;
//   public $age;

//   public function __construct($name, $age) 
//   {
//     $this->name = $name;
//     $this->age = $age; 
//   }

//   protected function Introduction() 
//   {
//     echo "My self {$this->name} and my age is {$this->age}."; 
//   }
// }

// class bioData extends userInfoData 
// {
//   public function message() 
//   {
//     // Call protected function from within derived class - OK 
//     $this -> Introduction();
//   }
// }

// $bioData = new bioData("Deepak", "24");  // OK. __construct() is public
// $bioData->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class

// ?>  -->


<?php

//Creating a function
function usingConst()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                  9) Write a program to print class constant using const keyword. 
            </span>'. "<br>";
    echo "<br>";
}
usingConst();

class printInfo 
{
  const display = "A class constant is declared inside a class with the const keyword!";
  public function dataFunction() 
  {
    echo "<br>Using constant inside the class: ";
    echo self::display;    //using self
  }
}
echo "Using constant from outside the class: ";
echo printInfo :: display ;   //using constant from outside the class 
echo "<br>";
$printInfo = new printInfo();
$printInfo->dataFunction();
?>

<br><br>
<?php

//Creating a function
function usingAbstract()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                  10) Write a program to print abstract parent class. 
            </span>'. "<br>";
    echo "<br>";
}
usingAbstract();

abstract class Father   //abstract class created
{
  function disp()
  {
    echo "Normal Method access by the help of child class<br>"; 
  }
  abstract function absmethod();    //abstract method
}
class Son extends Father    //extends the class
{
  public function absmethod()
  {
    echo "Abstract Method<br>";
  }
}

$object = new Son;    //Create an object
$object->absmethod();
echo "<br>";
$object->disp();
?>
  
</div>

</body>
</html>