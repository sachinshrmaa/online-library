<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Sign In - My Lib</title>
</head>
<body> 
    <main>
 
        <div class="container py-5">
            <div class="col-8 m-auto"> 
                <h3 class="mb-4">Welcome back! Log In</h3>
                <?php
                    require('config.php');
                    session_start();
                    // When form submitted, check and create user session.
                    if (isset($_POST['email'])) {
                        $email = stripslashes($_REQUEST['email']);    // removes backslashes
                        $email = mysqli_real_escape_string($con, $email);
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($con, $password);
                        // Check user is exist in the database
                        $query    = "SELECT * FROM `users` WHERE email='$email'
                                    AND password='" . md5($password) . "'";
                        $result = mysqli_query($con, $query) or die(mysql_error());
                        $rows = mysqli_num_rows($result);
                        if ($rows == 1) {
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                   
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['fName'] = $row['FirstName'];           
                            header("Location: index.php");
                        } else {
                            echo "<div class='form'>
                                <div class='alert alert-danger'>Incorrect Email/password. Please try again</div><br/>
                                <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                                </div>";
                        }
                    } else {
                ?>
                <form class="form-controls" method="POST" validate>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Email *</small>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" /> 
                        </div>  
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <small class="text-muted ml-1 mb-2">Password *</small>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" /> 
                        </div>  
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <input type="submit" value="Log In" class="btn btn-primary px-5" /> 
                        </div>  
                    </div>

                    <small><a href="#">Forgot your Password</a></small> <br> 
                    <small>New to MyLib? <a href="./Signup.php"> Create an account </a> instead.</small> <br>
                    <small>By using the MyLib you agree our <a href="#">Terms and Conditions</a></small>
                     
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