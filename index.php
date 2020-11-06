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
        <a class="navbar-brand" href="./index.php">MyLib</a>
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
    <?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
 
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
 
    

    <!-- Footer Starts Here -->
    <footer class="text-center border-top py-2">
        <small>&copy; 2020 MyLib</small>
    </footer>
    
</body>
</html>