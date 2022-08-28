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
  <!-- style -->
  <?php  include 'style.php'  ?>
  <title>Food-Jungle</title>
  <!-- navbar -->
  <?php   include 'nav.php' ?>
</head>

<body style="background-color:snow;">
  <div class="content" style="margin-left: 100px; margin-right:100px;">
      <div class="page">
          <div class="content-main">
            <h1 style="margin-bottom: 20px; font-style: italic; font-weight: bold;"> Naan </h1>
            <div style="width: 40%; float: right; margin:0 0 20px 20px;">
            <img class="recipe-img" src="images/naan.jpg" alt="Naan" style="width: 100%; box-shadow: 0 0 1px 0 #000;">
            <div class="clear" style="height:10px;"></div>
            </div>
            <h3 style="font-style: italic; font-weight: bold;">Details</h3>
            <table style="width: 54%; margin-bottom: 20px;">
            <tbody>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Cooking Time: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 1:30 </td>
            </tr>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Calories: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 336 </td>
            </tr>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Carbs: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 50.1 </td>
            </tr>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Fat: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 12.5 </td>
            </tr>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Protein: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 8.9 </td>
            </tr>
            </tbody>
          </table>
          <h3 style="font-style: italic; font-weight: bold;">Ingredients</h3>
          <p style="margin-bottom: 20px;">
             "Garlic"
             <br>
             "Milk"
             <br>
             "Butter"
             <br>
             "Yoghurt"
             <br>
             "Flour"
             <br>
             "Yeast"
             <br>
             "Egg"
             <br>
             "Baking Powder"
             <br>
             "Salt"
             <br>
             "Plain Flour"
             <br>
            </p>
            
            <h3 style="font-style: italic; font-weight: bold;">Directions</h3>
            <p style="margin-bottom: 10px;">
            <ul>
            <li>mix all ingredients together in a large bowl.</li>
            <br>
            <li>Bring it all together into a dough.</li>
            <br>
            <li>form into a ball of dough, then knead briefly.</li>
            <br>
            <li>Divide the dough into small balls, then roll each one into rounds or naan shapes.</li>
            <br>
            <li>combine well forming a soft dough. do not knead the dough.</li>
            <br>
            <li>Roll it as thin as you can, but ensure that it doesn't stick by flouring the counter.</li>
            <br>
            <li>Get a frying pan really hot, then carefully place the dough into it. Cook for a few minutes until air bubbles appear.</li>
            <br>
            <li>Flip and cook for a few minutes on the other side.</li>
            <br>
            </ul>
          </p>
          </div>
      </div>
  </div>

  <!--- for footer --->
  <?php   include 'footer.php' ?>
  
</body>
</html>
