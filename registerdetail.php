<?php
include_once 'connect.php';

$user = mysqli_real_escape_string($conn, $_POST['user']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cnfpassword = mysqli_real_escape_string($conn, $_POST['cnfpassword']);


if (isset($_POST['register']))
{
    if ($password == $cnfpassword){
        $sql= "INSERT into  registerdetail (user, email, password, cnfpassword) VALUES ('$user', '$email', '$password', '$cnfpassword');";
          $result = mysqli_query($conn, $sql);
          header('location: login.php?success');
          exit();
    }
    else{
        header('location: login.php?register=failed');
     exit();

        
    }
          
          
}
else {
     header('location: login.php?register=failed2');
     exit();

}
?>