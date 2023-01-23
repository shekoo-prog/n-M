<?php
 include 'config.php';
if (isset($_POST['save'])) {
   $name = $_POST['name'];
   $description = $_POST['description'];
   $price = $_POST['price'];
   $type = $_POST['type'];
   $image_name = $_FILES['image']['name'];
   $image_location = $_FILES['image']['tmp_name'];
   $image_size = $_FILES['image']['size'];
   $image_type = $_FILES['image']['type'];
   $image_error = $_FILES['image']['error'];
   $image_up = 'img/' . $image_name;
   $allowed = array('image/jpg', 'image/jpeg', 'image/png', 'image/gif');

   if (in_array($image_type, $allowed)) {
      $insert = "INSERT INTO `catog` (`name` , `image` , `price` , `parg` , `type`) 
                 VALUES ('$name','$image_up','$price','$description','$type')";
      mysqli_query($conn, $insert);
      if (move_uploaded_file($image_location, $image_up)):
         if ($image_size > 100000) {
            echo "<script> alert(' الصورة حجمها كبير وهتخلى الموقع بطيئ .. بعد أذنك غيرها لو متاح !!!') </script>";
         }
         echo "<script> alert('تم رفع المنتج') </script>";
      endif;
   }
}     
?>