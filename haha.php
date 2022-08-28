<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!-- for navbar css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!--
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
-->
  <!-- for toggle menu of nav bar -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

  <!-- For toggle menu of nav bar -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   -->
  <!-- for footer logo -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
  <!-- style -->
  <?php  include 'style.php'  ?>

  <title>Food-Jungle</title>
</head>
<body style="background-color:snow;">

  <!-- navbar -->
  <?php   include 'nav.php' ?>

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
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile no.</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comments"></textarea>
        </div>
        <p class="link">Don't have an account?<br>
          <a href="register.php">Register Here</a>
        </p>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>

  <!-- footer -->
  <section class="footer">
    <div class="container">
      <div class="footer__content">
        <p class="mb-0">
        <h3>copyright © 2022 FoodJungle</h3>
        </p>

        <ul class="social__media">
          <li><a href="https://www.facebook.com/bhanwarprajapati.com"><i class="fa fa-facebook"
                aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
</body>

</html>