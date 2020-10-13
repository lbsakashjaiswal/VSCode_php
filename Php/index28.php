<?php
   include "connection.php";
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <title>Akash Training</title>
      <link rel="icon" href="/index/icon.JPG">
      <style>
         body {
         background : #f5f4f4;
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
      <div style="color: crimson; margin-left:15px;">
         <?php
            //  Practice topics  
            echo '<h4 class="shadow p-3 mb-5 mt-5 mx-auto bg-white rounded" style="width:25vh;">Practice Topics</h4>';
            
            // //Creating a function
            // function usingInterfaces()
            // {   echo    '<span style="color:teal;">
            //                     1) Create a table using MySQLi.
            //             </span>'. "<br>";
            //     echo "<br>";
            // }
            
            // usingInterfaces();
            
            // //Inserting value into database
            // //$sql = "INSERT INTO Students (Roll_no, First_name, Last_name, Mobile_no) VALUES ('1', 'Akash', 'Kumar Jaiswal', '8960991211')";
            // // $sql = "INSERT INTO Students SET First_name='Ratnesh',Last_name='Jaiswal', Mobile_no='8896039440'";
            
            
            
            // if ($conn->query($sql) === TRUE) {
            //   echo "New record created successfully";
            // } else {
            //   echo "Error: " . $sql . "<br>" . $conn->error;
            // }
            
            // $conn->close();
            ?>
         <?php
            //Creating a function
            function practiceMySQLi()
            {   echo    '<span style="color:teal;">
                                2) Create a form, take an input and store a data into database using MySQLi.
                        </span>'. "<br>";
                echo "<br>";
            }
            
            practiceMySQLi();
            ?>
         <form action="" method="POST">
            <div class="form-group">
               <h5>Please enter your details</h5>
               <div class="row">
                  <div class="col-sm-12">
                     <input type="text" class="form-control" placeholder="Enter Rollnumber" style="width:25vh;" name="rollNo">
                  </div>
                  <div class="col-sm-12 mt-2">
                     <input type="text" class="form-control" placeholder="Enter Firstname" style="width:25vh;" name="firstName">
                  </div>
                  <div class="col-sm-12 mt-2">
                     <input type="text" class="form-control" placeholder="Enter Lastname" style="width:25vh;" name="lastName">
                  </div>
                  <br>
                  <div class="col-sm-12 mt-2">
                     <input type="text" class="form-control" placeholder="Enter Contactnumber" style="width:25vh;" name="mobileNo">
                  </div>
                  <div class="col-sm-12 mt-2">
                     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>
               </div>
            </form>
         <!-- Using Php -->
         <?php
            if(isset($_POST['submit'])){
            
            $rNumber = $_POST['rollNo'];
            $fName = $_POST['firstName'];
            $lName = $_POST['lastName'];
            $mNumber = $_POST['mobileNo'];
            
            
            //Inserting value into database
            $sql = "INSERT INTO Students SET Roll_No='$rNumber', First_name='$fName', Last_name='$lName', Mobile_no='$mNumber'";
            
            if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
            } 
            else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
            }
            ?>
         <?php
            // //Creating a function
            // function practiceMySQLi()
            // {   echo    '<span style="color:teal;">
            //                     3) Selects the Roll no, firstname, lastname and mobile no columns from the Students table 
            //                        and displays it on the page using MySQLi.
            //             </span>'. "<br>";
            //     echo "<br>";
            // }
            
            // practiceMySQLi();

            // $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students";
            // $result = $conn->query($sql);
            
            
            // if ($result->num_rows > 0) {
            // // output data of each row
            // while($row = $result->fetch_assoc()) {
            //   echo "<br> Roll No: ". $row["Roll_no"]. " - Name: ". $row["First_name"]. " " . $row["Last_name"] 
            //       ."<br>"." Mobile No : " . $row["Mobile_no"] . "<br>";
            // }
            // } else {
            // echo "0 results";
            // }
            
            // $conn->close();
            ?>
         <?php
            // //Creating a function
            // function practiceMySQLi()
            // {   echo    '<span style="color:teal;">
            //                     4) Selects the Rollno, firstname and lastname columns from the Students table where the 
            //                     lastname is "Jaiswal" and displays it on the page using MySQLi.
            //             </span>'. "<br>";
            //     echo "<br>";
            // }
            
            // practiceMySQLi();

            // $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students WHERE Last_name='Jaiswal'";
            // $result = $conn->query($sql);

            // if ($result->num_rows > 0) {
            //  // output data of each row
            //    while($row = $result->fetch_assoc()) {
            //       echo "Roll No: ". $row["Roll_no"]. " - Name: ". $row["First_name"]. " " . $row["Last_name"] 
            //       ."<br>"." Mobile No : " . $row["Mobile_no"] . "<br>";
            //    }
            // } else {
            //       echo "0 results";
            //    }
            // $conn->close();
         ?>

         <?php
            //Creating a function
            // function practiceMySQLi()
            // {   echo    '<span style="color:teal;">
            //                     5) Selects the Rollno, firstname ,lastname and mobile no columns from the Students table where the 
            //                        user enter there preference and displays it on the page using MySQLi.
            //             </span>'. "<br>";
            //     echo "<br>";
            // }
            
            // practiceMySQLi();
         ?>
         <!-- <form action="" method="POST">
            <div class="form-group">
               <h5>Please enter last name</h5>
               <div class="row">
                  <div class="col-sm-12 mt-2">
                     <input type="text" class="form-control" placeholder="Enter Lastname" style="width:25vh;" name="lastName">
                  </div>
                  <div class="col-sm-12 mt-2">
                     <button type="submit" class="btn btn-outline-secondary" name="submit">Filter</button>
                  </div>
               </div>
            </div>
         </form> -->
         <?php
            // if(isset($_POST['submit'])){
            
            // $lName = $_POST['lastName'];
            
            // $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students WHERE Last_name='$lName'";
            // $result = $conn->query($sql);

            // if ($result->num_rows > 0) {
            //  // output data of each row
            //    while($row = $result->fetch_assoc()) {
            //       echo "Roll No: ". $row["Roll_no"]. " - Name: ". $row["First_name"]. " " . $row["Last_name"] 
            //       ."<br>"." Mobile No : " . $row["Mobile_no"] . "<br>";
            //    }
            // } else {
            //       echo "0 results";
            //    }
            // $conn->close();
            // }
         ?>
      </div>
   </body>
</html>
