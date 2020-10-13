<?php
   if(isset($_POST["uploadBtn"])){
        //print the file details
        // $file = $_FILES['fileToUpload'];
        // print_r($file).'<br>';
        // // store the file name
        // $file_name = $_FILES['fileToUpload']['name'];
        // //store the temp location
        // $file_temp_loc = $_FILES['fileToUpload']['tmp_name'];
        // print $file_temp_loc;
        // $file_store = "/upload/".$file_name;
   
   
        // if (move_uploaded_file($file_temp_loc, $file_store)){
        //     echo "The file has been uploaded.";
        // } 
        // else{     
        //     echo "Sorry, there was an error uploading your file.";
        // }   

        $target_dir = "akash_MySQL/08_oct_20/upload";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        print $target_file;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // print $imageFileType;

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

    }
?>
