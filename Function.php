<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- =======================================Example of function()  ============================================ -->

<?php

// use the forloop in function

function myfunction(){
for($i = 1; $i <=10;$i++){
    echo $i;
}
}
 myfunction();

echo "<br>";
function myname(){

for ($a = 1; $a <=10;$a++){
    echo $a . ") Kalp Patel<br>";
}
}
 myname();

// use the switch case in function 

function my(){
    $myweek = 4;

    switch($myweek){
              case 1:
                echo "Today is monday";
                break;
                case 2:
                    echo "Today is tuesday";
                    break;
                    case 3:
                        echo "Today is wednesday";
                        break;
                        case 4:
                            echo "Today is thrusday";
                            break;
                            case 5:
                                echo "Today is friday";
                                break;
                                case 6:
                                    echo "Today is saturday";
                                    break;
                                    case 7:
                                        echo "Today is sunday";
                                        break;
                                        default:
                                            echo "please enter valid weekday";

    }
}

 my();

?>

<!-- =============================================== function() with parameter ======================================= -->
<br>
<?php

function sum($a , $b){
    echo $a + $b ;
}

sum(10,10) ;
echo "<br>";
sum (50,45);
echo "<br>";
function name($fname, $lname){
    echo "hello $fname $lname .<br>" ;
}
name("kalp","patel");

// set default value in parameter 

function hello($fname ="First" , $lname ="last"){
    echo "hello $fname $lname .<br>";
}
hello ();
hello ("kalp","patel");
hello ("bill","gates");
?>
<br>

<!-- =========================================== function with return value ============================================== -->

<?php

function my1($fname , $lname){
    $name= "$fname $lname";
    return $name;
}
$x= my1("kalp" , "patel");

echo $x;

echo "<br>";

function mark($math , $eng , $sc){
    $a= $math + $eng + $sc ;
     return $a;
}
$total = mark(95,98,92);
echo $total*100/300 ."%";
?>
<br>
<!-- =========================================== Variable function example ========================================== -->

<?php
function myfun(){
    echo "hello kalp";
}
$var = "myfun";
$var();
echo "<br>";
function myfunc($name){
    echo "hello $name";
}
$a = "myfunc";
$a("kalp patel ");

echo "<br>";

function sell($x){
    echo "my laptop selling price is: $x";
}
$z = "sell";
$z(95000);
echo "<br>";
$sayhello = function($name){
    echo "hello $name";
};

$sayhello("kalp patel");
?>
<br>
<!-- ============================================ Recursive function example ===================================== -->

<?php

function mynumber($number){
    if($number < 5){
        echo "$number <br>";
        mynumber($number + 1);

    }
}
mynumber(1);

echo "<br>";

function display($num){
    if ($num <= 20){
        echo "$num <br>";
        display ($num + 2);
    }
}
display (2);
echo "<br>";
function factorial($n){
 if ($n == 0){
    return 1;
 }else {
    return ($n * factorial($n-1));
 }
}
echo factorial(10);

?>
<br>
<!-- ============================================== global and local variable ======================================= -->

<?php

// use the local variable so the outside echo is not print 
function var1(){
    $x1 = 10;
    echo "the value of x is: $x1";
}
                                      
var1();
echo "the value of x is $x1";

// use the global variable so inner echo is not print 
echo "<br>";

$x11 = 10;
function var11(){

    echo "the value of xyz is: $x11<br>";
}
                                      
var11();
echo "the value of x is $x11";

// use the global keyword for print the global variable in the inner echo statement 
echo "<br>";echo "<br>";echo "<br>";echo "<br>";
$x111 = 10;
function var111(){
    global $x111;
    echo "the value of x is: $x111<br>";
}
                                      
var111();
echo "the value of x is $x111";

echo "<br>";
$a1 = 10;
$b1 = 5;
function sum1(){
    global $a1 , $b1 ; 
    $a1 = $a1 + $b1;
}
sum1();
echo $a1;
?>


</body>
</html>