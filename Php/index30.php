<?php
   include "connection.php";
    // $conn = new PDO('mysql:host=localhost; dbname=School_Record', 'root');
            // // prepare sql and bind parameters
            // $stmt = $conn->prepare("INSERT INTO Students ( First_name, Last_name, Mobile_no) VALUES (?, ?, ?)");
            // $stmt->execute(['Ashish','Kumar Singh','9716671070']);
            
            // if($conn->query($conn) === TRUE) {
            //    echo "New record created successfully";
            // }
   ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Akash Training</title>
        <link rel="icon" href="/index/icon.JPG">
        <style>
            body {
                background: #f5f4f4;
            }

            table,
            td,
            th {
                border: 1px solid #ddd;
                text-align: left;
            }

            table {
                border-collapse: collapse;
                width: 35%;
            }

            th,
            td {
                padding: 15px;
            }   

            th {
                color: #212529;
            }

            td {
                color: #212529;
            }
        </style>
    </head>
    <body>
        <!-- Image and text -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand">
                <h4>Hello SM - Tech Family</h4>
            </a>
            <form class="form-inline">
                <h5 style="color:white;">@AKJ</h5>
            </form>
        </nav>
        <!-- Div created for giving some sytles  -->
        <div class="mt-5" style="color: crimson; margin-left:15px;">
            <?php
                // //Creating a function
                // function practiceFunction(){   
                //     echo '<span style="color:teal;"> 1) Select and Order Data print into table. </span>'. "<br><br>";
                // }

                // practiceFunction();
        
                // $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students ORDER BY Roll_no";
                // $result = $conn->query($sql);

                // if ($result->num_rows > 0){
                //     echo "<table><tr><th><center>Roll no.</center></th><th><center>Name</center></th></th><th><center> Mobile No</center></th></tr>";
                //     // output data of each row
                //     while($row = $result->fetch_assoc()){
                //         echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["First_name"]. " " . $row["Last_name"]." " . "</td><td>" . $row["Mobile_no"]. "</td></tr>";
                //     }
                //     echo "</table>";
                // } 
                // else {
                //     echo "0 results";
                // }

                // $conn->close();

            ?>

            <?php
                //Creating a function
                // function practiceFunction(){   
                //     echo '<span style="color:teal;"> 1) Select and Order Data print into table. </span>'. "<br><br>";
                // }

                // practiceFunction();
                
                // $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students ORDER BY Roll_no";
                // $result = $conn->query($sql);

                // if ($result->num_rows > 0){
                //     echo "<table><tr><th><center>Roll no.</center></th><th><center>Name</center></th></th><th><center> Mobile No</center></th></tr>";
                //     // output data of each row
                //     while($row = $result->fetch_assoc()){
                //         echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["First_name"]. " " . $row["Last_name"]." " . "</td><td>" . $row["Mobile_no"]. "</td></tr>";
                //     }
                //     echo "</table>";
                // }    
                // else {
                //     echo "0 results";
                // }

                // $conn->close();
            ?>

            <!-- <form action="" method="POST">
                <div class="form-group mt-3">
                    <h5>Enter roll no which you want to delete data</h5>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Enter Rollnumber" style="width:25vh;" name="rollNo">
                        </div>
                        <div class="col-sm-12 mt-2">
                            <button button type="submit" class="btn btn-primary" name="submit">Delete</button>
                        </div>
                    </div>
                </div>
            </form> -->

            <?php
            
                // if(isset($_POST['submit'])){
                //     try { 
                //         $rNumber = $_POST['rollNo'];
     
                //         $conn = new PDO('mysql:host=localhost; dbname=School_Record', 'root');
       
                //         // set the PDO error mode to exception
                //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
                //         // sql to delete a record
                //         $sql = "DELETE FROM Students WHERE Roll_no=$rNumber";
       
                //         // use exec() because no results are returned
                //         if($conn->exec($sql)){
                //             echo "Record deleted successfully";
                //         }
                //         else{
                //             echo "Record not found";
                //         }   
                //     }   
                //     catch(PDOException $e) {
                //         echo $sql . "<br>" . $e->getMessage();
                //     }
                //     $conn = null;
                // }
            ?>
            <?php
                // //Creating a function
                // function practiceFunction(){   
                //     echo '<span style="color:teal;"> 3) Update Data In a MySQL Table Using PDO. </span>'. "<br><br>";
                // }

                // practiceFunction();
        
                // try { 
                //     $conn = new PDO('mysql:host=localhost; dbname=School_Record', 'root');
       
                //     // set the PDO error mode to exception
                //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //     $sql = "UPDATE Students SET Last_name='Kumar Singh' WHERE Roll_no=2";

                //     // Prepare statement
                //     $stmt = $conn->prepare($sql);

                //     // execute the query
                //     $stmt->execute();

                //     // echo a message to say the UPDATE succeeded
                //     echo $stmt->rowCount() . " Records UPDATED successfully";
                // } 
                // catch(PDOException $e) {
                //     echo $sql . "<br>" . $e->getMessage();
                // }

                // $conn = null;

            ?>
            <?php
                // // //Creating a function
                // function practiceFunction(){   
                //     echo '<span style="color:teal;"> 4) Update Data In a MySQL Table Enter By User Using PDO. </span>'. "<br><br>";
                // }

                // practiceFunction();

                // $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students ORDER BY Roll_no";
                // $result = $conn->query($sql);

                // if ($result->num_rows > 0){
                //     echo "<table><tr><th><center>Roll no.</center></th><th><center>Name</center></th></th><th><center> Mobile No</center></th></tr>";
                //     // output data of each row
                //     while($row = $result->fetch_assoc()){
                //         echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["First_name"]. " " . $row["Last_name"]." " . "</td><td>" . $row["Mobile_no"]. "</td></tr>";
                //     }
                //     echo "</table>";
                // }    
                // else {
                //     echo "0 results";
                // }

                // $conn->close();
            ?>

            <!-- <form action="" method="POST">
                <div class="form-group mt-3">
                    <h6>Enter roll no and correct mobile no to update mobile no into database</h6>
                    <div class="row">
                        <div class="col-sm-12 mt-1">
                            <input type="text" class="form-control" placeholder="Enter Rollnumber" style="width:25vh;" name="rollNo">
                        </div>
                        <div class="col-sm-12 mt-1">
                            <input type="text" class="form-control" placeholder="Enter Mobileno" style="width:25vh;" name="mobileNo">
                        </div>
                        <div class="col-sm-12 mt-2">
                            <button button type="submit" class="btn btn-primary" name="submit">Update</button>
                        </div>
                    </div>
                </div>
            </form> -->


            <?php
                // if(isset($_POST['submit'])){
                //     try { 
                //         $rNumber = $_POST['rollNo'];
                //         $mNumber = $_POST['mobileNo'];

                //         $conn = new PDO('mysql:host=localhost; dbname=School_Record', 'root');
       
                //         // set the PDO error mode to exception
                //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //         $sql = "UPDATE Students SET Mobile_no='$mNumber' WHERE Roll_no='$rNumber'";

                //         // Prepare statement
                //         $stmt = $conn->prepare($sql);

                //         // execute the query
                //         $stmt->execute();

                //         // echo a message to say the UPDATE succeeded
                //         echo $stmt->rowCount() . " Records UPDATED successfully";
                //     } 
                //     catch(PDOException $e) {
                //         echo $sql . "<br>" . $e->getMessage();
                //     }
                //     $conn = null;
                // }
            ?>

            <?php
                // //Creating a function
                function practiceFunction(){   
                    echo '<span style="color:teal;"> 5) Limit Data Selections From a MySQL Database. </span>'. "<br><br>";
                }

                practiceFunction();
            ?>
            <form action="" method="POST">
                <div class="form-group mt-3">
                    <h6>Enter limit to show the data according to limit</h6>
                    <div class="row">
                        <div class="col-sm-12 mt-1">
                            <input type="text" class="form-control" placeholder="Enter Limit" style="width:25vh;" name="limitNo">
                        </div>
                        <div class="col-sm-12 mt-2">
                            <button button type="submit" class="btn btn-primary" name="submit">Show</button>
                        </div>
                    </div>
                </div>
            </form>


            <?php
                if(isset($_POST['submit'])){
                    $lNumber = $_POST['limitNo'];
                    
                    $sql = "SELECT * FROM Students LIMIT $lNumber";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0){
                        echo "<table><tr><th><center>Roll no.</center></th><th><center>Name</center></th></th><th><center> Mobile No</center></th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()){
                            echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["First_name"]. " " . $row["Last_name"]." " . "</td><td>" . $row["Mobile_no"]. "</td></tr>";
                        }
                        echo "</table>";
                    }    
                    else {
                        echo "0 results";
                    }
                }      
            ?>
        </div>
    </body>
</html>
 