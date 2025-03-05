<?php
if(isset($_POST['submit'])){
    $val1= $_POST['name'];
    $val2= $_POST['email'];
    $val3= $_POST['add'];
    $val4 =$_POST['password'];
    

    echo "$val1 <br>" ;
    echo "$val2 <br>";
    echo "$val3 <br>" ;
    echo "$val4 <br>";
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
    <h1>Login form</h1>

    <form class="" action="required.php" method="POST">
        Name: <input type="text" name="name" value="" required>
        <br><br>
        Email: <input type="email"  name="email" value="" required>
        <br><br>
        Address: <input type="text" name="add" value="" required>
        <br><br>
        Password: <input type="password" name="password" value="" required>
        <br><br>
         <input type="submit" name="submit">
</form>
</body>

</html>