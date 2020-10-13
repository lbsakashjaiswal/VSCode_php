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
 echo "<center>
              <h1>
                  <u>Hello SM Tech Family</u>
              </h1>   
        </center>";
 
// function created  
function displayProfile($fullName)
{
    
// Introduction part
 print "<center>
            <h2>My self " . $fullName . "</h2>
        </center>";

 print "<center>
            <h3>(Junior Software Developer)</h3>
        </center>";
}

displayProfile($fullName);      // Run function for my profile

//  Practice topics  
echo "<h4>
        <u>Practice Topics</u>
      </h4>";

echo "<br>";
echo "<br>";

function usingLoops($num1)
{   echo '<span style="color:teal;
                        margin-left:-15px;">
                        1) Print table using loops.
            </span>'. "<br>";
   
    if($num1<1)
     {
      throw new Exception("The number is 0 or below");
     }

    $count = 1;
    echo "<p>i. Table of ".$num1."</p>";   
   
    for($i=1;$i<=10;$i++)  //For loop
    {
    print $i*$num1." "; 
    }
}

try       //try
{
  usingLoops(12);    //passing 12
}

catch(Exception $e)     //catch exception
{
  echo '<br>'.'Message: ' .$e->getMessage();
}

echo "<br>";
echo "<br>";

//Creating a function for printing array values 
function usingArrays()
{   echo '<span style="color:teal;
                        margin-left:-15px;">
                        2) Print all the values of an indexed array.
            </span>'. "<br>";
    echo "XAMPP"."<br>";
    $xampp = array("X-Cross-platform", "A-Apache server", "M-Mysql", "P-PHP", "P-Perl programming language");
    $arrlength = count($xampp);

    if($arrlength<1)
    {
     throw new Exception("Array is empty!!!");
    }
    for($x = 0; $x < $arrlength; $x++)
     {
      echo $xampp[$x];
      echo "<br>";
     }   
}

try       //try
{
  usingArrays();   
}

catch(Exception $e)     //catch exception
{
  echo '<br>'.'Message: ' .$e->getMessage();
}
echo "<br>";

//Creating a function for printing array values 
function usingArraysAss()
{   echo '<span style="color:teal;
                        margin-left:-15px;">
                        3) Print the size of built-in datatypes.
          </span>'. "<br>";
    
    echo "<br>";
    $sizeOfVariable = array("char"=>"1", "int"=>"4", "float"=>"4", "double"=>"8");
    
    if($sizeOfVariable<1)
    {
     throw new Exception("Array is empty!!!");
    }

    foreach($sizeOfVariable as $x => $x_size)
    {
      echo "Data_Type = " . $x . " , Size = " . $x_size;
      echo "<br>";
    }

}

try       //try
{
  usingArraysAss();   
}

catch(Exception $e)     //catch exception
{
  echo '<br>'.'Message: ' .$e->getMessage();
}

?>

</div>

</body>
</html>