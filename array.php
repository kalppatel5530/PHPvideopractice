<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$colors = array ("red", "green","blue","black");

echo $colors[0]."<br>";
echo $colors[1]."<br>";
echo $colors[2]."<br>";
echo $colors[3];

echo "<br>";

$color = ["red", 20,"blue",50];
echo "<pre>";
print_r($color);
echo "</pre>";

echo "<br>";

$col[0] = "red";
$col[1] = "blue";
$col[2] = "green";
$col[3] = "black";

echo "<pre>";
print_r($col);
echo "</pre>";

echo "<br>";
$colors1 = array ("red", "green","blue","black");
echo "<ul>";
for ($i = 0 ; $i < 4; $i++){
   echo"<li>  $colors1[$i] </li>";
 }
 echo "</ul>";
echo "<br>";

$age = array(
    "kalp"=>21,
    "yash"=> 22,
    "sujal"=>20
);
echo "<pre>";
print_r ($age);
echo "</pre>";
echo "<pre>";
var_dump($age);
echo "</pre>";
echo $age ["kalp"] . "<br>";
echo $age ["yash"] . "<br>";
echo $age ["sujal"] ;

echo "<br>";

$num = array (
    1 => "kalp",
    2 => "yash",
    3 => "sujal"
);

echo "<pre>";
echo print_r($num);
echo "</pre>";
echo $num[1]."<br>";
echo $num[2]."<br>";
echo $num[3]."<br>";
echo "<pre>";
var_dump($num);
echo "</pre>";
    ?>

<!-- ========================================= multidimentional array =========================================== -->

<?php

$salary = array (
    [1,"kalp","developer",50000],
    [2,"yash","developer",45000],
    [3,"harsh","developer",40000],
    [4,"sujal","developer",5000]
);

echo $salary [0][0];
echo $salary [0][1];     // use the echo for print the multidimentional array
echo $salary [0][2];
echo $salary [0][3];



echo "<pre>";
print_r($salary);       // use the print_r for display the multidimentional array
echo "</pre>";

for ($row = 0 ; $row < 4 ; $row++){
    for ($col = 0 ; $col < 4 ; $col++){               // use the fro loop for display the multidimentional array
        echo $salary [$row] [$col] ." ";
    }
    echo "<br>";
}
echo "<Br>";

$number = [
    [1,"kalp","patel",9409267681],
    [2,"yash","shah",1234567890],
    [3,"harsh","patel",9876543210],
    [4,"anjali","raichura",6541239870]
];
echo "<table border='2px' cellpadding ='5px' cellspaccing = '0px'>";
echo "<tr>
          <th>Emp id </th>
          <th>Emp name </th>
          <th>Emp surname </th>
          <th>Emp Mo.no</th>

</tr>";
foreach ($number as $v1){
    echo "<tr>";
    foreach ($v1 as $v2){                      // use the foreach loop for display the multidimentional array
        echo "<td> $v2 </td>";
        }
        echo "</tr>";
}
echo "</table>";

echo "<br>";

