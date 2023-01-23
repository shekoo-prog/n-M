<?php 
 include 'config.php';
 include 'insert.php';
 include 'up.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assetes/css/bootstrap.css">
    <link rel="stylesheet" href="assetes/css/fontawesome.min.css">
    <title>N & M</title>
</head>
<body style='font-family:Courier'>
    
 <nav class="navbar navbar-dark bg-dark text-light">
     <div class="container-fluid">
       <a class="navbar-brand">
         <i class='fas fa-shopping-cart' style='font-size:1em'></i>  
         N & M</a>  
 </nav>

<div class="container-fluid">

<div class="bg-dark text-info my-2 p-3 text-center">
 <h3>Hello N & M &#128151;</h3> 
</div>

<a href="add.php" class="btn btn-danger">Add  New Category</a> <hr>

<div class="row">  
<?php
 $rows = mysqli_query($conn, "SELECT * FROM `catog`");
 while($row = mysqli_fetch_array($rows)){
    $id         =$row['id'];
    $name       =$row['name'];
    $description=$row['parg'];
    $price      =$row['price'];
    $image      =$row['image'];
      echo "
      <div class='col-lg-3'>
      <center>
        <div class='card mb-2' style='width:100%; background-color:rgb(201, 226, 255);'>
          <img class='card-img-top' style='height: 210px;' src='$image' alt='Card image'>
        <div class='card-body'>
          <p class='card-title fw-bolder'  style='font-size:1.4em; Color:Black;'>$name</p>
          <p class='card-text fw-semibold' style='font-size:1.1em; Color:green;'>$description</p>
          <p class='card-text fw-light' style='font-size:1.2em; Color:Gray;'>$$price</p>
          <a href='update.php?id=$id' class='btn btn-primary'>update</a>
          <a href='del.php?id=$id' class='btn btn-danger'>delete</a>
        </div>
        </div>
      </center>
      </div>
      ";
  }
  ?>
</div>
<!-- footer -->
 <footer class="footer bg-dark text-light p-3">
     <center>
      <p> copy rights &copy; <span> N & M 2023</span></p>
     </center>
 </footer>
 
<!-- scripts -->
  <script src="assetes/js/fontawesome.min.js"></script>
  <script src="assetes/js/bootstrap.js"></script>
  <script src="assetes/js/popper.min.js"></script>
  <script src="assetes/js/jquery-3.6.1.min.js"></script>
</body>
</html>