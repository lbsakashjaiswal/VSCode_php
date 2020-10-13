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

<?php
//Creating a function
function usingForValidate()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    3) Validate user name and password.
            </span>'. "<br>";
    echo "<br>";
}
usingForValidate();
?>

<?php
$check = 0;
// define variables and set to empty values
$userNameErr = $passwordErr =  "";
$userName = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["userName"]))
    {
        $userNameErr = "Name is required";
    } 
  else 
    {
        $userName = test_name($_POST["userName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$userName)) {
            $userNameErr = "Only letters and white space allowed";
            $check = 1;
          }            
    }
  if (empty($_POST["password"]))
    {
        $passwordErr = "Email is required";
    } 
  else 
    {
        $password = test_name($_POST["password"]);
    }
}

function test_name($data) 
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
        Name: <input type="text" name="userName">
        <span class="error">* <?php echo $userNameErr;?></span>
        <br><br>
        Password: <input type="password" name="password">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
if($check==0)
{
       echo $userName;

}else
echo "<br>";
echo $password;
echo "<br>";
?>

</div>

</body>
</html>