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
function usingInterfaces()
{   echo    '<span style="color:teal;
                    margin-left:-15px;">
                    1) Create a program to access parent class using interface.
            </span>'. "<br>";
    echo "<br>";
}
usingInterfaces();

?>

<?php
// Interface definition
interface language 
{
  public function nameOfLanguage();
}

// Class definitions
class HTML implements language 
{
  public function nameOfLanguage() 
  {
    echo " HTML ";
  }
}

class CSS implements language 
{
  public function nameOfLanguage() 
  {
    echo " CSS ";
  }
}

class javaScript implements language 
{
  public function nameOfLanguage() 
  {
    echo " JavaScript ";
  }
}

// Create a list of languages
$HTML = new HTML();
$CSS = new CSS();
$javaScript = new javaScript();
$languages = array($HTML, $CSS, $javaScript);

echo "Favorite Languages are ";

// Tell the languages to make a sound
foreach($languages as $language) 
{
  $language->nameOfLanguage();
}

?>
 
</div>

</body>
</html>
