<?php
include 'dbconnect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql = "delete from `admins` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "Deleted Successfully";
        header("location:index.php");
    }
    else{
        die(mysqli_error($con));
    }
}
?>