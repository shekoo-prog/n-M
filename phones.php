<p><span>p</span>h<span>o</span>n<span>e</span>s</p>

<div class="row justify-content-center">  
<?php
include 'config.php';
$rows = mysqli_query($conn, "SELECT * FROM `catog` WHERE type = 'phones'");
while($row = mysqli_fetch_array($rows)){
  $id         =$row['id'];
  $name       =$row['name'];
  $description=$row['parg'];
  $price      =$row['price'];
  $image      =$row['image'];
  $type       =$row['type'];
    echo "
    <div class='col-lg-3'>
    <center>
      <div class='card mb-2' style='width:100%; background-color:rgb(201, 226, 255);'>
        <img class='card-img-top' style='height: 210px;' src='$image' alt='image'>
      <div class='card-body'>
        <p class='card-title fw-bolder'   style='font-size:1.4em; Color:rgb(0, 23, 45);'>$name</p>
        <p class='card-text  fw-semibold' style='font-size:1.1em; Color:black;'>$description</p>
        <p class='card-text  fw-light'    style='font-size:1.2em; Color:Gray;'>$$price</p>
        <div>
        <a href='https://api.WhatsApp.com/send?phone=+201028396252 &text=
        اسم المنتج :$name ,
        وصف المنتج :$description ,
        سعر المنتج :$price'>
        <img src='https://img.icons8.com/bubbles/100/000000/whatsapp.png' style='width:23%'></a>
        </div>
      </div>
      </div>
    </center>
    </div>
    ";  
}
?>