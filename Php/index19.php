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
function uploadImage()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    1) To upload an image files with all conditions check .
            </span>'. "<br>";
    echo "<br>";
}
uploadImage();
?>

<form action="?" method="POST" enctype="multipart/form-data">
    Upload An Image :   <br>
                        <input type="file" name="fileToUpload">
                        <br> <br>
                        <input type="submit" value="Upload Image" name="submit">
</form>

<?php

if(isset($_POST["submit"])) 
{
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
    {
        echo '<h3 style=color:green;>File is an image - ' . $check["mime"] . '.</h3>';
        $uploadOk = 1;
    } 
    else 
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) 
    {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 600000) 
    {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;  
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) 
    {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) 
    {
        echo "<br>"."Sorry, your file was not uploaded.";
    }
    else    // if everything is ok, try to upload file 
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } 
        else 
        {     
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
echo "<br>";
echo "<br>";

//Creating a function
function useCookie()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                2) Create/Retrieve a Cookie .
            </span>'. "<br>";
    echo "<br>";
}
useCookie();

$cookie_name = "user";
$cookie_value = "Akash Kumar Jaiswal";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php

if(!isset($_COOKIE[$cookie_name])) 
{
    echo "Cookie named '" . $cookie_name . "' is not set!";
} 
else 
{
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

?>

<p>
    <strong>Note:</strong> 
    You might have to reload the page to see the value of the cookie.
</p>

</div>

</body>
</html>
