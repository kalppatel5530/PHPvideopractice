<?php
$nameerror="";
$passworderror="";

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password = $_POST['password'];

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

        <button type="submit" name="submit">Login</button>
       
    </form>

    <?php

if(isset($_POST['username']) && empty($passworderror)){
    echo "username is " . $_POST["username"];
    echo "<br>";
     echo "password is " .$_POST["password"];
}

?> 
</body>

</html>