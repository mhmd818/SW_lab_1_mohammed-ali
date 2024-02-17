<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="اسم المستخدم">
        <input type="password" name="password" placeholder="كلمة المرور">
        <input type="submit" value="تسجيل الدخول">
      </form>
      
</body>
</html>






<?php

$username = $_POST['username']?? '';
$password = $_POST['password']?? '';


$connection = mysqli_connect("localhost", "root", "", "app");


if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}


$query = "SELECT * FROM user WHERE username = '$username' AND pas = '$password'";

$result = mysqli_query($connection, $query);

if ($result->num_rows > 0) {
  
  
  header("Location: form_in.php");
} else {
  
 
}

mysqli_close($connection);

?>
