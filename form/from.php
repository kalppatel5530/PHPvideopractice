
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $city = trim($_POST['city']);
    $bio = trim($_POST['bio']);

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }

    if (empty($city)) {
        $errors[] = "City selection is required.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<a href='index.php'>Go Back</a>";
    } else {
        echo "<h3 style='color:green;'>Form Submitted Successfully</h3>";
    }
}
?>


<?php
//print_r($_POST);
if(isset($_POST['name'])){
    echo "user name is ". $_POST['name'];
    echo "<br>";
    echo "user email is ". $_POST['email'];
    echo "<br>";
    echo "user password is ". $_POST['password'];
    echo "<br>";
    echo "user skills is ". implode(",",$_POST['skills']);
    echo "<br>";
    echo "user gender is ". $_POST['gender'];
    echo "<br>";
    echo "user city is ". $_POST['city'];
    echo "<br>";
    echo "user bio is ". $_POST['bio'];
    echo "<br>";
}

?>