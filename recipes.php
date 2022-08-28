<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/recipes.css">

  <!-- style -->
  <?php  include 'style.php' ?>
  
  <style>
  .responsive{
    width: 100%;
    max-width: 1915px;
    height: 850px;
    }

    
    .header {
  padding: 20px;
  text-align: center;
  background: #DCDCDC;
  color: white;
  font-size: 30px;
  border-radius:10px;
}

.home-section{
      padding:20px;
      font-family: arial;
    }

.cards{
  display : flex;
  flex-direction : row;
  margin-left:80px;
  flex-wrap: wrap;
    gap: 90px;
}

.latest-recipe-cards{
  width: 25%;
  
  background-color:#F0F8FF;
  border-radius: 10px;
  margin-top: 20px;
}

.latest-recipe-cards:hover{
  box-shadow: 2px 2px 10px black;
}

.image img{
  width: 100%; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
}

.title{
  text-align: center;
  padding: 5px;
}

.description{
  padding: 5px;
  text-align: center;
}

.btn{
  margin-top: 30px;
  margin-bottom: 30px;
  border: 1px solid black;
  padding: 5px;
  border-radius: 5px;
  cursor: pointer;
}

.btn:hover{
  background-color: grey;
  color: green;
  transition: .5s;  
}

.header1{
  padding: 20px;
  text-align: center;
  background: #D8BFD8;
  color: white;
  font-size: 30px;
  margin-top:20px;
  border-radius:10px;
}

.header2{
  padding: 20px;
  text-align: center;
  background: #A9A9A9;
  color: white;
  font-size: 30px;
  margin-top:20px;
  border-radius:10px;
}

.header3{
  padding: 20px;
  text-align: center;
  background: #87CEFA;
  color: white;
  font-size: 30px;
  margin-top:20px;
  border-radius:10px;
}


.header4{
  padding: 20px;
  text-align: center;
  background: #DB7093;
  color: white;
  font-size: 30px;
  margin-top:20px;
  border-radius:10px;
}

.search-recipe{
  text-align: center;
  margin-top: 30px;
}
  </style>

<?php  include 'style.php' ?>

  <title>Food-Jungle-Recipes</title>
</head>


<body style="background-color:snow;">

  <!-- navbar -->
  <?php   include 'nav.php' ?>
  

  <div class="home">
    <div id="wrapper">
      <img src="images/homepageimage.jpg" alt="homeimage" class="responsive" width="390" height="25">
  
  <div id="textbox">
    <div id="text">
      <h2>Let's cook what you like</h2>
      <p>
        You don't need a silver fork to eat good food.
      </p>
    </div>
  </div>
  </div> 

  <section class="home-section">
    <!-- latest recipe -->
  <div class="header">
  <h1>Our Latest Recipes 😊</h1>
  </div> 
  <!-- cards -->
  <div class="cards">
  <div class="latest-recipe-cards">
     <div class="image">
<img src="images/chicken_biryani.jpg" alt="chicken_biryani" width="300" height="300">
     </div>
<div class="title">
  <h1>Chicken Biryani</h1>
</div>
<div class="description">
  <p>Chicken Biryani is a savory chicken and rice dish that includes layers of chicken, rice, and aromatics that are steamed together.</p>
<a href="chicken-biryani.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/curry.jpg" alt="Curry" width="300" height="300">
     </div>
<div class="title">
  <h1>Curry</h1>
</div>
<div class="description">
  <p> curry is an Indian gravy or sauce that is used in tandem with meat, tofu, or vegetables. </p>
<a href="curry.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/matar-paneer.jpg" alt="matar-paneer" width="300" height="300">
     </div>
<div class="title">
  <h1>Matar Paneer</h1>
</div>
<div class="description">
  <p> Matar paneer is consisting of peas and paneer in a tomato based sauce, spiced with garam masala.</p>
<a href="matar_paneer.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>
 </div>

<!-- sweet dish -->
 <div class="header1">
  <h1> Sweet Dishes 🍰</h1>
  </div> 
  <!-- cards -->
  <div class="cards">
  <div class="latest-recipe-cards">
     <div class="image">
<img src="images/gulab-jamun.jpg" alt="gulab-jamun" width="300" height="300">
     </div>
<div class="title">
  <h1>Gulab Jamun</h1>
</div>
<div class="description">
  <p>Gulab jamun is an Indian dessert of fried dough balls that are soaked in a sweet, sticky sugar syrup.</p>
<a href="gulab_jamun.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/ghewar.jpg" alt="ghewar" width="300" height="300">
     </div>
<div class="title">
  <h1>Ghewar</h1>
</div>
<div class="description">
  <p> Ghevar is a Rajasthani cuisine disc-shaped sweet made from ghee, flour, and sugar syrup. </p>
