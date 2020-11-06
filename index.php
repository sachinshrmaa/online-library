<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Welcome to MyLib</title>
    <style type="text/css">
    @media (min-width: 1200px){
        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 1350px;
        }
    }
    </style>
</head>
<body>

    <!-- Navbar Starts Here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">

        <a class="navbar-brand" href="./index.php">MyLib</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
             
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['username'] ?></a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
           
            </ul>
        </div>
        </div>
    </nav>

    <main class="container mb-5"> 
       
            <div class="jumbotron w-100">
                <h1 class="jumbotron-title">Welcome <?php echo $_SESSION['fName'] ?> </h1>
                <div class="row">
                <p class="lead col-8 mr-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever</p>
                
                <div class="col-12">
                    <a href="#" class="btn btn-dark">Get started</a> <a href="#" class="btn">action</a>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-4">
                <div class="card col-md-12">
                    <div class="text-left pt-2 pb-2">
                        <h3>Some title goes here</h1>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                        <a href="#" class="btn btn-primary">Get started</a>
                    </div>
                </div>
            </div> 
            <div class="col-md-8">
            <div class="card col-md-12">
                    <div class="text-left pt-2 pb-2">
                        <h3>Some title goes here</h1>
                        <hr>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                        <a href="#" class="btn btn-warning">Get started</a>
                    </div>
                </div>
                </div>
        </div>
    </main>
  
    <!-- Footer Starts Here -->
    <footer class="text-center border-top py-2">
        <small>&copy; 2020 MyLib</small>
    </footer>
    
</body>
</html> 