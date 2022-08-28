<?php
require 'connect.php';
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($conn,$_POST['user']);
  $pwd = mysqli_real_escape_string($conn,$_POST['password']);
  $sql = "SELECT * FROM registerdetail WHERE user='$email';";
  $results = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($results);
  if ($resultCheck> 0){
  $row = mysqli_fetch_assoc($results);
  if($pwd == $row['password'])
  {
    session_start();
    $_SESSION['id'] = $row['id'];
    
    header('location: index.php?log=success');
    echo "<script>console.log('Debug Objects password success' );</script>";
    exit();
  }
  else
  {
    header('location: login.php?log=failed');
    echo"<script>alert('Invalid Admin Name or Password');</script>";
    exit();
  }

  }
  else{
    header('location: login.php?log=failed_Resultcheck');
    exit();
  }
  
}
else{
    header('location: login.php?log=failed_loginData');
    exit();
}
