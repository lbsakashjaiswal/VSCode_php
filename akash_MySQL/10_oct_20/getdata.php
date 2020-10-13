<?php
    if(isset($_POST['fullname'])){
        $fName = $_POST['fullname'];
        $address = $_POST['address'];

        //connection to the server
        $conn = new mysqli("localhost", "root", "", "Table");

        //Inserting value into database  
        $sql = "INSERT INTO ajax_database SET full_name='$fName', full_address='$address'";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>