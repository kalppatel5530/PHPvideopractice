
<?php
$nameerror="";
$passworderror="";

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password = $_POST['password'];

if(empty($username)){
    $nameerror = "name is required";
}

}

?>





<?php
//print_r($_POST);
if(isset($_POST['username'])){
    echo "user name is ". $_POST['username'];
    echo "<br>";
    echo "user password is ". $_POST['password'];
    echo "<br>";
}

?>