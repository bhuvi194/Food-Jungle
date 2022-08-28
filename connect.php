<?php
   $dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbName = "userinfo";

   $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

   if(mysqli_connect_error()){
      echo"Cannot connect to database";
      exit();
   }

   ?>