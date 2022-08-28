<?php
include_once 'connect.php';

$user = mysqli_real_escape_string($conn, $_POST['user']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$comments = mysqli_real_escape_string($conn, $_POST['comments']);


if (isset($_POST['submit']))
{
          $sql= "INSERT into  contactus (user, email, mobile, comments) VALUES ('$user', '$email', '$mobile', '$comments');";
          $result = mysqli_query($conn, $sql);
          header('location: index.php?contactus=success');  
          echo"Query submitted successfully";   
          exit();
          
}
else {
     header('location: index.php?contactus=failed');
     echo"<script>alert('Information is not submitted');</script>";
     exit();

}
?>
 