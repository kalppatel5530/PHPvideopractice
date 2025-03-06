<?php
$nameerror="";
$passworderror="";
$websiteerror="";
$emailerror="";
$phoneerror="";

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password = $_POST['password'];
    $website= $_POST['website'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

if(empty($username)){
    $nameerror = "<br>name is required";
}else {
    $username = trim($username);
    $username = htmlspecialchars($username);
    if(!preg_match("/^[a-zA-Z]+$/", $username)){
          $nameerror = "name should only required char and sapces";
    }
}

if (empty($password)) {
    $passworderror = "<br>Password is required";
} else {
    if (strlen($password) < 8) {
        $passworderror = "<br>At least 8 characters required";
    } elseif (!preg_match("#\d+#", $password)) {
        $passworderror = "<br>At least one digit required";
    } elseif (!preg_match("#[a-z]+#", $password)) {
        $passworderror = "<br>At least one lowercase letter required";
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        $passworderror = "<br>At least one uppercase letter required";
    }
}

if (empty($website)){
    $websiteerror = "<br> website is required";
} else{
    if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i" , $website)){
        $websiteerror = "Invalid URL";
    }
}

if(empty($email)){
    $emailerror = "<br>email is required";
}else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailerror="invalid email formate";
    }
}

if(empty($phone)){
    $phoneerror="<br>phone no is required";
}else{
    if(strlen($phone)<10){
        $phoneerror="invalid number";
    }elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        $phoneerror = "Phone number should contain  10 digits";
    }
}

}

?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>
    <form action="" method="post">
        <label>Username:</label>
       
        <input type="text" name="username" >
        <span style="color:red;"><?php echo $nameerror ?></span>
        
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" >
        <span style="color:red;"><?php echo $passworderror ?></span>
        <br><br>
        <label>Website:</label>
        <input type="text" name="website">
        <span style="color:red;"><?php echo $websiteerror ?></span>
        <br><br>
        <label>Email:</label>
        <input type="email" name="email">
        <br><br>
        <label>Phone:</label>
        <input type="text" name="phone">
        <span style="color:red;"><?php echo $phoneerror ?></span>
        <br><br>

        <button type="submit" name="submit">Login</button>
       
    </form>

    <?php

if(isset($_POST['username']) && empty($nameerror) && empty($passworderror) && empty($websiteerror)&& empty($phoneerror)){
    echo "username is " . $_POST["username"];
    echo "<br>";
     echo "password is " .$_POST["password"];
     echo "<br>";
     echo "website is " .$_POST['website'];
     echo "<br>";
     echo "email is " .$_POST['email'];
     echo "<br>";
     echo "phone number is " .$_POST['phone'];
}

?> 
</body>

</html>