<?php
  include 'connect.php';  
  
  ?>
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

        #recipedetails {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
 
}

#recipedetails td, #recipedetails th {
  border: 1px solid;
  padding: 8px;
}

/* #recipedetails tr:nth-child(even){background-color: #f2f2f2;} */

/* #recipedetails tr:hover {background-color: #ddd;} */

#recipedetails th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: yellow; 
  color: black;
}

   </style>
<!-- navbar -->
<?php   include 'nav.php' ?>
</head>

<body style="background-color: snow;">
<div class="recipedetail">
    <table id="recipedetails" style="<?=$dispNone?>">
        <thead>
            <tr>
            <th>Id</th>
                <th>Recipe</th>
                <th>Required</th>
            </tr>
        </thead>
        <tbody>

        <?php
        // include 'connect.php';
        
        if(isset($_POST['submit'])){
            $selectedItems= implode(',', $_POST['ingredient']);
          // print_r($selectedItems);
          
        $sql="SELECT rec.id,rec.menu,GROUP_CONCAT(ing.ingredient) as 'Ing' FROM `recipe` rec INNER join `menus_and_ingredient` mnIng on mnIng.menu_id=rec.id INNER JOIN `ingredient` ing on ing.id=mnIng.ing_id WHERE rec.id IN (SELECT menu_id FROM `menus_and_ingredient` WHERE ing_id in ($selectedItems) GROUP BY menu_id HAVING COUNT(`menu_id`) >= 5) and ing.id IN (SELECT `ing_id` FROM `menus_and_ingredient` WHERE menu_id in (SELECT menu_id FROM `menus_and_ingredient` WHERE ing_id in ($selectedItems) GROUP BY menu_id HAVING COUNT(`menu_id`) >= 5) and ing_id NOT IN ($selectedItems)) group by rec.id";
        $result=mysqli_query($conn,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['menu'];
                $email=$row['Ing'];
                echo '<tr>
                <td>'.$id.'</td>
                <th scope="row"><a href="'.$name.'.php">'.$name.'</a></th>
                <td>'.$email.'</td>
              </tr>';
            }
        }

        }
        ?>

        </tbody>
    </table>
</div>

