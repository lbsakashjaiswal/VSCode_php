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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <title>Akash Training</title>
      <link rel="icon" href="/index/icon.JPG">
      <style>
         body {
         background : #f5f4f4;
         }
         table, td, th {  
         border: 1px solid #ddd;
         text-align: left;
         }

         table {
         border-collapse: collapse;
         width: 35%;
         }

         th, td {
         padding: 15px;
         }
         th {
         color : #212529;
         }
         td {
         color : #212529;
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
            // //  Practice topics  
            // echo '<h4 class="shadow p-3 mb-5 mt-5 mx-auto bg-white rounded" style="width:25vh;">Practice Topics</h4>';
            
            // // //Creating a function
            // function usingInterfaces()
            // {   echo    '<span style="color:teal;">
            //                     4) Insert data enter by the user into table using try/catch by POD.
            //             </span>'. "<br>";
            //     echo "<br>";
            // }
            
            // usingInterfaces();
            
            ?>
         <!-- <form action="" method="POST">
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
            </form> -->
         <!-- Using Php -->
         <?php
            // if(isset($_POST['submit'])){
            
            // $rNumber = $_POST['rollNo'];
            // $fName = $_POST['firstName'];
            // $lName = $_POST['lastName'];
            // $mNumber = $_POST['mobileNo'];
            
            
            // //Inserting value into database
            // $sql = "INSERT INTO Students SET Roll_No='$rNumber', First_name='$fName', Last_name='$lName', Mobile_no='$mNumber'";
            
            // if ($conn->query($sql) === TRUE) {
            //   echo "New record created successfully";
            // } 
            // else {
            //   echo "Error: " . $sql . "<br>" . $conn->error;
            // }
            
            // $conn->close();
            // }
            ?>
         <?php
            // if(isset($_POST['submit'])){
            //    try { 
            //       $rNumber = $_POST['rollNo'];
            //       $fName = $_POST['firstName'];
            //       $lName = $_POST['lastName'];
            //       $mNumber = $_POST['mobileNo'];
                  
            //       $conn = new PDO('mysql:host=localhost; dbname=School_Record', 'root');
            //       // set the PDO error mode to exception
            //       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
            //       // prepare sql and bind parameters
            //       $stmt = $conn->prepare("INSERT INTO Students (Roll_no, First_name, Last_name, Mobile_no)
            //       VALUES (:Roll_no, :First_name, :Last_name, :Mobile_no)");
            //       $stmt->bindParam(':Roll_no', $rollno);
            //       $stmt->bindParam(':First_name', $firstname);
            //       $stmt->bindParam(':Last_name', $lastname);
            //       $stmt->bindParam(':Mobile_no', $mobileno);
               
            //       // insert a row
            //       $rollno = $rNumber;
            //       $firstname = $fName;
            //       $lastname = $lName;
            //       $mobileno = $mNumber;
            //       $stmt->execute();
               
            //       echo "New records created successfully";
            //    }
            
            //    catch(PDOException $e) {
            //       echo "Error: " . $e->getMessage();
            //    }
            
            //    $conn = null;
            // }
            
            ?>
         <?php
            // //  Practice topics  
            // echo '<h4 class="shadow p-3 mb-5 mt-5 mx-auto bg-white rounded" style="width:25vh;">Practice Topics</h4>';
            
            // // //Creating a function
            // function usingInterfaces()
            // {   echo    '<span style="color:teal;">
            //                     5) Select and Order Data with MySQLi.
            //             </span>'. "<br>";
            //     echo "<br>";
            // }
            
            // usingInterfaces();
            
            // $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students ORDER BY Roll_no";
            // $result = $conn->query($sql);
            
            // if ($result->num_rows > 0) {
            // // output data of each row
            // while($row = $result->fetch_assoc()) {
            // echo "<br> Roll no : ". $row["Roll_no"]. " - Name: ". $row["First_name"]. " " . $row["Last_name"] . 
            // "<br> Mobile no : ". $row["Mobile_no"]. "<br>";
            // }
            // } else {
            // echo "0 results";
            // }
            
            // $conn->close();
            ?>
         <?php
         //  Practice topics  
            echo '<h4 class="shadow p-3 mb-5 mt-5 mx-auto bg-white rounded" style="width:25vh;">Practice Topics</h4>';
            
            // //Creating a function
            function usingInterfaces()
            {   echo    '<span style="color:teal;">
                                6) Select and Order Data print into table.
                        </span>'. "<br>";
                echo "<br>";
            }
            
            usingInterfaces();
            $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students ORDER BY Roll_no";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               echo "<table><tr><th><center>Roll no.</center></th><th><center>Name</center></th></th><th><center> Mobile No</center></th></tr>";
               // output data of each row
               while($row = $result->fetch_assoc()) {
                 echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["First_name"]. " " . $row["Last_name"]." " . "</td><td>" . $row["Mobile_no"]. "</td></tr>";
               }
               echo "</table>";
             } else {
               echo "0 results";
             }
             
             $conn->close();

         ?>
      </div>
   </body>
</html>