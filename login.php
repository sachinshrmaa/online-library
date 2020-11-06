<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="./assets/css/main.css">

    <title>My Lib</title>
</head>
<body>

    <!-- Navbar Starts Here -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MyLib</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">Log In</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="px-3 btn btn-primary" href="./signup.php">Sign Up</a>
                </li>
           
            </ul>
        </div>
    </nav>


    <main>

        <!-- User Log In Form Starts Here -->
        <div class="container py-5">
            <div class="col-8 m-auto">
            
                <h3 class="mb-4">Welcome back! Log In</h3>

                <form class="form-controls">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Email *</small>
                            <input type="email" class="form-control" placeholder="Enter Email"> 
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Password *</small>
                            <input type="password" class="form-control" placeholder="Enter Password"> 
                        </div>  
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <input type="submit" value="Log In" class="btn btn-primary px-5"> 
                        </div>  
                    </div>

                    <small><a href="#">Forgot your Password</a></small> <br>

                    <small>New to MyLib? <a href="./Signup.html"> craete an account </a> instead.</small> <br>

                    <small>By using the MyLib you agree out <a href="#">terma and conditions</a></small>
                    
                    
                </form>
                
            </div>
        </div>
        
    </main>
    

    <!-- Footer Starts Here -->
    <footer class="text-center border-top py-2">
        <small>&copy; 2020 MyLib</small>
    </footer>
    

    <script src="./assets/js/bootstrap.bundle.js"></script>


</body>
</html>