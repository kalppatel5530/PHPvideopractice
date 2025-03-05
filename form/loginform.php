
<?php
$nameerror="";
$passworderror="";

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password = $_POST['password'];

if(empty($username)){
    $nameerror = "name is required";
}else {
    $username = trim($username);
    $username = htmlspecialchars($username);
    if(!preg_match("/^[a-zA-Z]+$/", $username)){
          $nameerror = "name should only required char ans sapces";
    }
}

}

?>

<?php

if(isset($_POST['username'])){
    echo "username is " . $_POST["username"];
    echo "<br>";
     echo "password is " .$_POST["password"];
}

?>