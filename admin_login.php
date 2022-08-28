<?php require("connect.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://kit.fontawesome.com/ce7baf26fa.js" crossorigin="anonymous"></script>
    <title>Admin Login Panel</title>
</head>
<body>
    
    <div class="container">
        <div class="myform">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <h2>Admin Login</h2>
                <i class="register__icon fas fa-user"></i>
                <input type="text" autocomplete="off" placeholder="Admin Name" name="AdminName">
                <i class="register__icon fas fa-lock"></i>
                <input type="password" autocomplete="off" placeholder="Password" name="AdminPass">
                <button type="submit" name="SignIn">Login</button>
            </form>
        </div>
        <div class="image">
            <img src="images/admin.jpg">
        </div>
    </div>
    

    <?php
      
    function input_filter($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }


      if(isset($_POST['SignIn']))
      {
        #filtering user input
        $AdminName=input_filter($_POST['AdminName']);
        $AdminPass=input_filter($_POST['AdminPass']);

        #escaping special character used in SQL statement
        $AdminName=mysqli_real_escape_string($conn,$AdminName);
        $AdminPass=mysqli_real_escape_string($conn,$AdminPass);

        #query template
        $query="SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password`=?";

        #prepared statement
        if($stmt=mysqli_prepare($conn,$query))
        {
          mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);//binding value to template or prepared statement
           mysqli_stmt_execute($stmt); //executing prepared statement
           mysqli_stmt_store_result($stmt);//transfering the result of execution in $stmt
          if(mysqli_stmt_num_rows($stmt)==1)
           {
              session_start();
              $_SESSION['AdminLoginId']=$AdminName;
              header("location: admin_panel.php");  
            }
          else
           {
               echo"<script>alert('Invalid Admin Name or Password');</script>";
          }
          mysqli_stmt_close($stmt);
        }
        else
        {
           echo"<script>alert('SQL Query cannot be prepared');</script>";
        }

      }
    ?>

</body>
</html>