<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ================================= Example of while loop ================================= -->

    <?php
$a = 1;

while ($a <=5){
    echo $a ." ) Hello Kalp <br>";
    $a++;
}
echo "<br>";
?>
<?php


$b = 10;

echo "<ul>";
while ($b >=1){
    echo "<li>" . $b . ")HEllo World! </li>";
    $b--;
}
echo "</ul>";

echo "<br>";
$a = 1;

while ($a <=50){
    echo $a ." ) Hello Kalp <br>";
    $a = $a + 3 ;
}
echo "<br>";

    ?>

    <!-- =========================================== Example of do while loop =========================================== -->

    <?php
$a = 1;
 
do {
    echo $a. ") welcome to the world of brain.<br>";
    $a++;
}while ($a <=10);

echo "<br>";
$b = 10;

do {
    echo $b . ") welcome to the world of brain.<br>";
    $b--;
}while ($b >=1);

    ?>

    <!-- ============================================= Example of for loop ============================================ -->
<br>
    <?php
 for ($i = 1 ; $i <=10; $i++){
    echo $i . ")welcome to the world of brain .<br>";
 }
echo "<br>";

 for($z =20 ; $z >=1; $z = $z-4){
    echo $z . ")hello world!<br>";
 }

 echo "<br>";

for ($d = 1 ; $d <=10 ; $d++){
    echo $d;
}
echo"<br>";

for ($e = 20 ; $e >=0 ; $e--){
    echo $e;
}
    ?>

    <!-- ============================================Example of nested loop ==================================================== -->
<br>

<?php

for ($a = 1; $a<=100 ;$a=$a +10){
    for($b = $a ; $b < $a + 10 ; $b++){
        echo $b . " ";
    }
    echo "<br>";
}

?>
<!-- ======================================== foreach loop ============================================== -->

<?php

$color = array(
    "red",
    "black",
    "green",
    "blue"
);

foreach ($color as $value){
    echo $value ."<br>";
}

$age = array (
    "bill" => 21,
    "steave" => 22,
    "elon" => 25
);
foreach ($age as $key => $value){
    echo "$key = $value <br>";
}


?>

</body>
</html>