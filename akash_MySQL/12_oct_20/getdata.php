<?php
    if(isset($_POST['fullname'])){
        $fName = $_POST['fullname'];
        $mnumber = $_POST['mnumber'];
        $address = $_POST['address'];
        $state = $_POST['state'];
        $city = $_POST['city'];

        //connection to the server
        $conn = new mysqli("localhost", "root", "", "Table");

        //Inserting value into database  
        $sql = "INSERT INTO ajax_database_p2 SET full_name='$fName', mobileno='$mnumber', 
            full_address='$address', state='$state', city='$city' ";
            
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
