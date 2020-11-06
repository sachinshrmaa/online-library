<?php

extract($_POST);
include("database.php");
$rs=mysqli_query($conn,"select * from user where login='$user_id'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into user(user_id,login,pass,name,email) values('$user_id','$login','$pass','$name','$email')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $user_id Created Sucessfully</div>";


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

        <!-- User Signup Form Starts Here -->
        <div class="container py-5">
            <div class="col-8 m-auto">
            
                <h3 class="mb-4">Create Your New Account</h3>

                <form class="form-controls">

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Email *</small>
                            <input type="text " class="form-control" placeholder="Enter Email" name="email"> 
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Password *</small>
                            <input type="password" class="form-control" placeholder="Enter Password" name="pass1"> 
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2"> Confirm Password *</small>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="pass2"> 
                        </div>  
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <input type="submit" value="Register" class="btn btn-primary px-5"> 
                        </div>  
                    </div>

                    <small>Already have an account? <a href="./login.html"> Log In </a> instead.</small> <br>

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