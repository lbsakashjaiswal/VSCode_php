<?php
    if(isset($_POST['submit'])){
        $fName = $_POST['fname'];
        $address = $_POST['faddress'];

        $conn = mysqli_connect("localhost", "root", "", "Table");

        //Inserting value into database  
        $sql = "INSERT INTO ajax_database SET full_name='$fName', full_addess='$address'";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // $conn->close();
    }
?>