<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 25;
$b = "25";

//=========================================== if_else statement =====================================================


if ($a === $b){
    echo "value is same";
}

echo "value is not same ";
echo "<br>";

$x = 30;
if ($x > 20){
    echo "x is grater";
}else{
    echo "x is smaller";
}
echo "<br>";
$y = 99;
if ($y == 100){
    echo "y is same ";
}else {
    echo "y is not same ";
}
echo "<br>";

$name = "kalp patel";
$gender = "male";

if ($gender == "male"){
    echo "hello Mr." .$name ;
}
else {
    echo "statement is wrong";
}

//=========================================== if_elseif_else statement =====================================================
   echo "<br>";
   $k = 95.12;
   if ($k >= 80 and $k <= 100){
    echo "merit";
   }
   elseif ( $k >=60 and $k <80){
    echo "1st division";
   }
    elseif ( $k >=45 and $k < 60){
    echo "2nd division";
   } 
   elseif ( $k >33 and $k <45){
    echo "3rd division";
   }
   elseif($k <= 33) {
    echo "Fail";
   }else {
    echo "please enter valid percentage";
   }
   
   ?>
</body>
</html>