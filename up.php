<?php
 include 'config.php';

  if (isset($_POST['up'])) {
    $id             = $_POST['id'];
    $name           = $_POST['name'];
    $description    = $_POST['description'];
    $price          = $_POST['price'];
    $type           = $_POST['type'];
    $image_name     = $_FILES['image']['name'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_size     = $_FILES['image']['size'];
    $image_error    = $_FILES['image']['error'];
    $image_up       = 'img/' . $image_name;
    $old_image      = $_POST['old_image'];
    $update = "UPDATE `catog` SET `name`='$name',`image`='$image_up',`price`='$price',`parg`='$description',`type`='$type' WHERE id=$id";
    mysqli_query($conn, $update);
    if (move_uploaded_file($image_location, $image_up)) {
      if($image_size > 10000){
        echo "<script> alert(' الصورة حجمها كبير وهتخلى الموقع بطيئ .. بعد أذنك غيرها لو متاح !!!') </script>";
      }
     unlink($old_image);
      echo "<script> alert('تم التحديث') </script>";
    }
  }
?>