<div class="container" id="contain">
   <h1>Detailed Kitchen</h1>
    <div class="sub-container">
     <form action="" class="search" method="post">
        <h2>Spices</h2>
        <div class="row1">
        <div class="row">
            <div class="item">
            <input type="checkbox" id="option1" name="ingredient[]" value="1">
                <p>Garam Masala</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option2" name="ingredient[]" value="2">
                <p>Chili Pepper</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option3" name="ingredient[]" value="3">
                <p>Cumin</p>
            </div>
            <div class="item">
               <input type="checkbox" id="option4" name="ingredient[]" value="4">
                <p>Coriander</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option5" name="ingredient[]" value="5">
                <p>Salt</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option6" name="ingredient[]" value="6">
                <p>Garlic</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="option7" name="ingredient[]" value="7">
                <p>Ginger</p>
            </div>
            <div class="item">
        <input type="checkbox" id="option8" name="ingredient[]" value="8">
                <p>Baking Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option9" name="ingredient[]" value="9">
                <p>Dhaniya Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option10" name="ingredient[]" value="10">
                <p>Chili Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option11" name="ingredient[]" value="11">
                <p>Cardamom</p>
            </div>
        </div>
        <div class="row">
        <div class="item">
            <input type="checkbox" id="option12" name="ingredient[]" value="12">
                <p>Black Pepper</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option13" name="ingredient[]" value="13">
                <p>Saffron</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option14" name="ingredient[]" value="14">
                <p>Cinnamom sticks</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option15" name="ingredient[]" value="15">
                <p>Fenugreek</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option16" name="ingredient[]" value="16">
                <p>Curry Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option17" name="ingredient[]" value="17">
                <p>Cardamom Powder</p>
            </div>
        </div>
        <div class="row">
        <div class="item">
            <input type="checkbox" id="option18" name="ingredient[]" value="18">
                <p>Turmeric Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option19" name="ingredient[]" value="19">
                <p>Spices</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option20" name="ingredient[]" value="20">
                <p>Sambhar Powder</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option21" name="ingredient[]" value="21">
                <p> Taramind paste</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option22" name="ingredient[]" value="22">
                <p>Mustard Seed</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option23" name="ingredient[]" value="23">
                <p>Black Pepper Powder</p>
            </div>
        </div>
        <div class="row">
        <div class="item">
            <input type="checkbox" id="option24" name="ingredient[]" value="24">
                <p>Chaat Masala</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option25" name="ingredient[]" value="25">
                <p>Kala Namak</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option26" name="ingredient[]" value="26">
                <p>Curry Tree</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option27" name="ingredient[]" value="27">
                <p>Asafoetida</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option28" name="ingredient[]" value="28">
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
            <input type="checkbox" id="option29" name="ingredient[]" value="29">
                <p>Chick Pea</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option30" name="ingredient[]" value="30">
                <p>Pigeon Pea</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option31" name="ingredient[]" value="31">
                <p>Mung Bean</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option32" name="ingredient[]" value="32">
                <p>Horse Gram</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option33" name="ingredient[]" value="33">
                <p>Vigna</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option34" name="ingredient[]" value="34">
                <p>Lentils</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="option35" name="ingredient[]" value="35">
                <p>Black Pea</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option36" name="ingredient[]" value="36">
                <p>Urad Dal</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option37" name="ingredient[]" value="37">
                <p>Chana Dal</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option38" name="ingredient[]" value="38">
                <p>Matki</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option39" name="ingredient[]" value="39">
                <p>Dal</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option40" name="ingredient[]" value="40">
                <p>Beans</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="option41" name="ingredient[]" value="41">
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
            <input type="checkbox" id="option42" name="ingredient[]" value="42">
                <p>Butter</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option43" name="ingredient[]" value="43">
                <p>Cream</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option44" name="ingredient[]" value="44">
                <p>Yoghurt</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option45" name="ingredient[]" value="45">
                <p>Ghee</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option46" name="ingredient[]" value="46">
                <p>Milk</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option47" name="ingredient[]" value="47">
                <p>Khoa</p>
            </div>
        </div>
        <div class="row">
            <div class="item">
            <input type="checkbox" id="option48" name="ingredient[]" value="48">
                <p>Powdered Milk</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option49" name="ingredient[]" value="49">
                <p>Curd</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option50" name="ingredient[]" value="50">
                <p>Condensed Milk</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option51" name="ingredient[]" value="51">
                <p>Paneer</p>
            </div>
            <div class="item">
            <input type="checkbox" id="option52" name="ingredient[]" value="52">
                <p>Yeast</p>
            </div>
        </div>
        </div>
        <div class="sub-container">
            <h2>Flour & Rice</h2>
            <div class="row4">
            <div class="row">
                <div class="item">
                <input type="checkbox" id="option53" name="ingredient[]" value="53">
                    <p>Rice</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option54" name="ingredient[]" value="54">
                    <p>Basmati Rice</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option55" name="ingredient[]" value="55">
                    <p>Maida</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option56" name="ingredient[]" value="56">
                    <p>Cornflour</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option57" name="ingredient[]" value="57">
                    <p>Flour</p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                <input type="checkbox" id="option58" name="ingredient[]" value="58">
                    <p>Plain Flour</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option59" name="ingredient[]" value="59">
                    <p>Whole Wheat Flour</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option60" name="ingredient[]" value="60">
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
                <input type="checkbox" id="option61" name="ingredient[]" value="61">
                    <p>Onion</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option62" name="ingredient[]" value="62">
                    <p>Tomato</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option63" name="ingredient[]" value="63">
                    <p>Mint Leaves</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option64" name="ingredient[]" value="64">
                    <p>Lemon</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option65" name="ingredient[]" value="65">
                    <p>Spring Onion</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option66" name="ingredient[]" value="66">
                    <p>Carrot</p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                <input type="checkbox" id="option67" name="ingredient[]" value="67">
                    <p>Cabbage</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option68" name="ingredient[]" value="68">
                    <p>Pea</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option69" name="ingredient[]" value="69">
                    <p>Potato</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option70" name="ingredient[]" value="70">
                    <p>Green Chili</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option71" name="ingredient[]" value="71">
                    <p>Cauliflower</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option72" name="ingredient[]" value="72">
                    <p>Bell Peppper</p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                <input type="checkbox" id="option73" name="ingredient[]" value="73">
                    <p>Vegetable</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option74" name="ingredient[]" value="74">
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
                <input type="checkbox" id="option75" name="ingredient[]" value="75">
                    <p>Sugar</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option76" name="ingredient[]" value="76">
                    <p>Cashew</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option77" name="ingredient[]" value="77">
                    <p>Almond</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option78" name="ingredient[]" value="78">
                    <p>Sugar Syrup</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option79" name="ingredient[]" value="79">
                    <p>Vinegar</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option80" name="ingredient[]" value="80">
                    <p>Chili Sauce</p>
                </div>
            </div>
            <div class="row">
                <div class="item">
                <input type="checkbox" id="option81" name="ingredient[]" value="81">
                    <p>Soy Sauce</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option82" name="ingredient[]" value="82">
                    <p>Coconut</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option83" name="ingredient[]" value="83">
                    <p>Farsan</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option84" name="ingredient[]" value="84">
                    <p>Egg</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option85" name="ingredient[]" value="85">
                    <p>Semolina</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option86" name="ingredient[]" value="86">
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
                <input type="checkbox" id="option87" name="ingredient[]" value="87">
                    <p>Chicken</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option88" name="ingredient[]" value="88">
                    <p>Chicken Breast</p>
                </div>
                <div class="item">
                <input type="checkbox" id="option89" name="ingredient[]" value="89">
                    <p>Boneless Skinless Chicken Thighs </p>
                </div>
            </div>
        </div>
        </div>
        <button type="submit" name="submit" ><i class="fa fa-search"> Search</i></button>
        <p id="demo"></p>
    
    </div>


<!--- for footer --->
<?php   include 'footer.php' ?>
<script>
</script>
</body>
</html>