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
            <h1 style="margin-bottom: 20px; font-style: italic; font-weight: bold;"> Vada Pav </h1>
            <div style="width: 40%; float: right; margin:0 0 20px 20px;">
            <img class="recipe-img" src="images/vada-pav.jfif" alt="Vada Pav" style="width: 100%; box-shadow: 0 0 1px 0 #000;">
            <div class="clear" style="height:10px;"></div>
            </div>
            <h3 style="font-style: italic; font-weight: bold;">Details</h3>
            <table style="width: 54%; margin-bottom: 20px;">
            <tbody>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Cooking Time: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 55 </td>
            </tr>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Calories: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 136 </td>
            </tr>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Carbs: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 40.17 </td>
            </tr>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Fat: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 11.92 </td>
            </tr>
            <tr style="border-bottom: 1px dotted #ccc;">
            <td style="width: 50%; font-weight: 900;">Protein: </td>
            <td style="width: 10%;"></td>
            <td style="width: 40%; text-align: right;"> 9.17 </td>
            </tr>
            </tbody>
          </table>
          <h3 style="font-style: italic; font-weight: bold;">Ingredients</h3>
          <p style="margin-bottom: 20px;">
             "Potato"
             <br>
             "Garlic"
             <br>
             "Gram Flour"
             <br>
             "Coriander"
             <br>
             "Ginger"
             <br>
             "Chili Pepper"
             <br>
             "Chili Powder"
             <br>
             "Salt"
             <br>
             "Asafoetida"
             <br>
             "Curry Tree"
             <br>
             "Cumin"
             <br>
             "Turmeric Powder"
             <br>
             "Lemon"
             <br>
            </p>
            
            <h3 style="font-style: italic; font-weight: bold;">Directions</h3>
            <p style="margin-bottom: 10px;">
            <ul>
            <li>firstly, take ball sized aloo mixture and dip in besan batter and coat well.</li>
            <br>
            <li>deep fry in hot oil stirring occasionally.</li>
            <br>
            <li>now slit the ladi pav and spread 1 tsp green chutney, ½ tsp tamarind chutney and ½ tsp dry garlic chutney.</li>
            <br>
            <li>place the prepared vada in center of pav, chura and fried chilli.</li>
            <br>
            <li>finally, press the vada pav and serve immediately.</li>
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
