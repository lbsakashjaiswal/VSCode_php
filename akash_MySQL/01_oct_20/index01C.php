<?php
    //Creating a function
    function practiceFunction(){   
        echo '<span class="practice-class"> 1) Select and Order Data print into table. </span>'. "<br><br>";
    }

    practiceFunction();     //practice function calling 
        
    $sql = "SELECT Roll_no, First_name, Last_name, Mobile_no FROM Students ORDER BY Roll_no";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        echo "<table><tr><th><center>Roll no.</center></th><th><center>Name</center></th></th>
        <th><center> Mobile No</center></th></tr>";
        
        // output data of each row
        while($row = $result->fetch_assoc()){
            echo "<tr><td>" . $row["Roll_no"]. "</td><td>" . $row["First_name"]. " " . $row["Last_name"]." "    
            . "</td><td>" . $row["Mobile_no"]. "</td></tr>";
        }
        echo "</table>";
    } 
    else {
        echo "0 results";
    }

    $conn->close();

?>
