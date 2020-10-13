<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Server Page</title>
    <link rel="icon" href="\serverlogo.JPG">
</head>

<body> 

<h2 style="color: red;">
    <center>Form Submitted Successfully</center>
</h2>

<?php
function printData()
{
    if(isset($_POST['submit']))
    {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $userLength = strlen($userName);
        $passLength = strlen($password);
    
        if($userLength>1 && $passLength>1)
        {
            echo '<span style="color:green;"> User Name : '.$_POST['userName'].'</span>'.'<br>';
            echo '<span style="color:green;"> Password : '.$_POST['password'].'</span>';
        }
        elseif($userLength<1 && $passLength>1)
        {
            echo '<span style="color:green;"> Password : '.$_POST['password'].'</span>'.'<br>'; 
            echo '<span style="color:red;"> User Name Empty !!!</span>';
        }
        elseif($userLength>1 && $passLength<1)
        {
            echo '<span style="color:green;"> User Name : '.$_POST['userName'].'</span>'.'<br>'; 
            echo '<span style="color:red;"> Password Empty !!!</span>';
        }
        elseif($userLength<1 && $passLength<1)
        {
            throw new Exception("User Name and Password both are empty!!!");
        }
    }
}

try       //try
{
    printData();
}
catch(Exception $e)     //catch exception
{
    echo '<br>'.$e->getMessage();
}

?>
</body>
</html>