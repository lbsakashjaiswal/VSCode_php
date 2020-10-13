<!DOCTYPE html>
<html>

<head>
    <title>Akash Training</title>
    <link rel="icon" href="\icon.JPG">
    <style>
        .error {color: #FF0000;}
    </style>
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

<!-- <?php
//Creating a function
function checkNameUrlEmail()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    1) Check Validate Name, E-mail, and URL .
            </span>'. "<br>";
    echo "<br>";
}
checkNameUrlEmail();
?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $website =  $gender = $comment = "";
$check = 0; 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["name"])) 
    {
        $nameErr = "Name is required";
    }
    else 
    {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
        {
            $nameErr = "Only letters and white space allowed";
            $check = 1;
        }
    }
    if (empty($_POST["email"])) 
    {
        $emailErr = "Email is required";
    }
    else 
    {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $emailErr = "Invalid email format";
            $check = 1;
        }
    }
    if (empty($_POST["website"]))
    {
        $website = "";
    }
    else
    {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
        {
            $websiteErr = "Invalid URL";
            $check = 1;
        } 
    }    
    if (empty($_POST["comment"])) 
    {
        $comment = "";
    } 
    else 
    {
        $comment = test_input($_POST["comment"]);
    }
    if (empty($_POST["gender"])) 
    {
        $genderErr = "Gender is required";
        $check = 1;
    }
    else 
    {
        $gender = test_input($_POST["gender"]);
    }  
}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;   
}   

?>

<p>
    <span class="error">* required field</span>
</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>

  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
if(!empty($name) && !empty($email) && $check == "0") 
{
    echo "Name : ".$name;
    echo "<br>";
    echo "Email : ".$email;
    echo "<br>";
    echo "Gender : ".$gender;

}
if(!empty($name) && !empty($email) &&  !empty($website) && $check == "0")
{  
    echo "<br>";
    echo "Website : ".$website;
}
if(!empty($name) && !empty($email) &&  !empty($comment))
{
    echo "<br>";
    echo "Comment : ".$comment;
}

?> -->
<!-- -------------------------------------------------------------- -->
<?php
//Creating a function
function dateTime()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    1) Print date and time.
            </span>'. "<br>";
    echo "<br>";
}
dateTime();

$d=mktime(12, 00, 54, 8, 12, 2014);
echo "Date  :" . date("d-m-y", $d);
echo "<br>";
echo "Time  :" . date("h:i:sa", $d);

echo "<br>";
echo "<br>";

//Creating a function
function includeRequire()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    2) Use of Include & Require.
            </span>'. "<br>";
    echo "<br>";
}
includeRequire();

echo '<span style="color: green;">Include statement </span>.<br><br>';
include 'inclreq.php';          // include statement 
echo "My favourite colour is  $color And $color1.";

echo "<br><br>";
echo '<span style="color: green;">Require statement  </span>.<br><br>';
require 'inclreq.php';      // require statement 
echo "My favourite colour is  $color And $color1.";
echo "<br><br>";
?>
<?php
//Creating a function
function fileHandling()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    3) Print data from txt file using readfile() function.
            </span>'. "<br>";
    echo "<br>";
}
fileHandling();

echo readfile("data.txt");         //readfile() function
echo "<br><br>";
?>

<?php
//Creating a function
function fileRead()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    4) Open and read text file using fopen() function.
            </span>'. "<br>";
    echo "<br>";
}
fileRead();

$myfile = fopen("data.txt", "r") or die("Unable to open file!");        //fopen() function

// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";           //fgets()
}
fclose($myfile);                          //fclose()
echo "<br><br>";
?>


<?php
//Creating a function
function fileWrite()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    5) Open and write into text file using fwrite() function.
            </span>'. "<br>";
    echo "<br>";
}
fileWrite();

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "PHP :- PHP code is usually processed on a web server by a PHP interpreter implemented as a module executed PHP code.\n";
fwrite($myfile, $txt);
$myFileRead = fopen("newfile.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myFileRead)) 
{
    echo fgets($myFileRead) . "<br>";         //fgets()
}
fclose($myfile);
echo "<br><br>";
?>

</div>

</body>
</html>