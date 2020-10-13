<!-- HTML start -->
<!DOCTYPE html>
<html>
   <head>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
         integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <!-- CSS link -->
      <link rel="stylesheet" href="/index/akash_MySQL/10_oct_20/style.css">
      <!-- Titel -->
      <title>Akash Training</title>
      <link rel="icon" href="/index/icon.JPG">
      <!-- JavaScript -->
      <script src="/index/akash_MySQL/10_oct_20/ajaxscript.js"></script>
   
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
         <h4 class="practice-class"> # WAP to insert data into database using AJAX. </h4>
      </div>
      <!-- Creating a form -->
      <div class="row ml-5">
         <div class="col-lg-6">
            <br>
            <h3 class="text-success text-center">AJAX Asynchronous JavaScript And XML </h3>
            <!-- Creating dropdown -->
            <form class="mt-5">
               <!-- Div for user name -->
               <div class="form-group">
                  <label> Full Name: </label>
                  <input type="text" id="fullname" class="form-control">
               </div>
               <!-- Div for password -->
               <div class="form-group">
                  <label> Address: </label>
                  <input type="text" id="address" class="form-control">
               </div>
               <!-- Submit button -->
               <div class="form-group">
                  <button type="button" class="btn btn-primary" onclick="Show_Data()">Submit</button>
               </div>
            </form>
           
            <!-- h5 for show data save or not -->
            <h5 id="response"></h5>
         </div>
      </div>
   </body>
</html>
