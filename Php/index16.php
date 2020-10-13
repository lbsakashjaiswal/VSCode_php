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

//Creating a function for printing array values 
function usingArraysMult()
{   
    echo    '<span style="color:teal;
                    margin-left:-15px;">
                    1) Print arrays elements by using Multidimensional Arrays.
            </span>'. "<br>";
    echo "<br>";
    
    $fullForms = array (
        array("HTML ", "Hypertext"," Markup Language"),
        array("CSS ","Cascading"," Style Sheets"),
        array("JS ","Java","Script")
      );
    
    $sizeOfArray = count($fullForms);  
    
    if($sizeOfArray<1)
    {
        throw new Exception("Array is empty!!!");
    }  
      
    echo $fullForms[0][0].":  ".$fullForms[0][1].$fullForms[0][2].".<br><br>";
    echo $fullForms[1][0].":  ".$fullForms[1][1].$fullForms[1][2].".<br><br>";
    echo $fullForms[2][0].":  ".$fullForms[2][1].$fullForms[2][2].".<br><br>";
}

try       //try
{
  usingArraysMult();   
}

catch(Exception $e)     //catch exception
{
  echo '<br>'.'Message: ' .$e->getMessage();
}

//Creating a function to sort an arrays elements 
function usingArraysSort()
{   //echo "<br>";
    echo    '<span style="color:teal;
                    margin-left:-15px;">
                    2) Sort an arrays elements.
            </span>'. "<br>";
    echo "<br>";

    $year = array("HTML"=>"1993", "CSS"=>"1996","JavaScript"=>"1995", "PHP"=>"1995");
    asort($year);   //sort associative arrays in ascending order, according to the value
    
    $sizeOfArray = count($year);  
    
   

    foreach($year as $language => $language_value) {
      echo "Language =" . $language. ", Initial release =" . $language_value."<br>";
      echo "<br>";
    }
}

try       //try
{
    usingArraysSort();
}

catch(Exception $e)     //catch exception
{
    echo '<br>'.'Message: ' .$e->getMessage();
}

$x = 75;    //Variable declare 
$y = 25; 

//Creating a function to add 2 number using Global Variables
function usingSuperGlobals()
{   echo "<br>";
    echo    '<span style="color:teal;
                    margin-left:-15px;">
                    3) Adding of 2 numbers using global variables.
            </span>'. "<br>";
    echo "<br>";

    $check1 = is_int($GLOBALS['x']);
    $check2 = is_int($GLOBALS['y']);
    if($check1!='1'|| $check2!='1')
    {
        throw new Exception("Accept only integer values!!!"); 
    }
    else
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        echo "Value of X : ".$GLOBALS['x']." "." And Y : ".$GLOBALS['y']."<br>";
        echo "<br>"."Sum of X & Y is ".$GLOBALS['z'];
    } 
}
try       //try
{
    usingSuperGlobals();
}
catch(Exception $e)     //catch exception
{
    echo '<br>'.'Message: ' .$e->getMessage();
}

?>

<?php
echo "<br>";
echo "<br>";
echo    '<span style="color:teal;
                      margin-left:-15px;">
                    4) Print the same data enter by the user using $_REQUEST.
        </span>'. "<br>";
echo "<br>";
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname" placeholder="Enter Any Name">
    <input type="submit">
</form>

<?php
//Creating a function to take an input from the user and print it.
function usingRequest()
{   echo "<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) 
        {
            throw new Exception("Accept only integer values!!!"); 
        }    
        else 
        {
            echo $name."<br>";
        }

    }
}

try       //try
{
    usingRequest();
}
catch(Exception $e)     //catch exception
{
    echo '<br>'.'Message: ' .$e->getMessage();
}

?>

<?php
//Creating a function to take an input from the user and print it.
function usingRegExp()
{   echo "<br>";
    echo    '<span style="color:teal;
                          margin-left:-15px;">
                        5) Replace any word from the string using Regular Expression.
            </span>'. "<br>";
    echo "<br>";

    echo "Before replacing"."<br>";
    $str = "Php Hypertext Preprocessor";
    echo $str."<br><br>"."After Replacing"."<br>";
    $pattern = "/Php/i";
    echo preg_replace($pattern, "PHP", $str);
}
usingRegExp();
?>

</div>

</body>
</html>