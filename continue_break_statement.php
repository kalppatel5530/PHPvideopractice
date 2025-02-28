<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Break ststement example
for ($i = 1; $i <= 10 ; $i++){
    if($i == 3){
        break;
    }
    echo "number : $i <br>";
}

// Continue statement example

for ($a = 1; $a <=10; $a++){
    if($a == 3){
        continue;
    }
    echo "number is : $a<br>";
}
echo "<br>";
// Goto ststement example

for ($x = 1; $x < 10; $x++){
    if ($x == 6){
        
        goto abc;
    }
    echo "the number is:$x<br>";
    
}
abc:
    echo  "hello kalp";
    ?>
</body>
</html>