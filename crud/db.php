<?php

$servername="localhost";
$username="root";
$password="";
$dbname="tutorial";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo "connection succesfully";
}else{
    echo "Failed";
}


?>