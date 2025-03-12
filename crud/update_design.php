
<?php
include("connection.php");

$id=  $_GET['id'];
$query = "select * from  registration where id= '$id'";
$data = mysqli_query($conn , $query);

$total= mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);

$lan = $result['language'];
$lan1 = explode(",",$lan);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>update Form</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
        <div class="title">
            Update student detail
</div>

<div class="form">
    <div class="input_field">
        <label>First Name</label>
        <input type="text" value="<?php echo $result['first_name'];?>" class="input" name="fname" required>
</div>
<div class="input_field">
        <label>Last Name</label>
        <input type="text" value="<?php echo $result['last_name'];?>" class="input" name="lname" required>
</div>
<div class="input_field">
        <label>Password</label>
        <input type="password" value="<?php echo $result['password'];?>" class="input" name="password" required>
</div>
<div class="input_field">
        <label>Confirm Password</label>
        <input type="password" value="<?php echo $result['confirm_password'];?>" class="input" name="conpassword" required>
</div>
<div class="input_field">
        <label>Gender</label>
        <div class="custom_select">
        <select name="gender" required>

       <option value="">Select</option>

       <option value="male"
       <?php
           if($result['gender']== 'male'){
            echo "selected";
           }
       ?>
       >Male</option>
       <option value="female"
       <?php
           if($result['gender']== 'female'){
            echo "selected";
           }
       ?>
       >Female</option>
</select>

</div>
</div>
<div class="input_field">
        <label>Email Address</label>
        <input type="text" value="<?php echo $result['email'];?>" class="input" name="email" required>
</div>
<div class="input_field">
        <label>Phone Number</label>
        <input type="text" value="<?php echo $result['phone'];?>" class="input" name="phone" required>
</div>

<div class="input_field">
        <label style="margin-right:100px;">Caste</label>
        <input type="radio" name="caste" value="General" required
        
        <?php
           if($result['caste']== "General"){
            echo "checked";
           }
        ?>
        
        ><label style="margin-left:5px;">General</label>
        <input type="radio" name="caste" value="OBC" required
        
        <?php
           if($result['caste']== "OBC"){
            echo "checked";
           }
        ?>
        
        ><label style="margin-left:5px;">OBC</label>
        <input type="radio" name="caste" value="SC" required
        
        <?php
           if($result['caste']== "SC"){
            echo "checked";
           }
        ?>
        
        ><label style="margin-left:5px;">SC</label>
        <input type="radio" name="caste" value="ST" required
        
        <?php
           if($result['caste']== "ST"){
            echo "checked";
           }
        ?>
       
       ><label style="margin-left:5px;">ST</label>

    </div>

    <div class="input_field">
        <label style="margin-right:91px;">Language</label>
        <input type="checkbox" name="language[]" value="English"
        
        <?php 

        if(in_array("English", $lan1))
        {
            echo "checked";
        }
        ?>
        >
        <label style="margin-left:5px;">English</label>
        <input type="checkbox" name="language[]" value="Hindi"
        
        <?php 

        if(in_array("Hindi", $lan1))
        {
            echo "checked";
        }
        ?>
        >
        <label style="margin-left:5px;">Hindi</label>
        <input type="checkbox" name="language[]" value="Gujarati"
        <?php 

        if(in_array("Gujarati", $lan1))
        {
            echo "checked";
        }
        ?>
        >
        <label style="margin-left:5px;">Gujarati</label>
        <input type="checkbox" name="language[]" value="Spanish"
        <?php 

if(in_array("Spanish", $lan1))
{
    echo "checked";
}
?>
        >
        <label style="margin-left:5px;">Spanish</label>
</div>

<div class="input_field">
        <label>Address</label>
        <textarea  class="textarea" name="address" required>
        <?php echo $result['address'];?></textarea>
</div>
<div class="input_field terms">
       <label class="check">
        <input type="checkbox" name="checkbox" required>
        <span class="checkmark"></span>
       </label>
       <p>Agree to terms and conditions</p>
</div>
<div class="input_field">
    <input type="submit" value="Update" class="btn" name="update">
</div>
</div>
</form> 
</div>
</body>
</html>

<?php
error_reporting(0);

if($_POST["update"]){
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $password= $_POST['password'];
    $conpassword= $_POST['conpassword'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $caste= $_POST['caste'];

    $language = $_POST['language'];
    $lang = implode(",",$language);
    
    $address= $_POST['address'];

    if($fname !="" && $lname !="" && $password !="" && $conpassword !="" && $gender !="" && $email !="" && $phone !="" && $caste !="" && $language !="" && $address !=""){

//   $query="INSERT INTO registration(first_name , last_name , password, confirm_password, gender, email, phone, address) values('$fname','$lname','$password','$conpassword','$gender','$email','$phone','$address')";

  $query= "update registration set first_name='$fname', last_name='$lname',password='$password', confirm_password=' $conpassword',gender='$gender',email=' $email',phone='$phone',caste='$caste',language=' $lang',address='$address' where id='$id'";

$data= mysqli_query($conn , $query);


if($data)
{
    echo "<script>alert('Record updated succesfully')</script>";
    ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/PHPvideopractice/crud/display.php"/>
    <?php
}else{
    echo "data is not updated succesfully";
}
}else{
    echo "error";
}
}

?>