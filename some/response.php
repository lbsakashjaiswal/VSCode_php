<?php
    // Receive data request
    $data = $_GET['sendData'];

    // Creating array for different states
    $delhi = array ('select city','Firozobad','Jahanpanah','Shahjahanabad','Uttam Nagar');
    $haryana = array ('select city','Gurugram','Hisar','Rohtak');
    $punjab = array ('select city','Amritsar','Ludhiana','Pathankot');
    $up = array ('select city','Gorakhpur','Lucknow','Noida');

    // Printing cities name for delhi state
    if($data == "Delhi"){
        foreach($delhi as $aone){
            echo "<option> $aone </option>";
        }
    }
    // Printing cities name for haryana state
    if($data == "Haryana"){
        foreach($haryana as $bone){
            echo "<option> $bone </option>";
        }
    }
    // Printing cities name for punjab state
    if($data == "Punjab"){
        foreach($punjab as $cone){
            echo "<option> $cone </option>";
        }
    }
    // Printing cities name for UP state
    if($data == "UP"){
        foreach($up as $done){
            echo "<option> $done </option>";
        }
    }
?>
