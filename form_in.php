<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        الاسم الكامل <input type="text" name="name">
        <br>
        <br>
        رقم هاتق الحجز <input type="text" name="phone">

        <br>
        <br>
        موقع العيادة <input type="text" name="location">
        <br>
        <br>
        وصف الدكتور <input type="text" name="discription">
        <br>
        <br>

        الملاحضات <input type="text" name="nots">

        <select name="city" type="number">
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











        <br>
        <br>
        <input type="submit" value="حفض">










    </form>
</body>

</html>
<?php
  
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "app";
  $conn =  mysqli_connect($servername, $username, $password, $dbname);

  
  if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
  }

  
  $name = $_POST["name"]?? '';
  $phone = $_POST["phone"]?? '';
  $city = $_POST["city"]?? '';
  $location = $_POST["location"]?? '';
  $discription = $_POST["discription"]?? '';
  $nots = $_POST["nots"]?? '';
  $spec = $_POST["spec"]?? '';


  
  $sql = "INSERT INTO  doctors (full_name,phone,city_id,location,discription,nots,spec_id) VALUES ('$name','$phone',$city,'$location', '$discription','$nots', $spec)";

  
  if ($conn->query($sql) === TRUE) {
    echo "تمت إضافة البيانات بنجاح";
  } else {
   
  }


  $conn->close();
  
?>
 
