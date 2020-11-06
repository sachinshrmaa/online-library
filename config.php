<?php
   define('DB_SERVER', 'localhost:3036');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootpassword');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>