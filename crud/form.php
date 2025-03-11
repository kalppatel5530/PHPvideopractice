<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
        <div class="title">
            Registration Form
</div>

<div class="form">
    <div class="input_field">
        <label>First Name</label>
        <input type="text" class="input" name="fname" required>
</div>
<div class="input_field">
        <label>Last Name</label>
        <input type="text" class="input" name="lname" required>
</div>
<div class="input_field">
        <label>Password</label>
        <input type="password" class="input" name="password" required>
</div>
<div class="input_field">
        <label>Confirm Password</label>
        <input type="password" class="input" name="conpassword" required>
</div>
<div class="input_field">
        <label>Gender</label>
        <div class="custom_select">
        <select name="gender" required>
       <option value="">Select</option>
       <option value="male">Male</option>
       <option value="female">Female</option>
</select>
</div>
</div>
<div class="input_field">
        <label>Email Address</label>
        <input type="text" class="input" name="email" required>
</div>
<div class="input_field">
        <label>Phone Number</label>
        <input type="text" class="input" name="phone" required>
</div>
<div class="input_field">
        <label>Address</label>
        <textarea class="textarea" name="address" required></textarea>
</div>
<div class="input_field terms">
       <label class="check">
        <input type="checkbox" name="checkbox" required>
        <span class="checkmark"></span>
       </label>
       <p>Agree to terms and conditions</p>
</div>
<div class="input_field">
    <input type="submit" value="Register" class="btn" name="register">
</div>
</div>
</form> 
</div>
</body>
</html>
<?php
include("connection.php");
?>

<?php
error_reporting(0);

if($_POST["register"]){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $password= $_POST['password'];
    $conpassword= $_POST['conpassword'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];

    if($fname !="" && $lname !="" && $password !="" && $conpassword !="" && $gender !="" && $email !="" && $phone !="" && $address !=""){

  $query="INSERT INTO registration(first_name , last_name , password, confirm_password, gender, email, phone, address) values('$fname','$lname','$password','$conpassword','$gender','$email','$phone','$address')";

$data= mysqli_query($conn , $query);


if($data)
{
    echo "data inserted succesfully";
}else{
    echo "data is not inserted succesfully";
}
}else{
    echo "error";
}
}

?>