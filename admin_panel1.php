<?php
  include 'connect.php';
  session_start();
  session_regenerate_id(true);
  if(!isset($_SESSION['AdminLoginId'])){
      header("location: admin_login.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Panel</title>
    <style>
        body {
            margin: 0;
        }

        .header {
            color: #f0f0f0;
            font-family: poppins;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
            background-color: #1c1c1e;
        }

        .header button {
            background-color: #f0f0f0;
            font-size: 16px;
            font-weight: 550;
            padding: 8px 12px;
            border: 2px solid black;
            border-radius: 5px;
        }

        .container h1 {
            text-align: center;
            margin: 30px 0;
        }

        .logbtn {
            color: white;
            background-color: #1c1c1e;
            border: none;
            outline: none;
            border-radius: 5px;
            font-size: 14px;
            padding: 5px 12px;
            font-weight: 500;
        }
        .operation{
            display: flex;
    flex-direction: row;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Admin Panel -
            <?php echo $_SESSION['AdminLoginId'] ?>
        </h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <button type="submit" name="Logout">LOG OUT</button>
        </form>
    </div>

    <div class="container" style="box-shadow: 0 50px 50px -50px darkslategray;">
        <h1>User Information</h1>
        <button class="logbtn"><a href="display.php" style="color: white; text-decoration: none;">Add User</a></button>
        <table class="table table-striped table-bordered border-info" style="margin-top: 10px;">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Confirm Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>



                <?php
    
    $sql="Select * from `registerdetail`";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $user=$row['user'];
            $email=$row['email'];
            $password=$row['password'];
            $cnfpassword=$row['cnfpassword'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$user.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>'.$cnfpassword.'</td>
            <td class="operation">
            <button class="btn btn-primary" style="margin-right:8px;"><a href="update.php?updateid='.$id.'" style="color: white; text-decoration: none;">Update</a></button>
            <button class="btn btn-danger"><a href="delete1.php?deleteid='.$id.'" style="color: white; text-decoration: none;">Delete</a></button>
            </td>
          </tr>';
        }
    }
  ?>


            </tbody>
        </table>
        <button class="logbtn"><a href="admin_panel.php" style="color: white; text-decoration: none;">Contact Info</a></button>
    </div>


    <?php 
        if(isset($_POST['Logout']))
        {
            session_destroy();
            header("location: admin_login.php");
        }
     ?>



</body>

</html>