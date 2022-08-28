<?php
  include 'connect.php';
  $id=$_GET['updateid'];
  $sql="Select * from `registerdetail` where id=$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['user'];
  $email=$row['email'];
  $password=$row['password'];
  $cnfpassword=$row['cnfpassword'];

  if(isset($_POST['submit'])){
      $name=$_POST['user'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cnfpassword=$_POST['cnfpassword'];

      $sql="UPDATE `registerdetail` SET id=$id,user='$name',email='$email',password='$password',cnfpassword='$cnfpassword' WHERE id=$id";
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


    <title>Update Register Detail</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <i class="register__icon fas fa-user"></i>
                <label>User Name</label>
                <input type="text" class="form-control" placeholder="User Name" name="user" autocomplete="off" value=<?php echo $name;?>> 
            </div>
            <div class="form-group">
                <i class="register__icon fas fa-user"></i>
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Email" name="email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <i class="register__icon fas fa-lock"></i>
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off" value=<?php echo $password;?>>
            </div>
            <div class="form-group">
                <i class="register__icon fas fa-lock"></i>
                <label>Confirm Password</label>
                <input type="password" class="form-control" placeholder="Confirm Password" name="cnfpassword" autocomplete="off" value=<?php echo $cnfpassword;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>


</body>

</html>