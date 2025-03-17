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
            .update 
            {
                background-color:green;
                color:white;
                border:0;
                outline: none;
                border-radius:5px;
                height:22px;
                width:80px;
                font-weight:bold;
                cursor:pointer;
            }
            .delete 
            {
                background-color:red;
                color:white;
                border:0;
                outline: none;
                border-radius:5px;
                height:22px;
                width:80px;
                font-weight:bold;
                cursor:pointer;
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
<table border="1" cellspacing="8" width="100%" align="center">
    <tr>
    <th width="5%">ID</th>
    <th width="5%">Image</th>
    <th width="8%">First name</th>
    <th width="8%">Last name</th>
    <th width="10%">gender</th>
    <th width="20%">email</th>
    <th width="10%">phone</th>
    <th width="5%">Caste</th>
    <th width="5%">Language</th>
    <th width="22%">address</th>
    <th width="12%">Operation</th>
</tr>

    <?php
while($result= mysqli_fetch_assoc($data)){
echo " <tr>
    <td>".$result['id']."</td>

    <td><img src = '".$result['std_img']."' height='100px' width='100px'></td>

    <td>".$result['first_name']."</td>
    <td>".$result['last_name']."</td>
    <td>".$result['gender']."</td>
    <td>".$result['email']."</td>
    <td>".$result['phone']."</td>
    <td>".$result['caste']."</td>
     <td>".$result['language']."</td>
    <td>".$result['address']."</td>

    <td><a href='update_design.php?id=$result[id]'><input type='submit' value='update' class='update'></a>

    <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick = 'return checkdelete()'></a></td>
</tr>";

   
}
}else{
    echo "no record found";
}
?>
</table>
<script>
    function checkdelete()
    {
        return confirm('Are you sure to want to delete this record ?');
    }

    </script>
</html>  
