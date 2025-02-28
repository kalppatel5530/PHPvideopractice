aa le code taro <?php

if (isset($_FILES['image']) && isset($_POST['submit'])) {
  // echo"<pre>";
  // print_r($_FILES);
  // echo"</pre>";

  $file_name = $_FILES['image']['name'];
  //echo $file_size = $_FILES['image']['size'] ."<br>";
  $temp = $_FILES['image']['tmp_name'];
  //echo $file_type = $_FILES['image']['type'];

  if (move_uploaded_file($temp, "./uploaded_image/" . $file_name)) {
    echo "Inserted";
  } else {
    echo "error";
  }
}

?>

<html>

<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image"><br><br>
    <input type="submit" name="submit" value="Upload">

  </form>
</body>

</html>