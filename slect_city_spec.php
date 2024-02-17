<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="with_slect_city.php" method="post">

   
المحافضة <select name="city" type="number">
            <option value="16"> كربلاء</option>
            <option value="1"> بغداد</option>
            <option value=" 2"> البصرة</option>
            <option value="3"> نينوى</option>
            <option value="4">اربيل </option>
            <option value="5">النجف </option>
            <option value="6"> ذي قار</option>
            <option value="7">كركوك </option>
            <option value="8"> الانبار </option>
            <option value="9"> صلاح الدين</option>
            <option value="10"> السليمانية</option>
            <option value="11 "> ديالى </option>
            <option value="12"> واسط</option>
            <option value="13">ميسان </option>
            <option value="14">المثنى </option>
            <option value="15"> بابل</option>

            <option value="17"> دهوك</option>
            <option value="18">القادسية </option>

        </select>
        <br>
        التخصص <select name="spec" type="number">
            <option value="1">جملة عصبية </option>
            <option value="2">اشعة وسونار </option>
            <option value="3"> عيون</option>
            <option value="4"> نسائية وتوليد</option>
            <option value="5">جلدية وتجميل </option>
            <option value="6"> اسنان</option>
            <option value="7">اورام </option>
            <option value="8">الطب الرياضي </option>
            <option value="9">المفاصل والروماتيزم </option>
            <option value="10">جراحة العضام والمفاصل والكسور </option>
            <option value="11">بولية وكلية </option>
            <option value="12">انف واذن وحنجرة </option>
            <option value="13"> جراحة القلب</option>
            <option value="14"> تخدير وعناية مركزة</option>
            <option value="15">امراض الدم </option>
            <option value="16">نفسية </option>
            <option value="17"> جراحة اطفال</option>
            <option value="18">اطباء اطفال </option>
            <option value="19"> جراحة العمود الفقري</option>
            <option value="20">باطنية </option>
            <option value="21">دماغ واعصاب </option>
            <option value="22">العقم واطفال الانابيب </option>
            <option value="23">التجميل والجراحة التجميلية </option>
            <option value="24">جراحة عامة وناضورية وجهاز هضمي </option>
            <option value="25"> صدرية وتنفسية</option>
            <option value="26">قلبية </option>
            <option value="27">وجه وفكين </option>
            <option value="28">علاج طبيعي وتأهيل طبي </option>
        </select>





<input type="submit" value="حفض">

</form>
</body>
</html>  
























<?php

// لعرض جميع معلومات جميع الاطباء
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


















$conn->close();

?>
