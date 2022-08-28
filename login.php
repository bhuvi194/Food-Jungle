<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://kit.fontawesome.com/ce7baf26fa.js" crossorigin="anonymous"></script>
    <style>
        body,
        html {
            background-image: url('images/back.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
        }

        #btn {
            background: linear-gradient(to right, #addbe6, #cbc3e3);
        }
    </style>
    <title>Food-Jungle-Login</title>
</head>

<body style="background-color:snow;">
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <form action="logindetail.php" method="post" class="input-group" id="login">
                <i class="register__icon fas fa-user"></i>
                <input type="text" name="user" class="input-field" placeholder="User Name" autocomplete="off" required>
                <i class="register__icon fas fa-lock"></i>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" autocomplete="off" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" name="login" class="submit-btn">Log in</button>
            </form>
            <form action="registerdetail.php" method="post" class="input-group" id="register">
                <i class="register__icon fas fa-user"></i>
                <input type="text" name="user" class="input-field" placeholder="User Name" autocomplete="off" required>
                <i class="register__icon fas fa-user"></i>
                <input type="text" name="email" class="input-field" placeholder="Email Id" autocomplete="off" required>
                <i class="register__icon fas fa-lock"></i>
                <input type="password" name="password" class="input-field" placeholder="Enter Password" autocomplete="off" required>
                <i class="register__icon fas fa-lock"></i>
                <input type="password" name="cnfpassword" class="input-field" placeholder="Confirm Password" autocomplete="off" required>
                <button type="submit" name="register" class="submit-btn">Register</button>
                <?php if (isset($_GET['register'])){
                    echo '<br>Entered passwords doesnt match';
                }
                ?>
            </form>
        </div>
    </div>


    <!-- for toggle menu -->
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");


        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

    </script>

</body>

</html>