<?php
$server = "localhost";      // إسم الخادم أو عنوان IP
$username = "root";         // إسم المستخدم للولوج لقاعدة البيانات
$password = "";             // كلمة المرور
$database = "nana";         // اسم قاعدة البيانات

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn):
    die(mysqli_error($con));
endif;
?>