<?php

include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['user'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $comments=$_POST['comments'];

  $sql="INSERT INTO `contactus`(`user`, `email`, `mobile`, `comments`) VALUES ('$name','$email','$mobile','$comments')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "data inserted succeffully";
  }
  else{
    die(mysqli_error($conn));
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!-- for navbar css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- for toggle menu of nav bar -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <!-- For toggle menu of nav bar -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- for footer logo -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://kit.fontawesome.com/ce7baf26fa.js" crossorigin="anonymous"></script>


  <!-- style -->
  <?php  include 'style.php'  ?>
  <title>Food-Jungle</title>

  <!-- navbar -->
  <?php   include 'nav.php' ?>

</head>
<body style="background-color:snow;">

  <!-- carousel -->
  <!-- Indicators -->
  <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div id="demo" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/photo1.jpg" alt="Masala-Dosa">
      </div>
      <div class="carousel-item">
        <img src="images/photo2.jpg" alt="Soup">
      </div>
      <div class="carousel-item">
        <img src="images/photo3.jpg" alt="Butter-Nan">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <!-- about page -->
  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">About Us</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/aboutimage.jpg" alt="" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">We are Food Jungle.</h2>
          <p class="py-3">Welcome to our Food Jungle website; We are here to provide the best delicious food
            recipes..
            Food Jungle is the ultimate food destination. We’re the go-to foodie friend for all your culinary
            needs.

            Take a look through different recipes on our website, where you’ll also find all the information you need
            about your favourite food. Or, for quick tips and inspirational videos, follow us on Facebook, Instagram,
            and Twitter.
          </p>
          <a href="about.php" class="btn btn-success"> check more </a>
        </div>
      </div>

    </div>
  </section>

  <!-- contact page -->
  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center">Contact Us</h1>
    </div>

    <div class="w-50 m-auto">
      <form action="contact.php" method="post" id="submit">
        <div class="form-group">
        <i class="register__icon fas fa-user"></i>
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <i class="register__icon fas fa-user"></i>
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <i class="register__icon fas fa-mobile"></i>
          <label>Mobile no.</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <i class="register__icon fas fa-comment"></i>
          <label>Comments</label>
          <textarea class="form-control" name="comments" autocomplete="off"></textarea>
        </div>
        <p class="link">Don't have an account?<br>
          <a href="login.php">Register Here</a>
        </p>
        <button type="submit"name="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>

  <!--- for footer --->
  <?php   include 'footer.php' ?>

</body>
</html>