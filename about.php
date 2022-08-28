<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/about.css">
  <!-- for navbar css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- for toggle menu of nav bar -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <!-- For toggle menu of nav bar -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- for footer logo -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- style -->
  <?php  include 'style.php'  ?>
  <title>Food-Jungle-AboutUs</title>

  <!-- navbar -->
  <?php   include 'nav.php' ?>

</head>
<html lang="en">



<body style="background-color:snow;">

  

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



  <div class="aboutus">
    <div class="story" style="text-align:center; margin:100px;">
      <h3 style="color: green;">Our Story</h3>
      <p>Food Jungle was founded by Pratap & Bhanwar during graduation period. In 2016 they built this website with an aim to provide best and delicious food recipes.
        So many people loved their work & passion about providing best food. Now it's the most loved and visited website on google.
      </p>
    </div>
  </div>

<!--- for footer --->
<?php   include 'footer.php' ?>

</body>
</html>
