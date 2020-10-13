<!DOCTYPE html>
<html>

<head>
    <title>Akash Training</title>
    <link rel="icon" href="/index/icon.JPG">
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
function usingInterfaces()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    2) Create a table using MySQLi.
            </span>'. "<br>";
    echo "<br>";
}

usingInterfaces();

// $servername = "localhost";
// $username = "username";
// $password = "";
// $dbname = "Test2";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) 
// {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO person (id, firstname, lastname, date_of_birth)
// VALUES ('1',Akash', 'Jaiswal', '1997-10-02')";

// if ($conn->query($sql) === TRUE) 
// {
//   echo "New record created successfully";
// } else 
// {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO person (id, firstname, lastname, date_of_birth)
VALUES ('1', 'Akash', 'Kumar Jaiswal', '1997-10-02')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</div>

</body>
</html>