<!-- HTML start -->
<!DOCTYPE html>
<html>
   <head>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
         integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <!-- CSS link -->
      <link rel="stylesheet" href="/index/akash_MySQL/09_oct_20/AJAX/style.css">
      <!-- Titel -->
      <title>Akash Training</title>
      <link rel="icon" href="/index/icon.JPG">
      <!-- JavaScript -->
      <script type="text/javascript">
         function myfun(data){
             var req = new XMLHttpRequest();
             req.open("GET","http://192.168.64.2/index/akash_MySQL/09_oct_20/AJAX/response.php?sendData="+data,true);
             req.send();
         
             req.onreadystatechange=function(){
                 if(req.readyState == 4 && req.status == 200){
                     document.getElementById('city').innerHTML = req.responseText;
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
         <h4 class="practice-class"> # WAP to make a dropdown and change city according to state using AJAX. </h4>
      </div>
     
      <!-- Creating a form -->
      <div class="row ml-5">
         <div class="col-lg-6">
            <br>
            <h3 class="text-success text-center">AJAX Asynchronous JavaScript And XML </h3>
           
            <!-- Creating dropdown -->
            <form class="mt-5">
               <!-- Div for choose state -->
               <div class="form-group">
                  <label> Choose State:</label>
                  <select class="form-control" onchange="myfun(this.value)">
                     <option> select state</option>
                     <option> Delhi</option>
                     <option> Haryana</option>
                     <option> Punjab</option>
                     <option> UP</option>
                  </select>
               </div>
               <!-- Div for choose District -->
               <div class="form-group">
                  <label> Choose city:</label>
                  <select class="form-control" id="city">
                     <option> select city</option>
                  </select>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>

