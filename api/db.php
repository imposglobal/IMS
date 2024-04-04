<?php
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');


   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'doodlueg_ims');
   define('DB_PASSWORD', 'ims@2023');
   define('DB_DATABASE', 'doodlueg_ims');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  
   
?>