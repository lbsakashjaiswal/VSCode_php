<?php
//namespace Html;
class Data 
{
  public $lang1 = "";
  public $lang2 = "";
  public $lang3 = "";
  public function message() 
  {
    echo "<p> {$this->lang1} , {$this->lang2} and {$this->lang3} are the languages used for Front End development.</p>";
  }
}

$Data = new Data();
$Data->lang1 = "HTML";
$Data->lang2 = "CSS";
$Data->lang3 = "JavaScript";
?>

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

// //Creating a function
// function usingInterfaces()
// {   echo    '<span style="color:teal;
//                     margin-left:-15px;">
//                     1) Create a Data class using namespace.
//             </span>'. "<br>";
//     echo "<br>";
// }
// usingInterfaces();
?>

<?php
// $Data->message();
?>

<!-- <br><br> -->

<?php

//Creating a function
function usingNamespace()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    2) Write a program to access the data of namespace.
            </span>'. "<br>";
    echo "<br>";
}
// usingNamespace();

// require 'Data.php';
// echo "currently i learning php<br><br>";
// $obj = new Program\info;
// echo "<br><br>First appeared in ".Program\year;

?>

<br><br>

<?php

//Creating a function
function usingIterables()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    3) Create a program to print array items using iterables.
            </span>'. "<br>";
    echo "<br>";
}
usingIterables();
?>
<?php

function printIterable(iterable $myIterable) 
{   echo "Table of 2 : <br>";
  foreach($myIterable as $item) 
  {
    echo $item*2;
    echo "<br>";
  }
}

$arr = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];
printIterable($arr);
?>

<br><br>

<?php

//Creating a function
function usingIterables1()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    4) Create a program to print array items using iterables.
            </span>'. "<br>";
    echo "<br>";
}
usingIterables1();

function getIterable():iterable 
{ echo "Table of 5 : <br>";
  return ["5", "10", "15", "20", "25", "30", "35", "40", "45", "50"];
}

$myIterable = getIterable();
foreach($myIterable as $item) 
{ 
  
  echo $item.'<br>';

}
?>

</div>

</body>
</html>
