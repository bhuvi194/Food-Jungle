<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/ingredient.css">
  <!-- for navbar css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- for toggle menu of nav bar -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <!-- For toggle menu of nav bar -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- for footer logo -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- for ingredients -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- style -->
  <?php  include 'style.php'  ?>
  <title>Food-Jungle-Ingredient</title>


   <style>
        * {
            box-sizing: border-box;
        }
        .search{
           margin-top: 20px;
        }
        .container button {
            float: center;
            width: 90%;
            padding: 10px;
            margin: 3px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
        }

        .container button:hover {
            background: #0b7dda;
        }

        .container h1, h2 {
            text-align: center;
        }
        .row1, .row2, .row3, .row4, .row5, .row6, .row7{
         border-style: groove;

        }
        .row .item {
            display: inline-block;
            flex-direction: column;
            margin: 15px;
            padding-right: 10%;
            padding-left: flex;
        }

        .sub-container {
            align-items: center;
            float: inline-start;
        }
        .container{
         margin-top: 40px;
        }
        .row .item p {
            display: inline-block;
            flex-direction: column;
        }
        /*
        #contain {
            background-image: url("images/loginimage.png");
        }*/
   </style>
<!-- navbar -->
<?php   include 'nav.php' ?>
</head>

<body style="background-color: snow;">


