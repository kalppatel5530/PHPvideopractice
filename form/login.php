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

if(empty($password)){
    $passworderror="</br> password is required";
}else{
    if(strlen($password) <= 8){
        $passworderroe="<br>at least 8 digit";
    }elseif(!preg_match("#[0-9]+3",$password)){
        $passworderror ="<br> at least one digit";
    } elseif(!preg_match("#[a-z]+3",$password)){
        $passworderror ="<br> at least one small character";
    }elseif(!preg_match("#[A-Z]+3",$password)){
        $passworderror ="<br> at least one capital character";
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

?>    and <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>
    <form action="loginform.php" method="post">
        <label>Username:</label>
       
        <input type="text" name="username" >
        
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" >
        <br><br>

        <button type="submit" name="submit">Login</button>
    </form>

</body>
</html>