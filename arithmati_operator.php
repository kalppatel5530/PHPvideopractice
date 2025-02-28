<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Arithmatic operator example  -->

    <?php
$a = 10;
$b = 5;

$c = $a + $b;
echo $c;
    ?>
<br>
    <?php
$a = 10;
$b = 5;

$c = $a - $b ;
echo $c;
    ?>
<br>
    <?php
$a = 10;
$b = 5;

$c = $a * $b;
echo $c;
    ?>
<br>
    <?php
$a = 10;
$b = 5;

$c = $a / $b;
echo $c;
    ?>
<br>
    <?php
$a = 10;
$b = 4;

$c = $a % $b;
echo $c;
    ?>
<br>
    <?php
$a = 10;
$b = 4;

$c = $a ** $b;
echo $c;
    ?>
<br>
    <?php
$a = 10;
$b = 4;

$a++; 
$b++;
echo $a ."<br>";
echo $b;
    ?>
<br><br>

<!-- Assignment operator example -->
    <?php
$a = 20;
$b= 4 ;

$a += $b;
echo $a;
echo "<br>";
$d = 20;
$e = 5;
$d -= $e;
echo $d;
echo "<br>";
$f = 20;
$g = 10;
$f *= $g;
echo $f;
echo "<br>";
$h = 20;
$i = 10;
$h /= $i;
echo $h;
echo "<br>";
$l = 20;
$m = 6;
$l %= $m;
echo $l;

echo "<br>";
$j = 20;
$k = 2;
$j **= $k;
echo $j;

?>
<!-- comparision operator example -->
<br><br>
<?php
$a =10;
$b = 10;

echo $a == $b;  // match the value 
echo "<br>"; 
$c = 10;
$d = "10";

echo $c === $d; // match the value and datatype both
echo "<br>";
$e = 10;
$f = 5;

echo $e != $f;
echo "<br>";
$g = 10;
$h = 5;

echo $g > $h;
echo $g < $h;
echo "<br>";
echo $g <=> $h;



?>

<!-- Ternary operator example -->
<br>
<?php
$x = 1;

($x >5) ? $z = "x is grater" : $z = "x is smaller";
echo $z;

echo "<br>";
$a = 10;
$y = $a >9 ? "x is grater" : "x is smaller";
echo $y;
echo "<br>";
$b = "value is:" .($a >15 ? "grater" : "smaller");
echo $b;
?>

<!-- String operator example -->
<br>
<?php

$a = "hello";
$b = $a . "World!";
echo $b;

echo "<br>";
$x = "Welcome ";
$x .= "to the world of ";
$x .= "Brain";

echo $x;
echo "<br>";

$p = "i am ";
$p .= "give you ";
$p .= "my laptop";

echo $p;

echo "<br>";

$q = "i am give you ";
$r = $q . 500 . " rupees.";
echo $r;
echo "<br>";



?>
</body>
</html>