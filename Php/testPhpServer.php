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

<?php
class userInfo 
{
  public $name;
  public $age;

  public function __construct($name, $age) 
  {
    $this->name = $name;
    $this->age = $age; 
  }

  protected function intro() 
  {
    echo "My self {$this->name} and my age is {$this->age}."; 
  }
}

class biodata extends userInfo 
{
  public function message() 
  {
    // Call protected function from within derived class - OK 
    $this -> intro();
  }
}
$biodata = new biodata("Deepak", "32");  // OK. __construct() is public
$biodata->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>

</body>
</html>