<?php
include('db.php');
$query = "select * from users";
$result = mysqli_query($conn , $query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Fetch data from database in Php</title>
</head>
<body class="bg-dark">
   <div class="container">
    <div class="row mt-5">
       <div class="col">
         <div class="card mt-5">
           <div class="card-header">
            <h2 class="display-6 text-center">Fatch data from Php</h2>
         </div> 
         <div class="card-body">
            <table class="table table-bordered text-center">
            <tr class="bg-dark text-white">
                <td>User Id</td>
                <td>User Name</td>
                <td>Last Name</td>
                <td>Email </td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            
            
            <tr>
                <?php   
                   while($row = mysqli_fetch_assoc($result)){
                    ?>
                       
                       <td><?php echo $row['user_id'];  ?></td>
                       <td><?php echo $row['name'];  ?></td>
                       <td><?php echo $row['last'];  ?></td>
                       <td><?php echo $row['email'];  ?></td>
                       <td><a href="#" class="btn btn-primary">Edit</a></td>
                       <td><a href="#" class="btn btn-danger">Delete</a></td>
                       </tr>
                    <?php
                   }

?>
            
            </table>

         </div>
       </div> 
     </div> 
   </div> 
</div> 

</body>
</html>