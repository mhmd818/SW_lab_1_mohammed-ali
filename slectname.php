<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="with_slect_name.php" method="post">

   
اسم الطبيب <input type="text" name="name">

<input type="submit" value="حفض">

</form>
</body>
</html>  

<?php


$host = "localhost";
$database = "app";
$username = "root";
$password = "";


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT full_name,location,discription,nots,cityes.city_name,spec.name ,phone FROM doctors
JOIN cityes on(doctors.city_id=cityes.id) 
JOIN spec on (doctors.spec_id=spec.id)";


$result = $conn->query($sql);


if ($result->num_rows > 0) {
  
  while ($row = $result->fetch_assoc()) {
  
    
    $full_name = $row['full_name'];
    $location = $row['location'];
    $discription = $row['discription'];
    $nots = $row['nots'];
    $city_id = $row['city_name'];
    $spec_id = $row['name'];
    $phone = $row['phone'];

  
    
echo "<div class='mydiv'>";
echo "<p>اسم الطبيب: $full_name</p>";
echo "<p>موقع العيادة: $location</p>";
echo "<p>الوصف: $discription</p>";
echo "<p>الملاحضات: $nots</p>";
echo "<p>المحافضة: $city_id</p>";
echo "<p>التخصص: $spec_id</p>";
echo "<p>رقم هاتف الحجز: $phone</p>";
echo "</div>";
  }
} else {
  echo "No doctors found";
}
