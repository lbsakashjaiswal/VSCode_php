<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "School_Record";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  if(!$conn){
    echo "connection not stabliesed please check your database connection";
    die;
  }
?>