<div class="container" id="contain">
   <h1>Detailed Kitchen</h1>
    <div class="sub-container">
        <form action="" class="search"></form>
        <h2>Spices</h2>
        <div class="row1">
        <div class="row">
            <div class="item">
            <!-- <input type="checkbox" id="option1" name="ingredient" value="1">     -->
            <input type="checkbox" id="garammasala" name="ingredient" value="garammasala">
                <p>Garam Masala</p>
            </div>
            <div class="item">
            <input type="checkbox" id="chilipepper" name="ingredient" value="chilipepper">
                <p>Chili Pepper</p>
            </div>
            <div class="item">
            <input type="checkbox" id="cumin" name="ingredient" value="cumin">
                <p>Cumin</p>
            </div>
            <div class="item">
               <input type="checkbox" id="coriander" name="ingredient" value="coriander">
                <p>Coriander</p>
            </div>
            <div class="item">
            <input type="checkbox" id="salt" name="ingredient" value="salt">
                <p>Salt</p>
            </div>
            <div class="item">
            <input type="checkbox" id="garlic" name="ingredient" value="garlic">
                <p>Garlic</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="ginger" name="ingredient" value="ginger">
                <p>Ginger</p>
            </div>
            <div class="item">
            <input type="checkbox" id="dhaniyapowder" name="ingredient" value="dhaniyapowder">
                <p>Dhaniya Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="chilipowder" name="ingredient" value="chilipowder">
                <p>Chili Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="cardamom" name="ingredient" value="cardamom">
                <p>Cardamom</p>
            </div>
            <div class="item">
            <input type="checkbox" id="blackpepper" name="ingredient" value="blackpepper">
                <p>Black Pepper</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="saffron" name="ingredient" value="saffron">
                <p>Saffron</p>
            </div>
            <div class="item">
            <input type="checkbox" id="cinnamomsticks" name="ingredient" value="cinnamom sticks">
                <p>Cinnamom sticks</p>
            </div>
            <div class="item">
            <input type="checkbox" id="fenugreek" name="ingredient" value="fenugreek">
                <p>Fenugreek</p>
            </div>
            <div class="item">
            <input type="checkbox" id="currypowder" name="ingredient" value="currypowder">
                <p>Curry Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="cardamompowder" name="ingredient" value="cardamompowder">
                <p>Cardamom Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="turmericpowder" name="ingredient" value="turmericpowder">
                <p>Turmeric Powder</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="spices" name="ingredient" value="spices">
                <p>Spices</p>
            </div>
            <div class="item">
            <input type="checkbox" id="sambharpowder" name="ingredient" value="sambharpowder">
                <p>Sambhar Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="taramindpaste" name="ingredient" value="taramindpaste">
                <p> Taramind paste</p>
            </div>
            <div class="item">
            <input type="checkbox" id="mustardseed" name="ingredient" value="mustardseed">
                <p>Mustard Seed</p>
            </div>
            <div class="item">
            <input type="checkbox" id="blackpepperpowder" name="ingredient" value="blackpepperpowder">
                <p>Black Pepper Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="chaatmasala" name="ingredient" value="chaatmasala">
                <p>Chaat Masala</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="kalanamak" name="ingredient" value="kalanamak">
                <p>Kala Namak</p>
            </div>
            <div class="item">
            <input type="checkbox" id="currytree" name="ingredient" value="currytree">
                <p>Curry Tree</p>
            </div>
            <div class="item">
            <input type="checkbox" id="asafoetida" name="ingredient" value="asafoetida">
                <p>Asafoetida</p>
            </div>
            <div class="item">
            <input type="checkbox" id="gingergarlicpaste" name="ingredient" value="gingergarlicpaste">
                <p>Ginger Garlic Paste</p>
            </div>
        </div>
    </div>
    </div>
    <div class="sub-container">
        <h2>Beans</h2>
        <div class="row2">
        <div class="row">
            <div class="item">
            <input type="checkbox" id="chickpea" name="ingredient" value="chickpea">
                <p>Chick Pea</p>
            </div>
            <div class="item">
            <input type="checkbox" id="pigeonpea" name="ingredient" value="pigeonpea">
                <p>Pigeon Pea</p>
            </div>
            <div class="item">
            <input type="checkbox" id="mungbean" name="ingredient" value="mungbean">
                <p>Mung Bean</p>
            </div>
            <div class="item">
            <input type="checkbox" id="horsegram" name="ingredient" value="horsegram">
                <p>Horse Gram</p>
            </div>
            <div class="item">
            <input type="checkbox" id="vigna" name="ingredient" value="vigna">
                <p>Vigna</p>
            </div>
            <div class="item">
            <input type="checkbox" id="lentils" name="ingredient" value="lentils">
                <p>Lentils</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="blackpea" name="ingredient" value="blackpea">
                <p>Black Pea</p>
            </div>
            <div class="item">
            <input type="checkbox" id="uraddal" name="ingredient" value="uraddal">
                <p>Urad Dal</p>
            </div>
            <div class="item">
            <input type="checkbox" id="chanadal" name="ingredient" value="chanadal">
                <p>Chana Dal</p>
            </div>
            <div class="item">
            <input type="checkbox" id="matki" name="ingredient" value="matki">
                <p>Matki</p>
            </div>
            <div class="item">
            <input type="checkbox" id="dal" name="ingredient" value="dal">
                <p>Dal</p>
            </div>
            <div class="item">
            <input type="checkbox" id="beans" name="ingredient" value="beans">
                <p>Beans</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="beansprout" name="ingredient" value="beansprout">
                <p>Beans Sprout</p>
            </div>
        </div>
    </div>
    </div>
    <div class="sub-container">
        <h2>Dairy Products</h2>
        <div class="row3">
        <div class="row">
            <div class="item">
            <input type="checkbox" id="butter" name="ingredient" value="butter">
                <p>Butter</p>
            </div>
            <div class="item">
            <input type="checkbox" id="cream" name="ingredient" value="cream">
                <p>Cream</p>
            </div>
            <div class="item">
            <input type="checkbox" id="yoghurt" name="ingredient" value="yoghurt">
                <p>Yoghurt</p>
            </div>
            <div class="item">
            <input type="checkbox" id="ghee" name="ingredient" value="ghee">
                <p>Ghee</p>
            </div>
            <div class="item">
            <input type="checkbox" id="milk" name="ingredient" value="milk">
                <p>Milk</p>
            </div>
            <div class="item">
            <input type="checkbox" id="khoa" name="ingredient" value="khoa">
                <p>Khoa</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="powderedmilk" name="ingredient" value="powderedmilk">
                <p>Powdered Milk</p>
            </div>
            <div class="item">
            <input type="checkbox" id="curd" name="ingredient" value="curd">
                <p>Curd</p>
            </div>
            <div class="item">
            <input type="checkbox" id="condensedmilk" name="ingredient" value="condensedmilk">
                <p>Condensed Milk</p>
            </div>
            <div class="item">
            <input type="checkbox" id="paneer" name="ingredient" value="paneer">
                <p>Paneer</p>
            </div>
            <div class="item">
            <input type="checkbox" id="yeast" name="ingredient" value="yeast">
                <p>Yeast</p>
            </div>
        </div>
        </div>
        <div class="sub-container">
            <h2>Flour & Rice</h2>
            <div class="row4">
            <div class="row">
                <div class="item">
                <input type="checkbox" id="rice" name="ingredient" value="rice">
                    <p>Rice</p>
                </div>
                <div class="item">
                <input type="checkbox" id="basmatirice" name="ingredient" value="basmatirice">
                    <p>Basmati Rice</p>
                </div>
                <div class="item">
                <input type="checkbox" id="maida" name="ingredient" value="maida">
                    <p>Maida</p>
                </div>
                <div class="item">
                <input type="checkbox" id="cornflour" name="ingredient" value="cornflour">
                    <p>Cornflour</p>
                </div>
                <div class="item">
                <input type="checkbox" id="flour" name="ingredient" value="flour">
                    <p>Flour</p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                <input type="checkbox" id="plainflour" name="ingredient" value="plainflour">
                    <p>Plain Flour</p>
                </div>
                <div class="item">
                <input type="checkbox" id="wholewheatflour" name="ingredient" value="wholewheatflour">
                    <p>Whole Wheat Flour</p>
                </div>
                <div class="item">
                <input type="checkbox" id="gramflour" name="ingredient" value="gramflour">
                    <p>Gram Flour</p>
                </div>
            </div>
        </div>
        </div>
        <div class="sub-container">
            <h2>Vegetables</h2>
            <div class="row5">
            <div class="row">
                <div class="item">
                <input type="checkbox" id="onion" name="ingredient" value="onion">
                    <p>Onion</p>
                </div>
                <div class="item">
                <input type="checkbox" id="tomato" name="ingredient" value="tomato">
                    <p>Tomato</p>
                </div>
                <div class="item">
                <input type="checkbox" id="mintleaves" name="ingredient" value="mintleaves">
                    <p>Mint Leaves</p>
                </div>
                <div class="item">
                <input type="checkbox" id="lemon" name="ingredient" value="lemon">
                    <p>Lemon</p>
                </div>
                <div class="item">
                <input type="checkbox" id="springonion" name="ingredient" value="springonion">
                    <p>Spring Onion</p>
                </div>
                <div class="item">
                <input type="checkbox" id="carrot" name="ingredient" value="carrot">
                    <p>Carrot</p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                <input type="checkbox" id="cabbage" name="ingredient" value="cabbage">
                    <p>Cabbage</p>
                </div>
                <div class="item">
                <input type="checkbox" id="pea" name="ingredient" value="pea">
                    <p>Pea</p>
                </div>
                <div class="item">
                <input type="checkbox" id="potati" name="ingredient" value="potato">
                    <p>Potato</p>
                </div>
                <div class="item">
                <input type="checkbox" id="greenchili" name="ingredient" value="greenchili">
                    <p>Green Chili</p>
                </div>
                <div class="item">
                <input type="checkbox" id="cauliflower" name="ingredient" value="cauliflower">
                    <p>Cauliflower</p>
                </div>
                <div class="item">
                <input type="checkbox" id="bellpepper" name="ingredient" value="bellpepper">
                    <p>Bell Peppper</p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                <input type="checkbox" id="vegetable" name="ingredient" value="vegetable">
                    <p>Vegetable</p>
                </div>
                <div class="item">
                <input type="checkbox" id="capsicum" name="ingredient" value="capsicum">
                    <p>Capsicum</p>
                </div>
            </div>
        </div>
        </div>
        <div class="sub-container">
            <h2>Other Products</h2>
            <div class="row6">
            <div class="row">
                <div class="item">
                <input type="checkbox" id="sugar" name="ingredient" value="sugar">
                    <p>Sugar</p>
                </div>
                <div class="item">
                <input type="checkbox" id="cashew" name="ingredient" value="cashew">
                    <p>Cashew</p>
                </div>
                <div class="item">
                <input type="checkbox" id="almond" name="ingredient" value="almond">
                    <p>Almond</p>
                </div>
                <div class="item">
                <input type="checkbox" id="sugarsyrup" name="ingredient" value="sugarsyrup">
                    <p>Sugar Syrup</p>
                </div>
                <div class="item">
                <input type="checkbox" id="vinegar" name="ingredient" value="vinegar">
                    <p>Vinegar</p>
                </div>
                <div class="item">
                <input type="checkbox" id="chilisauce" name="ingredient" value="chilisauce">
                    <p>Chili Sauce</p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                <input type="checkbox" id="soysauce" name="ingredient" value="soysauce">
                    <p>Soy Sauce</p>
                </div>
                <div class="item">
                <input type="checkbox" id="coconut" name="ingredient" value="coconut">
                    <p>Coconut</p>
                </div>
                <div class="item">
                <input type="checkbox" id="farsan" name="ingredient" value="farsan">
                    <p>Farsan</p>
                </div>
                <div class="item">
                <input type="checkbox" id="egg" name="ingredient" value="egg">
                    <p>Egg</p>
                </div>
                <div class="item">
                <input type="checkbox" id="semolina" name="ingredient" value="semolina">
                    <p>Semolina</p>
                </div>
                <div class="item">
                <input type="checkbox" id="noodles" name="ingredient" value="noodles">
                    <p>Noodles</p>
                </div>
            </div>
        </div>
        </div>
        <div class="sub-container">
            <h2>Meat Products</h2>
            <div class="row7">
            <div class="row">
                <div class="item">
                <input type="checkbox" id="chicken" name="ingredient" value="chicken">
                    <p>Chicken</p>
                </div>
                <div class="item">
                <input type="checkbox" id="chickenbreast" name="ingredient" value="chickenbreast">
                    <p>Chicken Breast</p>
                </div>
                <div class="item">
                <input type="checkbox" id="bonelessskinlesschickenthighs" name="ingredient" value="bonelessskinlesschickenthighs">
                    <p>Boneless Skinless Chicken Thighs </p>
                </div>
            </div>
        </div>
        </div>
        <button type="submit" onclick="SearchReciepe()"><i class="fa fa-search"> Search</i></button>
        <p id="demo"></p>
        </form>
    </div>


<!--- for footer --->
<?php   include 'footer.php' ?>
<script>
function SearchReciepe() {
    debugger;

 // document.getElementById("demo").innerHTML = "Hello World";
 // Get the checkbox
 var checkBox = document.getElementById("chicken");
  // Get the output text
  var text = document.getElementById("demo");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.innerHTML=checkBox.value;
  } else {
    text.innerHTML = "";
  }

}
</script>
</body>
</html>