<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">


    <title>Create new Account - My Lib</title>
</head>
<body> 
    <main>
        <!-- User Signup Form Starts Here -->
        <div class="container py-5">
            <div class="col-8 m-auto">
            
                <h3 class="mb-1">Create new Account</h3>
                <p class="text-muted">Fill up the following fields and get going.</p>
                <hr>
                <?php
                    require('config.php');
                    // When form submitted, insert values into the database.
                    if (isset($_REQUEST['username'])) {
                        // removes backslashes
                        $username = stripslashes($_REQUEST['username']);
                        //escapes special characters in a string
                        $username = mysqli_real_escape_string($con, $username);
                        $email    = stripslashes($_REQUEST['email']);
                        $email    = mysqli_real_escape_string($con, $email);

                        $fname = stripslashes($_REQUEST['fName']);
                        $fname = mysqli_real_escape_string($con, $fname);

                        $lname = stripslashes($_REQUEST['lName']);
                        $lname = mysqli_real_escape_string($con, $lname);
                        
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($con, $password);
                        $create_datetime = date("Y-m-d H:i:s");
                        $query    = "INSERT into `users` (username, FirstName, LastName, password, email, create_datetime)
                                    VALUES ('$username', '$fname','$lname', '" . md5($password) . "', '$email', '$create_datetime')";
                        $result   = mysqli_query($con, $query);
                        if ($result) {
                            echo "<div class='form'>
                                  <div class='alert alert-success'>You are registered successfully. Proceed to login</div><br/>
                                  <p class='link'>Click here to <a href='login.php'>Login</a>.</p>
                                  </div>";
                        } else {
                            echo "<div class='form'>
                                  <div class='alert alert-danger'>Required fields are missing. Please try again.</div><br/>
                                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                                  </div>";
                        }
                    } else {
                ?>
                <form class="form-controls" method="POST">
                <div class="row mb-3">
                <div class="col-md-6">
                <small class="text-muted ml-1 mb-2">First Name *</small>
                            <input type="text" name="fName" class="form-control" placeholder="Enter First Name"> 
                </div>
               
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Last Name *</small>
                            <input type="text" name="lName" class="form-control" placeholder="Enter Last Name"> 
                        </div>  
                    </div>

                    <div class="row mb-3">
                    <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Username *</small>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username "> 
                        </div>  
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Email *</small>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email"> 
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Password *</small>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password"> 
                        </div>  
                   
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2"> Confirm Password *</small>
                            <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password"> 
                        </div>  
                    </div>


                    <div class="row mb-2">
                        <div class="col-md-12">
                        <hr>
                            <input type="submit" value="Register" class="btn btn-primary px-5"> 
                        </div>  
                    </div>

                    <small>Already have an account? <a href="./login.php"> Log In </a> instead.</small> <br>

                    <small>By using the MyLib you agree our <a href="#">Terms and Conditions</a>.</small>
                    
                    
                </form>
                  
                <?php
                    }
                ?>
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