<a href="ghewar.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/jalebi.jpeg" alt="jalebi" width="300" height="300">
     </div>
<div class="title">
  <h1>Jalebi</h1>
</div>
<div class="description">
  <p>The south Asian variety is made by deep-frying maida flour batter in pretzel or circular shapes, which are then soaked in sugar syrup. </p>
<a href="jalebi.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>
 </div>


 <!-- breakfast -->
 <div class="header2">
  <h1>Delicious Breakfast Recipes</h1>
  </div> 
  <!-- cards -->
  <div class="cards">
  <div class="latest-recipe-cards">
     <div class="image">
<img src="images/upma.jpg" alt="upma" width="300" height="300">
     </div>
<div class="title">
  <h1>Upma</h1>
</div>
<div class="description">
  <p>Upma is a dish originating from the Indian subcontinent, most common in Andhra Pradesh, cooked as a thick porridge from dry-roasted semolina or coarse rice flour.</p>
<a href="upma.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/aloo-paratha.jpg" alt="aloo-paratha" width="300" height="300">
     </div>
<div class="title">
  <h1>Aloo Paratha</h1>
</div>
<div class="description">
  <p> Aloo paratha is a bread dish originating from the Indian subcontinent. It is a breakfast dish originated from the Punjab region. </p>
<a href="paratha.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/dosa.jpg" alt="dosa" width="300" height="300">
     </div>
<div class="title">
  <h1>Dosa</h1>
</div>
<div class="description">
  <p>A dosa is a thin pancake originating from South India, made from a fermented batter predominantly consisting of lentils and rice. </p>
<a href="dosa.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>
 </div>


 <!-- spicy recipes -->
 <div class="header3">
  <h1>Spicy Food Recipes</h1>
  </div> 
  <!-- cards -->
  <div class="cards">
  <div class="latest-recipe-cards">
     <div class="image">
<img src="images/misal-pav.jpg" alt="misal-pav" width="300" height="300">
     </div>
<div class="title">
  <h1>Misal Pav</h1>
</div>
<div class="description">
  <p>Upma is a dish originating from the Indian subcontinent, most common in Andhra Pradesh, cooked as a thick porridge from dry-roasted semolina or coarse rice flour.</p>
<a href="misal_pav.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/momos.jpg" alt="momos" width="300" height="300">
     </div>
<div class="title">
  <h1>Momos</h1>
</div>
<div class="description">
  <p> Momo is a type of steamed dumpling with some form of filling. Momo has become a traditional delicacy in Nepal, Tibet. </p>
<a href="momos.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/vada-pav.jfif" alt="vada-pav" width="300" height="300">
     </div>
<div class="title">
  <h1>Vada Pav</h1>
</div>
<div class="description">
  <p>The vada pav consists of a deep fried potato dumpling placed inside a bread bun (pav) sliced almost in half through the middle. </p>
<a href="vada_pav.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>
 </div>


 <!-- drinks -->
 <div class="header4">
  <h1>Drinks</h1>
  </div> 
  <!-- cards -->
  <div class="cards">
  <div class="latest-recipe-cards">
     <div class="image">
<img src="images/lassi.jpg" alt="lassi" width="300" height="300">
     </div>
<div class="title">
  <h1>Lassi</h1>
</div>
<div class="description">
  <p>Lassi is a regional name for buttermilk. Lassi is a blend of yogurt, water, spices and sometimes fruit.</p>
<a href="lassi.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/masala-chaas.jpg" alt="masala-chaas" width="300" height="300">
     </div>
<div class="title">
  <h1>Masala-chaas</h1>
</div>
<div class="description">
  <p> Masala Chaas is a popular Indian yogurt drink. This refreshing drink is lightly spiced and is the perfect way to cool off during summers. </p>
<a href="masala_chaas.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>

    <div class="latest-recipe-cards">
     <div class="image">
<img src="images/shinkjvi.jpg" alt="shikanjvi" width="300" height="300">
     </div>
<div class="title">
  <h1>Shikanjvi</h1>
</div>
<div class="description">
  <p>Shikanjvi is a lemon-based drink originating in the northern part of India. Shikanjvi is distinct from lemonade, and often contains other ingredients such as salt, saffron and cumin. </p>
<a href="shinkjvi.php" class="btn btn-success"> Read More.. </a>
</div>
    </div>
 </div>

</section>


<!-- search by ingredients --> 
<div class="search-recipe">
<h2>Search your Recipes by ingredients.</h2>
<h4><a href="ingredient.php">Click Here...</a></h4>
</div>


<!--- for footer --->
<?php   include 'footer.php' ?>
 
</body>
</html>