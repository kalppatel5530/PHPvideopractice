<?php

$nameerror="";
$emailerror="";
$phoneerror="";
$passworderror="";



if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $password= $_POST['password'];
}


if(empty($name)){
    $nameerror="<br>name is required";
}else{
    $name= trim($name);
    $name=htmlspecialchars($name);
    if(!preg_match("/^[a-zA-Z\s]+$/",$name)){
        // $nameerror="name should required only char and spaces";
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

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration page</h1>
<form action="" method="post">
    <label>Name:</label>
    <input type="text" name="name">
    <span style="color:red;"><?php echo $nameerror ?></span>
    <br><br>
    <label>Email:</label>
    <input type="email" name="email">
    <span style="color:red;"><?php echo $emailerror ?></span>
    <br><br>
    <label>Phone:</label>
    <input type="text" name="phone">
    <span style="color:red;"><?php echo $phoneerror ?></span>
    <br><br>
    <label>Password:</label>
    <input type="password" name="password">
    <span style="color:red;"><?php echo $passworderror ?></span>
    <br><br>
    <input type="submit" name="submit" value="register">
</form>
<?php

if (isset($_POST['submit']) && empty($nameerror) && empty($emailerror) && empty($phoneerror) && empty($passworderror)) { 

    echo "name is " .$_POST['name'];
    echo "<br>";
    echo "email is " .$_POST['email'];
    echo "<br>";
    echo "phone number is " .$_POST['phone'];
    echo "<br>";
    echo "password is " .$_POST['password'];
}

?>
 

</body>
</html>