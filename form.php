<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="testform.php" method="POST">
        Name : <input type= "text" name="fname"><br><br>
        Age : <input type="age" name="age"><br><br>
        <input type="submit" name="save">
    </form>

    <h1> $_server use </h1>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Name : <input type= "text" name="fname"><br><br>
        Age : <input type="age" name="age"><br><br>
        <input type="submit" name="save">
    </form>
<?php

if(isset($_POST['save'])){
    echo $_POST['fname'] ."<br>";
    echo $_POST['age'];
}

?>



<form action=<?php echo $_SERVER['PHP_SELF'] ?> method='POST'>
First Name : <input type="text" name="fname"><br>
Last Name : <input type="text" name="lname"><br>
 Gender : <select name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
</select><br>
Age : <input type="text" name="age"><br>
<input type="submit" name="save">
    </form>

    <?php
if(isset($_POST['save'])){
    echo $_POST['fname'] ."<br>";
    echo $_POST['lname'] ."<br>";
    echo $_POST['gender'] ."<br>";
    echo $_POST['age'];
}

?>

</body>
</html>

