 <?php
include("connection.php"); 
error_reporting(0);
$query = "select * from  registration";
$data = mysqli_query($conn , $query);

$total= mysqli_num_rows($data);

$result= mysqli_fetch_assoc($data);

echo $result['first_name']." ".$result['last_name']." ".$result['gender']." ".$result['email']." ".$result['phone']." ".$result['address'];
// echo $total;

if($total != 0)
{
// echo "table has records";
}else{
    echo "no record found";
}
?>  