<?php
$cookie_name = "user";
$cookie_value = "kalp patel";

setcookie($cookie_name , $cookie_value , time()+ (3600),"/");

?>
<html>
    <body>
        <?php

        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie is not set";
        }else{
               echo $_COOKIE[$cookie_name];
        }
     


?>
</body>
</html>
<br>

<?php

$cookie_name="users";
$cookie_value="hello world";

setcookie($cookie_name , $cookie_value, time()+ (5),"/");
?>

<html>
    <body>
      <?php
   if(!isset($_COOKIE[$cookie_name])){
    echo "cookie is not set";
   }else{
    echo $_COOKIE[$cookie_name];
   }
      ?>

    </body>
</html>

