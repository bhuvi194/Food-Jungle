<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
      $name=$_POST['user'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cnfpassword=$_POST['cnfpassword'];

      $sql="insert into `registerdetail` (user,email,password,cnfpassword) values('$name','$email','$password','$cnfpassword')";
      $result=mysqli_query($conn,$sql);
      if($result){
          header('location: admin_panel1.php');
      }else{
          die(mysqli_error($conn));
      }
  }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/ce7baf26fa.js" crossorigin="anonymous"></script>

    <title>Update User Detail</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <h1 style="text-align: center; margin-bottom:20px; font-family: sans-serif;">Add new user</h1>
            <div class="form-group">
            <i class="register__icon fas fa-user"></i>
                <label>User Name</label>
                <input type="text" class="form-control" placeholder="User Name" name="user" autocomplete="off">
            </div>
            <div class="form-group">
            <i class="register__icon fas fa-user"></i>
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
            <i class="register__icon fas fa-lock"></i>
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
            </div>
            <div class="form-group">
            <i class="register__icon fas fa-lock"></i>
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="cnfpassword" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>