<?php
session_start();
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


//Creating a function
function usingSession()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    1) Storing user information to be used across multiple pages using Session.
            </span>'. "<br>";
    echo "<br>";
}
usingSession();
?>

<?php
// Echo session variables that were set on previous page
echo "Favorite subject is " . $_SESSION["favsubject"] . ".<br><br>";
echo "Favorite car is " . $_SESSION["favcar"] . ".";
echo "<br>";
echo "<br>";
?>

<!-- Modify a PHP Session Variable -->
<?php
//Creating a function
function modifySession()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    2) Modify the storing informations into session.
            </span>'. "<br>";
    echo "<br>";
}
modifySession();
?>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcar"] = "Mercedes";
print_r($_SESSION);
echo "<br>";
echo "<br>";
?>

<!-- Destroy a PHP Session -->
<?php
//Creating a function
function destroySession()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    3) Destroy the storing informations into session.
            </span>'. "<br>";
    echo "<br>";
}
destroySession();
?>

<?php
// remove all session variables
// session_unset();
// echo "Remove all session variables successfully"
echo "<br>";
echo "<br>";
?>

<?php
//Creating a function
function usingFilter()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    4) filter_list() function can be used to list what the PHP filter extension offers.
            </span>'. "<br>";
    echo "<br>";
}
usingFilter();
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
    foreach (filter_list() as $id =>$filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
?>
</table>

<br><br>

<?php
//Creating a function
function usingFilter_var()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    5) Using filter_var() function to remove all HTML tags from a string.
            </span>'. "<br>";
    echo "<br>";
}
usingFilter_var();

$str = "<h1>Hello SM-Tech!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

<br><br>

<?php
//Creating a function
function usingFilter_varForInt()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    6) Using filter_var() function to check if the variable $int is an integer.
            </span>'. "<br>";
    echo "<br>";
}
usingFilter_varForInt();

$int = 0;

if (!filter_var($int, FILTER_VALIDATE_INT) == false || filter_var($int, FILTER_VALIDATE_INT) == '0') 
{
  echo "You enter ".$int." is an Integer";
}
else 
{
  echo "You enter ".$int." is not an Integer";
}

?>

<br><br>

<?php
//Creating a function
function usingFilter_varForIpAdd()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    7) Using filter_var() function to check if the variable $ip is a valid IP address.
            </span>'. "<br>";
    echo "<br>";
}
usingFilter_varForIpAdd();

$ip = "127.0.01";

if (!filter_var($ip, FILTER_VALIDATE_IP) == false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
?>

<br><br>

<?php
//Creating a function
function usingFilterAdv_varForIpAdd()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    8) Using filter_var() function to check if a variable is both of type INT, and between 1 and 160.
            </span>'. "<br>";
    echo "<br>";
}
usingFilterAdv_varForIpAdd();

$int = 60;
$min = 1;
$max = 160;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) 
{
  echo("Variable value is not within the legal range");
} 
else 
{
  echo("Variable value is within the legal range");
}
?>


<br><br>

<?php
//Creating a function
function usingFilterAdv_varAsciiValue()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    8) Remove all HTML tags, and all characters with ASCII value > 127, from the string using filter_var().
            </span>'. "<br>";
    echo "<br>";
}
usingFilterAdv_varAsciiValue();

$str = "<h1>Hello WorldÆØÅ!</h1>";
echo "You enter ".$str;

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo "After sanitize the string ".$newstr;

?>

<br><br>

<?php
//Creating a function
function usingArrayMap()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    9) Using Callback Functions Passed as an argument into another function.
            </span>'. "<br>";
    echo "<br>";
}
usingArrayMap();

function exclaim($str)
{
    echo $str;
}
  
function ask($str) 
{
    echo $str;
}
  
function printFormatted($str, $format) 
{
   $format($str);
   echo "<br>";
}
  
// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("HTML, CSS", "exclaim");
printFormatted("JavaScript, PHP ", "ask");
 
?>

<br><br>

<?php
//Creating a function
function usingJSON()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    10) Using json_encode() function is used to encode a value to JSON format.
            </span>'. "<br>";
    echo "<br>";
}
usingJSON();

$language = array("HTML", "CSS", "JavaScript", "PHP");

echo json_encode($language);

?>

<br><br>

<?php
//Creating a function
function usingJSONDecode()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    11) Using json_decode() function is used to decode a JSON object into a PHP object or an associative array.
            </span>'. "<br>";
    echo "<br>";
}
usingJSONDecode();

$language = '{"HTML":1993, "CSS":1996, "JavaScript":1995, "PHP":1995}';
 
var_dump(json_decode($language, true));

?>

<br><br>

<?php
//Creating a function
function AccDecodeValues()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    12) Using json_decode() function to accessing the decoded values.
            </span>'. "<br>";
    echo "<br>";
}
AccDecodeValues();

$language = '{"HTML":1993, "CSS":1996, "JavaScript":1995, "PHP":1995}';

$obj = json_decode($language);

foreach($obj as $key => $value) 
{
  echo $key . " => " . $value . "<br><br>";
}

?>

<?php
//Creating a function
function usingTryCatch()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    13) Using try/catch statement to catch exceptions and continue the process.
            </span>'. "<br>";
    echo "<br>";
}
usingTryCatch();

function divide($dividend, $divisor) 
{
  if($divisor == 0) 
  {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}
try 
{
  echo divide(5, 0);
} 
catch(Exception $ex) 
{
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file"."<br><br> on line $line: [Code $code]<br><br>"."
  $message";
}

?>

</div>

</body>
</html>