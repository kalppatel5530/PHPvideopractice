<?php

include('connect.php');
echo "<br>";

$query = "select * from kkp";

$result = $conn ->query($query);

if($result -> num_rows>0){
    while($rows =$result -> fetch_assoc()){
        echo $rows['name'] . " - " . $rows['age'] . " - " . $rows['phone'] . "<br>";
    } 
}else{
    echo "record not found";
}

$conn -> close();
?>