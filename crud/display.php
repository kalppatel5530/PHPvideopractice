 <html>
    <head>
        <title>Display</title>
        <style>
            body{
                background : #d071f9;
            }
            table{
                background-color: white;
            }
        </style>
    </head>
    </html>
 
 
 <?php
include("connection.php"); 
error_reporting(0);
$query = "select * from  registration";
$data = mysqli_query($conn , $query);

$total= mysqli_num_rows($data);




// echo $total;

if($total != 0)
{
    ?>
    <h2 align="center"><mark>Displaying all records</mark></h2>
<table border="1" cellspacing="7" width="85%" align="center">
    <tr>
    <th width="10%">First name</th>
    <th width="10%">Last name</th>
    <th width="10%">gender</th>
    <th width="20%">email</th>
    <th width="10%">phone</th>
    <th width="25%">address</th>
</tr>

    <?php
while($result= mysqli_fetch_assoc($data)){
echo " <tr>
    <td>".$result['first_name']."</td>
    <td>".$result['last_name']."</td>
    <td>".$result['gender']."</td>
    <td>".$result['email']."</td>
    <td>".$result['phone']."</td>
    <td>".$result['address']."</td>
</tr>";

   
}
}else{
    echo "no record found";
}
?>
</table>
</html>  
