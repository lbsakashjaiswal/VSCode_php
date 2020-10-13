<!-- Php Link -->
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
<!-- HTML start -->
<!DOCTYPE html>
<html>
    <head>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- CSS link -->
        <link rel="stylesheet" href="index01styles.css">

        <!-- Titel -->
        <title>Akash Training</title>
        <link rel="icon" href="/index/icon.JPG">

        <!-- JavaScript -->
        <script type="text/javascript">
            function myFun() {
                var req = new XMLHttpRequest();
                req.open('GET','index01.html',true);
                req.send();

                req.onreadystatechange = function(){
                    if(req.readyState == 4 && req.status == 200){
                        document.getElementById('changeText').innerHTML = req.responseText;
                    }
                }
            }
        </script>
    </head>
    <body>

        <!-- NavBar -->
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand">
                <h4>Hello SM - Tech Family</h4>
            </a>
            <form class="form-inline">
                <h5 class="name-class">@AKJ</h5>
            </form>
        </nav>

        <!-- Div created for giving some sytles  -->
        <div class="text-class mt-5">
            <!-- PHP include -->
            <!-- <?php include 'index01C.php'; ?>     -->
        </div>

        <!-- PHP - AJAX -->
        <div class="text-class mt-4">
            <span class="practice-class"> 2) WAP to replace the text with another text using AJAX. </span> 
            <h4 class="mt-2 ml-4 " id="changeText";>Hello friends</h4> 
            <button class="btn btn-outline-secondary mt-2 ml-4" onclick="myFun()">Click</button>   
        </div>
        
    </body>
</html>
