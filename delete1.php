<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `registerdetail` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location: admin_panel1.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>


