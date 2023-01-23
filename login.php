<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="assetes/css/bootstrap.css">
    <link rel="stylesheet" href="assetes/css/stylelogin.css">
    <title>login</title>
</head>
<body>
    
    <div class="bg-dark text-info my-2 p-3 text-center">
      <h3>Hello Admain &#128151;</h3>  
    </div>

    <div class="box">
     <h2>Login</h2>

    <form method="post" action="login.php">
        <div class="inputbox">
            <input type="name" name="nameu" required>
            <label>user name</label>
        </div>
        <div class="inputbox">
            <input type="password" name="password" required>
            <label>password</label>
        </div>
        <center><input type="submit" name="login" value="login"></center> 
    </form>
    </div>
<?php
if(isset($_POST['login'])):
    $nameu    = $_POST['nameu'];
    $password = $_POST['password'];
    $rows = mysqli_query($conn, "SELECT * FROM `customer` WHERE nameu= '$nameu' and password = '$password'");
    $row  = mysqli_fetch_array($rows);
    
if ($row):
    header("location:admain.php");
    else:
    echo "<script> alert('خطأ فى تسجيل الدخول !!!') </script>";   
endif;
endif;

?>
</body>
</html>