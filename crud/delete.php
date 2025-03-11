<?php
include("connection.php");

$id=  $_GET['id'];

$query= "Delete from registration where id ='$id'";
$data = mysqli_query($conn, $query);

if($data){
    echo "<script>alert('Record deleted succesfully')</script>";
}else{
    echo "record not deleted";
}

?>