$mark = [
    "joy" =>["guj"=>98,"eng"=>99,"mat"=>99],
    "jaina" =>["guj"=>92,"eng"=>90,"mat"=>90],
    "ved" =>["guj"=>88,"eng"=>89,"mat"=>90]
];
echo "<table border='2px' cellpadding='5px' cellspacing ='0px'>
<tr>
<th>student name </th>
<th>Gujarati </th>
<th>English </th>
<th>Maths </th>
</tr>
";
foreach ($mark as$key => $a){
    echo"<tr><td> $key</td>" ;
    foreach($a as $b){
        echo "<td> $b </td>" ;
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";
$num = [
    [1,"kalp","patel",9409267681],
    [2,"yash","shah",1234567890],
    [3,"harsh","patel",9876543210],
    [4,"anjali","raichura",6541239870]
];
echo "<table border='2px' cellpadding ='5px' cellspacing='0px'>
<tr>
     <th>id </th>
     <th>Name </th>
     <th>Surname </th>
     <th>Mo.no </th>
</tr>";
foreach ($num as list( $id,$name,$surname,$number)){
    echo "<tr><td>$id</td><td> $name</td> <td>$surname</td> <td>$number</td></tr> ";
}
echo "</table>";

$mark1 = [
    ["guj"=>98,"eng"=>99,"mat"=>99],
    ["guj"=>92,"eng"=>90,"mat"=>90],
    ["guj"=>88,"eng"=>89,"mat"=>90]
];

echo "<table border='2px' cellpadding ='5px' cellspacing='0px'>
<tr>
     <th>Gujarati </th>
     <th>English </th>
     <th>Maths </th>
</tr>";
foreach ($mark1 as list( "guj" => $guj, "eng" =>$eng, "mat" =>$mat)){
    echo "<tr><td>$guj</td><td> $eng</td> <td>$mat</td> </tr> ";
}
echo "</table>";

// ============================================== array count and sizeof function use ===========================================


$c1 =array ("red","blue","green","black");

echo sizeof($c1) . "<br>";
echo count($c1);

echo "<pre>";
print_r(array_count_values($c1));
echo "</pre>";
// ============================================ in_array and array_search functiion use =========================================

$c2 =array ("red","blue","green","red","black");
if (in_array("red", $c2)){
    echo "find succesfully";
}else {
    echo "can't find ";
}
echo "<br>";
$c3 =array ("red","55","blue","green","red","black");
if (in_array(55, $c3, true)){
    echo "find succesfully";
}else {
    echo "can't find ";
}
echo "<br>";
$fun = array (array('p','q'),
       array('r','s')
);

if (in_array(array('p','q'), $fun , true )){
echo "find succesfully";
}else{
    echo "can't find ";
}
echo "<br>";
$c4 =array ("red","55","blue","green","black");

echo array_search("black", $c4);
echo "<br>";
$c5 =array ("a"=>"red","b"=>"55","c"=>"blue","d"=>"green","e"=>"black");
echo array_search("green",$c5);
?>

<!-- ================================================= array replace function use ================================================ -->

<?php

$d1 =array ("red","blue","green","black");
$d2 = array ("yellow","white");
$newArray= array_replace($d1,$d2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

$x1 =array ("red","a"=>"blue","green","black");
$x2 = array ("a"=>"yellow","b"=>"white");

$new = array_replace($x1,$x2);

echo "<pre>";
print_r($new);
echo "</pre>";


$p = array ('a'=>array('green'), 'b'=>array('pink','blue'));
$q = array ('a'=>array ('black'), 'b'=>array('white'));

$new1 = array_replace_recursive($p,$q);

echo "<pre>";
print_r($new1);
echo "</pre>";

// =============================================== array push and pop function use =========================================
// array push is used for the add the value in last
$d3 =array ("red","blue","green","black");
array_push($d3 , "white");

echo "<pre>";
print_r($d3);
echo "</pre>";

// array pop is used for the remove the last value 
$d4 =array ("red","blue","green","black");
array_pop($d4);

echo "<pre>";
print_r($d4);
echo "</pre>";

// array shift used for remove the first value 
$d5 =array ("red","blue","green","black");
array_shift($d5);

echo "<pre>";
print_r($d5);
echo "</pre>";

// array unshift is used for add the value in first
$d5 =array ("red","blue","green","black");
array_unshift($d5, "white");

echo "<pre>";
print_r($d5);
echo "</pre>";


// ======================================================= array merge and combine function ============================================

// use the array_merge function 
$d6 = array ("red","green");
$d7 = array ("blue","black");

$new2 =array_merge($d6 , $d7);

echo "<pre>";
print_r($new2);
echo "</pre>";

$d8 = array ("a"=>"red","b"=>"green");
$d9 = array ("blue","black");

$new3 =array_merge($d8 , $d9);

echo "<pre>";
print_r($new3);
echo "</pre>";

// use the array_merge_recursive function 

$d10 = array ("a"=>"red","b"=>"green");
$d11 = array ("b"=>"blue","c"=>"black");

$new4 =array_merge_recursive($d10 , $d11);


echo "<pre>";
print_r($new4);
echo "</pre>";

// use the array_combine function 

$age1 = array ("kalp","yash","sujal");
$age2 = array (21,22,20);

$age3 = array_combine($age1 , $age2);

echo "<pre>";
print_r($age3);
echo "</pre>";
?>
<!-- ======================================================= Array_slice function use =========================================== -->

<?php
$x1 =array ("red","blue","green","black");

$new11 = array_slice($x1,1,3);

echo "<pre>";
print_r ($new11);
echo "</pre>";


$x2 =array ("red","blue","green","black");

$new111 = array_slice($x2,-2,2,true); // true is called preserve parameter and it is give the exact index of value 

echo "<pre>";
print_r ($new111);
echo "</pre>";

$d10 = array ("a"=>"red","b"=>"green","c"=>"white","d"=>"black");
$new1 = array_slice($d10,1,2,);

echo "<pre>";
print_r ($new1); 
echo "</pre>";

?>
<!-- ======================================================= Array_splice function use =========================================== -->

<?php

$x1 =array ("red","blue","green","white","purple","black");

array_splice($x1, 0,1);
echo "<pre>";
print_r($x1);
echo "</pre>";

$y1 =array ("red","blue","green","white","purple","black");
$y2 = array ("apple","guava");

array_splice($y1 , 0 , 2, $y2);

echo "<pre>";
print_r($y1);
echo "</pre>";

?>
<!-- =================================================== Array key function example ============================================= -->

<?php
$y1 =array ("red","blue","green","white","purple","black");

$newarray = array_keys($y1);
echo "<pre>";
print_r($newarray);
echo "<pre>";


// array_keys function give the key of the array 
$x2 =array ("first"=>"red","second"=>"blue","third"=>"green","fourth"=>"black");

$newArray = array_keys($x2);
echo "<pre>";
print_r($newArray);
echo "<pre>";

// array_key_first function give the first key of the array 

$x3 =array ("1"=>"red","2"=>"blue","3"=>"green","4"=>"black");

$newArray1 = array_key_first($x3);
$newArray2 = array_key_last($x3);
echo "<pre>";
print_r($newArray1 ."<br>");  // give the first key of the array
print_r($newArray2);  // give the last key of the array 
echo "<pre>";

$x22 =array ("first"=>"red","second"=>"blue","third"=>"green","fourth"=>"black");

$newArray2 = array_key_exists("first",$x22);

if($newArray2){
    echo "key exist";
}else{
    echo "key does not exist";
}

?>

<!-- ============================================ Array intersect function ============================================ -->

<?php

// this function is used for find the same value in array
$a =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$b =array ("a"=>"red","e"=>"blue");

$newArray = array_intersect($a , $b);  

echo "<pre>";
print_r($newArray);
echo "</pre>";

// this function is used for the find the same key in array

$a1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$b1 =array ("a"=>"red","e"=>"blue","c"=>"purple");

$newArray1 = array_intersect_key($a1 , $b1);  

echo "<pre>";
print_r($newArray1);
echo "</pre>";

// this function is used for find the same key and same value in array
$a2 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$b2 =array ("a"=>"red","e"=>"blue","c"=>"purple");

$newArray2 = array_intersect_assoc($a2 , $b2);  

echo "<pre>";
print_r($newArray2);
echo "</pre>";

// this function is used for the find the same key, same value and same data type in array 

function compare($a , $b){
    if ($a === $b){
        return 0;
    }
    return ($a > $b)? 1 : -1 ;
}

$a3 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$b3 =array ("a"=>"red","e"=>"blue","c"=>"purple");

$newArray3 = array_intersect_uassoc($a3 , $b3, "compare");  

echo "<pre>";
print_r($newArray3);
echo "</pre>";


?>

<!-- ============================================= Array diff function use ==================================================== -->

<?php

$a1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$a2 =array ("a"=>"red","e"=>"blue","c"=>"purple");
$a3 = array ("a"=>"red","b"=>"pink","d"=>"black");
$newArray = array_diff($a1,$a2,$a3);

echo "<pre>";
print_r($newArray);
echo "</pre>";


$b1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$b2 =array ("a"=>"red","e"=>"blue","p"=>"purple");
$b3 = array ("a"=>"red","b"=>"pink","q"=>"black");
$newArray1 = array_diff_key($b1,$b2,$b3);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

$c1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$c2 =array ("a"=>"red","b"=>"blue","p"=>"purple");
$c3 = array ("a"=>"red","b"=>"pink","q"=>"black");
$newArray2 = array_diff_assoc($c1,$c2,$c3);

echo "<pre>";
print_r($newArray2);
echo "</pre>";

function compare1($d1,$d2){
    if ($d1 === $d2){
        return 0;
    }
    return ($d1 > $d2)? 1 : -1;
}
$d1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$d2 =array ("a"=>"red","b"=>"blue","p"=>"purple");
$newArray3 = array_diff_uassoc($d1,$d2,"compare1");        // in this function you can also use the --> array_udiff_assoc --> array_diff_ukey finction 



echo "<pre>";
print_r($newArray3);
echo "</pre>";


function compare2($p1,$p2){
    if ($p1 === $p2){
        return 0;
    }
    return ($p1 > $p2)? 1 : -1;
}

function comparevalue($p1,$p2){
    if ($p1 === $p2){
        return 0;
    }
    return ($p1 > $p2)? 1 : -1;
}

$p1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
$p2 =array ("a"=>"red","b"=>"blue","p"=>"purple");
$newArray4 = array_udiff_uassoc($p1,$p2,"compare2","comparevalue");        


echo "<pre>";
print_r($newArray4);
echo "</pre>";
?>

<!-- ================================================= Array_values and array_unique function use =============================================== -->

<?php
$a1 =array ("a"=>"red","b"=>"blue","c"=>"red","d"=>"black");

$newArray = array_values($a1);
echo "<pre>";
print_r($newArray);
echo "</pre>";

$a2 =array ("a"=>"red","b"=>"blue","c"=>"red","d"=>"black");

$newArray1 = array_unique($a2);
echo "<pre>";
print_r($newArray1);
echo "</pre>";
?>

<!-- =============================================== Array_column and array_chunk function use ============================================ -->

<?php

$array = array(
    array(
        "id"=> 1,
        "fname"=> "kalp",
        "lname"=>"patel",
    ),
    array(
        "id"=> 2,
        "fname"=> "yash",
        "lname"=>"shah",
    ),
    array(
        "id"=> 3,
        "fname"=> "sujal",
        "lname"=>"patel",
    ) 
    );

    $newArray = array_column($array , "fname" , "id");

    echo "<pre>";
    print_r($newArray);
    echo "</pre>";

    // array_chunk function use 

    $a1 =array ("red","blue","green","white","purple","black");

    $newarray1 = array_chunk($a1,2);  // you can make the pair of array 
    echo "<pre>";
    print_r($newarray1);
    echo "<pre>";
     

    $p1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");
    $newarray2 = array_chunk($p1, 2 , true);  // you can make the pair of array of associative array and show the key of array 
    echo "<pre>";
    print_r($newarray2);
    echo "<pre>";
?>

<!-- ============================================ array_flip and array_change_key_case function use =========================================  -->

<?php

$p1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");

$newArray = array_flip($p1);  // flip the key and value 

echo "<pre>";
print_r($newArray);
echo "</pre>";



$p2 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");

$newArray1 = array_change_key_case($p2, CASE_UPPER);  // flip the key and value 

echo "<pre>";
print_r($newArray1);
echo "</pre>";
?>

<!-- ============================================== array_sum and array_product function use =================================================== -->

<?php

$a = array (1,2,3,4,5);

echo "sum = " .array_sum($a);   // this function do the sum of this array
echo "<br>";

$p2 =array ("a"=>10,"b"=>20,"c"=>30,"d"=>40);
echo "sum =" .array_sum($p2);   // this function do the sum of this array
echo "<br>";

$a1 = array (1,2,3,4,5);
echo "mul =" .array_product($a1);  // this function do the multiplication of this array

echo "<br>";

$p1 =array ("a"=>10,"b"=>20,"c"=>30,"d"=>40);
echo "mul =" .array_product($p1);    // this function do the multiplication of this array
?>

<!-- ================================================ array_rand and shuffle function use ================================================== -->

<?php

$color = array ("white","red","blue","green","pink");
$newArray = array_rand($color,2);  // give the random value of array 
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo $color[$newArray[0]] . "<br>";
echo $color[$newArray[1]];


$col = array ("white","red","blue","green","pink");
shuffle($col);   // when you refresh the output screen it is  change the position of the array value 

echo "<pre>";
print_r($col);
echo "</pre>";
?>

<!-- ==============================================array_fill and array_fill_key function use ================================================ -->

<?php

$num = array ("a","b","c","d","e");

$newArray = array_fill_keys($num , "test"); // used for make the index array to associative array using fixed value

echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray1 = array_fill(2,4, "test"); // used for make the array with fixed value

echo "<pre>";
print_r($newArray1);
echo "</pre>";

?>

<!-- =========================================== array_walk and array_walk_recursive function ============================================ -->

<?php

$p2 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");

array_walk($p2,"myfunction","is key value of");

function myfunction($value , $key , $param){
    echo "$key $param $value <br>";
}

// ====================================================
echo "<br>";
echo "<br>";
$fruit = array ("1"=> "watermelon", "2" => "apple");
$colour =array ($fruit ,"a"=>"red","b"=>"blue","c"=>"green","d"=>"black");

array_walk_recursive($colour,"myFunction1","is key value of");

function myFunction1($value , $key , $param){
    echo "$key $param $value <br>";
}
?>

<!-- ================================================== array_map function use ============================================== -->

<?php

function square($a,$b){
    return "$a = $b";
}

$a = array (1,2,3,4,5);
$b = array ("white","red","blue","green","pink");
$newarray = array_map("square",$a,$b);

echo "<pre>";
print_r($newarray);
echo "</pre>";

?>

<!-- ================================================ array sorting function use ===================================================== -->

<?php

$fruit = array ("graph","lemon","apple","banana");

sort($fruit);  // sort the array in ascending order 

echo "<pre>";
print_r($fruit);
echo "</pre>";

$fruit1 = array ("graph","lemon","apple","banana");

rsort($fruit1);  // sort the array in descending order

echo "<pre>";
print_r($fruit1);
echo "</pre>";

$colour =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");

asort($colour);  // this function is sort the array based on value in ascending order with its key value  

echo "<pre>";
print_r($colour);
echo "</pre>";


$colour1 =array ("a"=>"red","b"=>"blue","c"=>"green","d"=>"black");

arsort($colour1);  // this function is sort the array based on the value in descending order with its key value 

echo "<pre>";
print_r($colour1);
echo "</pre>";

$a = ["c"=>"apple","a"=>"graph","d"=>"lemon","b"=>"watermelon"];

ksort($a);  // sort the array based on key in ascending order 

echo "<pre>";
print_r($a);
echo "</pre>";

$a1 = ["c"=>"apple","a"=>"graph","d"=>"lemon","b"=>"watermelon"];

krsort($a1);  // sort the array based on key in descending order 

echo "<pre>";
print_r($a1);
echo "</pre>";

$image = ["img10.png","img12.png","img2.png","img9.png"];

natsort($image);  // sort the natural array in ascending order 

echo "<pre>";
print_r($image);
echo "</pre>";

$image1 = ["Img10.png","Img12.png","img2.png","img9.png"];

natcasesort($image1); // sort the array in ascending array firs sort small later and after upper later word 


echo "<pre>";
print_r($image1);
echo "</pre>";


$fruit11 = array ("apple","guava","graphs","orange");
$veggi = array ("lemon","carot","coriender","garlic");

array_multisort($fruit11 , $veggi);

echo "<pre>";
print_r($fruit11);
echo "</pre>";


echo "<pre>";
print_r($veggi);
echo "</pre>";

$a1 = array ("apple","guava","graphs","orange");

$newArray = array_reverse($a1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>

<!-- ================================================ array traversing function use ============================================= -->

<?php

$fruit = array ("apple","guava","graphs","orange");

echo "<b> current :</b>" .current($fruit) ."<br>";  // show the current value of pointer in array 
echo "<b> key : </b>" .key($fruit) . "<br>";        // show the key of current pointer in array
echo "<b> position : </b>" .pos($fruit) . "<br>";   // show the position of the pointer in array

next($fruit); // pointer go to the next value from current value 

echo "<b> current :</b>" .current($fruit) ."<br>";
echo "<b> key : </b>" .key($fruit) . "<br>";
echo "<b> position : </b>" .pos($fruit) . "<br>";

next($fruit);

echo "<b> current :</b>" .current($fruit) ."<br>";
echo "<b> key : </b>" .key($fruit) . "<br>";
echo "<b> position : </b>" .pos($fruit) . "<br>";

prev($fruit);  // come back to the previous value from current value 

echo "<b> current :</b>" .current($fruit) ."<br>";
echo "<b> key : </b>" .key($fruit) . "<br>";
echo "<b> position : </b>" .pos($fruit) . "<br>";

prev($fruit);

echo "<b> current :</b>" .current($fruit) ."<br>";
echo "<b> key : </b>" .key($fruit) . "<br>";
echo "<b> position : </b>" .pos($fruit) . "<br>";

end($fruit);  // internal pointer go to the last value of array 

echo "<b> current :</b>" .current($fruit) ."<br>";
echo "<b> key : </b>" .key($fruit) . "<br>";
echo "<b> position : </b>" .pos($fruit) . "<br>"; 

// echo "<pre>";
// print_r(each($fruit));
// echo "</pre>";

reset($fruit); // it is reset the array and go to the first value of an array 
echo "<b> current :</b>" .current($fruit) ."<br>";  // show the current value of the array 
echo "<b> key : </b>" .key($fruit) . "<br>";  // show the current key of the value 
echo "<b> position : </b>" .pos($fruit) . "<br>";  // show the current position of the array 


reset($fruit);
echo "<b> current :</b>" .current($fruit) ."<br>";
echo "<b> key : </b>" .key($fruit) ."<br>";
echo "<b> position : </b>" .pos($fruit) . "<br>";

?>

<!-- =============================================== array explode and implode function ============================================== -->
<?php
$str = ("hello i am kalp patel");

$array = explode(" ", $str);  // seperate the string after every space in different different array

echo "<pre>";
print_r($array);
echo "</pre>";

$str2 = ("hello i am kalp patel");

$arr = explode (" ", $str , 2); // seperate the string in 2  using limit function 

echo "<pre>";
print_r($arr);
echo "</pre>";

$str3 = ("hello i am kalp patel");

$arr1 = explode(" ", $str3 , -2);  // aa function ma negative value mukta ae string sivay ni biji string print kare che  

echo "<pre>";
print_r($arr1);
echo "</pre>";

$array1 = ["hello","i","am","kalp","patel"];

$str4 = implode(" ",$array1); // combie the array and make a string using the implode function 

echo $str4;
?>

<!-- ================================== array str_split and chunk_split function use =============================== -->

<?php

$str = ("kalp patel");

$array = str_split($str);  // it is split the string in array

echo "<pre>";
print_r($array);
echo "</pre>";


$str1 = ("kalp patel");

$array1 = chunk_split($str1,1,"."); // it is used for the add the sign or mark in string after given the limit 

echo $array1;
?>

<!-- =========================================== array lowercase and upper case function use ============================================== -->

<?php

$str = ("Kalp Patel");

$new = strtolower($str); // convert string in lower case 
$new1 = strtoupper($str); // convert string in upper case 
$new2 = ucfirst($str); // convert string first character in uppercase
$new3 = ucwords($str); // convert the all string first latter in uppercase
$new4 = lcfirst($str); // convert string first character in lowercase

echo $new ."<br>";
echo $new1 ."<br>";
echo $new2 ."<br>";
echo $new3 ."<br>";
echo $new4 ."<br>";
?>

<!-- ============================================= array length and count function use ========================================= -->

<?php

$str = "hello world";

echo strlen($str);
echo "<br>";

$str1 = "hello world";

echo str_word_count($str1);
echo "<br>";

$str2 = "hello world";

$array = str_word_count($str2 , 2);  // 0 used for count word , 1 is used for make array with key , 2 is used for make array with index number 

echo "<pre>";
print_r($array);
echo "</pre>";

$str3 = "hello world . the world is nice.";

echo substr_count($str3 , "world");

$str4 = "hello friends. welcome to the world of brain. this it world is based on your skills and talent.";

echo substr_count($str4,"world",1,35); // 1 is the starting point and 35 is ending point , the function find the word in between 1 and 35 number character 

?>

<!-- ============================================= array search and find position function use ========================================= -->

<?php

$str = "hello world , php is the best for coder it is very easy and understable";

echo strpos($str,"php");
echo "<br>";
$str1 = "hello world , php is the best for coder.php is very easy and understable";

echo strpos($str1,"php",35);
echo "<br>";
$str2 = "hello world , php is the best for coder.php is very easy and understable";

echo strrpos($str2,"php");

?>

<!-- =========================================== php string substr function use =================================================== -->

<?php

$str =("hello world. welcome to the world of mind.this workspace for only tellanted and minded person.");

echo substr($str , 15); // 15 is the startin point after the starting point the function print the substring 

echo "<br>";

$str =("hello world. welcome to the world of mind.this workspace for only tellanted and minded person.");

echo substr($str , 15 , -20); // 15 is starting and -20 is ending point the function will print the string between limit 

?>
<!-- =================================================php string replace function ==================================== -->

<?php

$str = ("hello world, the world is nice.");

echo str_replace("world","earth",$str); // used for the replace the word in string  

echo "<br>";

$str = ("hello world, the world is nice.");

$find =["hello","world"];
$replace =["hi","earth"];

echo str_replace($find,$replace,$str); // used for replace the multiple word in string

$arr =["red","yellow","blue","pink"];
echo "<pre>";
print_r(str_replace("pink","black",$arr)); // it is used for replace the value in array
echo "</pre>";

$str = ("hello world, the world is nice.");
echo substr_replace($str1,"earth",6); //this is replace the earth word after the given position in whole string 

echo "<br>";

$str1 = ("hello world, the world is nice.");
$array = ["hello"=>"hi","world"=>"earth"];

echo strtr($str1,$array); 
?>

<!-- ============================================= php string compare function ===================================================== -->
<?php

echo strcmp("hello world","hello world"); // compare the string and give the output 0 , negative , posative



?>
<!-- =============================================php string reverse function ==================================== -->

<?php
      echo strrev("kalp patel"); // reverse the string using this function
      echo "<br>";
      echo str_shuffle("kalp patel"); // reverse the string in random order                           
?>
<!-- ======================================= php str_pad and str_repeat function ======================================== -->

<?php

$str = "hello world";

echo str_pad($str,20,".");  // give the padding till position of 20 number 
  echo "<br>";

  echo str_pad($str,20,".",STR_PAD_LEFT); //give the padding in left side 
    echo"<br>";

    $str5 = "kalp patel";
    echo str_repeat($str5, 5); //repeat the string 
echo "<br>";
    $str6 = "KALP";
    echo str_repeat($str6 , 10); // repeat the string 
    
?>

<!-- ======================================== php string trim & chop function====================================== -->

<?php

$str = "Yahoo Baba";

echo $str ."<br>";
echo trim($str , "ba"); // trim the extra space and given word 
echo "<br>";
echo rtrim($str,"a"); // trim the given word from right side 
echo "<br>";
echo ltrim($str,"Ya"); // trim the given word from left side 
echo "<br>";
echo chop($str , "Yba"); // trim the given word from right side 
  
?>

<!-- ==================================== php Md5 and Sha1 function use ========================================== -->

<?php
$str = "hello world";
echo "the string :" .$str . "<br><br>";

echo "md5 Binary :" . md5($str,TRUE) . "<br><br>"; // it is secure the password in binary form
echo "md5 HEX :" . md5($str) . "<br><br>"; // it is secure the password in the HEX form 

echo "sha1 Binary :" . sha1($str,TRUE) . "<br><br>"; // it is same as md5
echo "sha1 HEX :" . sha1($str) . "<br><br>"; // it is same as md5

?>
<!-- ================================================= php convert_uuencode and convert_uudecode function use =================================== -->

<?php

$str = "hello world";

echo convert_uuencode($str); // encode the string 

$str1 = "kalp patel";

$encode = convert_uuencode($str1);  // it is encode the string
echo $encode;

$decode = convert_uudecode($encode); // it is decode the encoded string
echo $decode;
?>

<!-- ========================================== php string bin2hex and hex2bin function use ======================================== -->

<?php

$str = "kalp patel";
$hex = bin2hex($str); // it is convert the string in hexa form 
echo $hex ."<br>";

$bin = hex2bin($hex); // it is convert the hexa form in binary
echo $bin;

?>

<!-- ================================= chr() and ord() function use ================================================== -->

<?php

$str = chr(65); // it is print the character of this ascii value
echo $str ."<br>";

$str1 = ord("B"); //it is print the ascii value of given character 
echo $str1;
?>

<!-- ============================ php strip_tags and wordwrap function use ============================================= -->

<?php

$str = "kalp <b>patel</b>. kalp <i>patel</i>";

echo $str ."<br>";

$str1 = "kalp <b>patel</b>. kalp <i>patel</i>";

echo strip_tags($str,"<b>"); // it is used for allow the tags in string 
echo "<br>";
$str2 = "Php is very easy and understandable language";

echo wordwrap($str2 ,2, "<br>", TRUE); // it is used for the wrap the string (after one space going to new line)
 
?>
<!-- ============================================= math indiv,sqrt,pow function use ========================================= -->
 <?php

echo intdiv(8,4); // it is divide the value
echo "<br>";
echo sqrt(25); // find the squreroot of value 
echo "<br>";
echo pow(4,4); // find the power of the given value

 ?>

 <!-- =========================================== php rand() and mt_rand and lcg_value function use =========================================== -->

 <?php

echo (rand() ."<br>"); // give the random number 
echo (rand() ."<br>"); // give the random number 
echo (rand(0,10) ."<br>"); // give the random number using limits which is given 
echo (rand(11,50) ."<br>"); // give the random number using limits which is given 
?>

<!-- =================================================== php date() function use ============================================= -->
 <?php

echo "Today is :" . date("d") ."<br>";
echo "Today is :" . date("jS") ."<br>";
echo "Month is :" . date("F") ."<br>";
echo "Month is :" . date("m") ."<br>";
echo "Month is :" . date("n") ."<br>";
echo "Month is :" . date("M") ."<br>";
echo "Year is :" . date("Y") ."<br>";
echo "Year is :" . date("y") ."<br>";
echo "Full date is :" .date("d/m/Y");
?>

<!-- ==================================================php time function use =============================================== -->
 <?php
date_default_timezone_set("Asia/kolkata");
echo "the time is :" .date("h:i:sa") ."<br>";
echo "the time & date is :" .date("d/m/Y h:i:sa");
 ?>

 <!-- ================================================ php checkdate and date_diff function use ================================ -->

 <?php

echo checkdate(12,20,2025) ."<br>"; // it is check the date and give the output 1 means date is valid and 0 means date is not valid

if (checkdate(2,25,2025)== FALSE){
    echo "it is not valid date";
}else {
    echo "it is valid date";
}
echo "<br>";

if (checkdate(2,29,2025)== TRUE){
    echo "it is valid date";
}else{
    echo "it is not valid date";
}

$date1 = date_create("2013-12-15");
$date2 = date_create("2013-03-12");

$diff = date_diff($date1,$date2);

echo $diff->days . "days";

echo"<pre>";
print_r($diff);
echo"</pre>";

 ?>

<!-- ================================== php date_add(), date_sub() and date_modify() function use ======================================= -->

<?php

$date = date_create("2025-05-15");
date_add($date,date_interval_create_from_date_string("10 days")); // it is used for add the days in exhisting date

echo date_format($date , "d-m-Y");
echo "<br>";

$date1 = date_create("2024-05-15");
date_sub($date1,date_interval_create_from_date_string("15 days")); // it is used for the substract the days in exhisting date

echo date_format($date1, "d-m-Y");
echo "<br>";

$date2 = date_create("2003-10-14");
date_modify($date2 , "-10 days"); // it is used for substrct the days in exhisting date 

echo date_format($date2 , "d-m-Y");
echo "<br>";

$date3 = date_create("2003-09-30");
date_modify($date3 , "+4 days"); // it is used for add the days in exhisting date 

echo date_format($date3 , "d-m-Y");

?>

<!-- ====================================== php getdate(), gettimeofdays() and localtime() function use ============================================== -->

<?php

echo "<pre>";
print_r(getdate());
echo"</pre>";

echo "<pre>";
print_r(gettimeofday());
echo "</pre>";

echo "<pre>";
print_r(localtime(time(),TRUE));
echo "</pre>";

?>

<!-- =================================== php strtotime , strftime gmstrftime function use ============================================== -->

<?php

echo date("d-m-Y",strtotime("Now"));
echo "<br>";
$date = date_create("2015-10-2");

date_time_set($date , 13 ,20);
echo date_format($date , "d-m-Y H:i:s");

echo "<br>";

$date1 = date_create("2020-02-29");
date_time_set($date1 , 10,20,30);

echo date_format($date1,"d-m-Y H:i:s");

?>

<!-- ============================================= timezone function use ===================================================== -->

<?php

date_default_timezone_set("Asia/kolkata");
echo date_default_timezone_get() ."<br>";

$tz = timezone_open("Europe/Paris");
echo timezone_name_get($tz) ."<br>";

echo"<pre>";
print_r(timezone_location_get($tz));
echo"</pre>";

$kk = timezone_open("Asia/kolkata");
echo timezone_name_get($kk) ."<br>";

echo "<pre>";
print_r(timezone_location_get($kk));
echo "</pre>";

// echo"<pre>";
// print_r(timezone_identifiers_list());
// echo"</pre>";

?>
</body>
</html>

Yash

