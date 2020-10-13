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

// Creating function for replace the string
function stringReplace()
{   echo '<span style="color:teal;
                       margin-left:-15px;"> 
                       1) String Replace.
          </span>';
   
    echo '<p style="margin-left:15px;">Before replace</p>';
    echo "php: Hypertext Preprocessor";
    echo '<p style="margin-left:15px;">After replace</p>';
    echo str_replace("php:","PHP :-","<p>php: Hypertext Preprocessor</p>");   // Using str_replace function to replace the strings

}

// Creating function to check if the type of a variable is integer  
function variableCheck()
{   echo '<span style="color:teal; 
                       margin-left:-15px;">
                       2) Check if the type of a variable is integer or not.
          </span>'. "<br>";

    $num1 = 10;
    echo "<p>If number is " .$num1. "</p>";

    var_dump(is_int($num1));                   // var_dump — Dumps information about a variable

    // Check again with another type
    $num2 = 13.9;
    echo "<br>";
    echo "<p>If number is " .$num2. "</p>";
    var_dump(is_int($num2));
    echo "<br>";
}

// Creating function to find the lowest or highest value in a list of arguments: 
function minMaxCheck($num1)
{   echo '<span style="color:teal;
                             margin-left:-15px;">
                             3) To find the lowest or highest value in a list of arguments.
            </span>'. "<br>";
    
    print "<p> 1st arguments are </p>";

    var_dump($num1);                                                 // using var_dump() to display the arguments 
    echo "<p>to find lowest value is : ". min($num1). "</p>";        //using min() function to find the lowest value
    
    $num2=[0, 150, 30, 20, -8, -200];
    echo "<p> 2nd arguments are </p>";

    var_dump($num2);
    echo "<p>to find highest value is : ". max($num2). "</p>";       //using max() function to find the highest value

}


// Creating function of a constants using define() function
function usingConstants()
{   echo '<span style="color:teal;
                       margin-left:-15px;">
                       4) Use define() function - value cannot be changed during the script.
            </span>'. "<br>";

    define("fullform", "XAMPP - Apache, MySQL, PHP and Perl");  //define() function defines a constant

    echo "<p>".fullform."</p>";  //constant names do not need a leading dollar sign ($)

}

// Creating function of a constants using define() function
function usingOperators()
{  echo '<span style="color:teal; 
                      margin-left:-15px;">
                      5) Uses of Operators.
            </span>'. "<br>";
    
    echo "<p>i. Identical Operators (===)</p>";
    $num1 = 30;  
    $num2 = "30";
    $num3 = 30;

    echo "<p>The value of 1st, 2nd and 3rd variable is ".$num1." but 2nd varible is string type <p>"; 
    echo "<p>If we use Identical Operators between 1st and 2nd variable then output is : </p>";

    var_dump($num1 === $num2);              // returns false because types are not equal

    echo "<p>If we use Identical Operators between 1st and 3rd variable then output is : </p>";

    var_dump($num1 === $num3);              // returns true because types are equal

    echo "<p>ii. String Operators (Concatenation assignment(.=))</p>";
    $text1 = "Concatenation";
    $text2 = " of two string";
    
    echo "<p>Text1 = ".$text1."<br>"."Text2 = ".$text2."</p>";
    $text1.=$text2;   // Concatenation assignment text2 merge with text1
    echo "<p>Concatenation of both strings : ".$text1."</p>";  
}

// Creating function of a constants using define() function
function usingLoops()
{   echo '<span style="color:teal;
                        margin-left:-15px;">
                        6) Print table using loops.
            </span>'. "<br>";

    $num1 = 5;
    $num2 = 12;
    $count = 1;
    echo "<p>i. Table of ".$num1."</p>";   
    for($i=1;$i<=10;$i++)  //For loop
    {
        print $i*$num1." "; 
    }

    echo "<p>ii. Table of ".$num2."</p>";

    while($num2<=$num2*10)  //While loop
    {
        echo $num2*$count." ";  
        $count++;  // Post-increment
        if($count>10) //if statement 
        {
         break;   // Break statement  
        }
    
    }

}

function usingSwitchCase()
{   echo '<span style="color:teal;
                       margin-left:-15px;">
                       7) Using switch case find the week(1-7).
            </span>'. "<br>";
    $week = "5";
    echo "<br>";

    switch ($week){
        case "1":    
            echo "Monday";
            break;
        case "2": 
            echo "Tuesday";
            break;
        case "3":
            echo "Wednesday";
            break;
        case "4":    
            echo "Thursday";
            break;
        case "5":     
            echo "Friday";
            break;
        case "6":    
            echo "Saturday Sunday";
            break;
        case "7":    
            echo " Sunday";
            break;
        default:      
            echo "You enter wrong key";
    }
}

// Creating function of try/catch
function usingTryCatch()
{   echo '<span style="color:teal;
                       margin-left:-15px;">
                       4) Exception Handling(Try/catch).
            </span>'. "<br>";
    echo "<p>".fullform."</p>";  //constant names do not need a leading dollar sign ($)

}

// Practice topic function run
stringReplace();
echo "<br>";

variableCheck();
echo "<br>";

minMaxCheck([40, 10, 0, -8, 20]);   //function with arguments
echo "<br>";

usingConstants();
echo "<br>";

usingOperators();
echo "<br>";

usingLoops();
echo "<br>";
echo "<br>";

usingSwitchCase();
echo "<br>";

?>
</div>

</body>
</html>