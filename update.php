<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="assetes/css/bootstrap.css">
    <link rel="stylesheet" href="assetes/css/fontawesome.min.css">
    <title>N & M</title>
</head>
<body style='font-family:Monospace ;'> 
<nav class="navbar navbar-dark bg-dark text-light">
  <div class="container-fluid">
    <a class="navbar-brand" style='font-size:1.5em'>
      <i class='fas fa-shopping-cart' style='font-size:1em ; color:rgb(190, 0, 38);'></i>  
      N & M</a>  
      <center>
       <p> Devolp by Eng. Abo obaida</p>
       <a href="#"><i class="fab fa-whatsapp" style="font-size: 1.5em;"></i></a>
      </center>
</nav>
 
<div class="container-fluid py-5">
 <div class="card bg-secondary mt-4" style='color:rgb(0, 241, 0)'>
  <div class="card-header bg-dark">
   <center> <h2>update catogary</h2> </center>
  </div>

 <div class="card-body" style='font-size:1.3em'>

 <?php
 include 'up.php';
 $id = $_GET['id'];
 $rows = mysqli_query($conn, "SELECT * FROM `catog` WHERE id=$id");
 $row = mysqli_fetch_array($rows);
 ?>
  <form method="post" enctype="multipart/form-data" action="admain.php" >  
   
  <div class="mb-3">
    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>" >
   </div>

   <div class="mb-3">
    <label for="name" class="form-label">Name :</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'];?>">
   </div>
 
   <div class="mb-3">
     <label for="description" class="form-label">description :</label>
     <input type="text" class="form-control" id="description" name="description" value="<?php echo $row['parg'];?>">
   </div>

   <div class="mb-3">
     <label for="price" class="form-label">price :</label>
     <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price'];?>">
   </div>

   <div class="mb-3">
     <label for="type" class="form-label">type :</label>
     <select class="form-select mt-3" id="type" name="type">
       <option selected><?php echo $row['type'];?></option>
       <option>Clothes</option>
       <option>Shoses</option>
       <option>Handmade</option>
       <option>accessories</option>
       <option>Makeup</option>
       <option>Phones</option>
       <option>mobilia</option>
     </select> 
   </div> 

   <div class="form mb-3">
     <img class='card-img-top mb-2' src='<?php print_r($row['image']);?>' alt='Card image' style="width: 23%;height: auto;"> 
     <input class="form-control" type="file" id="image" name="image">
     <input class="form-control" type="hidden" id="image" name="old_image" value="<?php print_r($row['image']);?>">
   </div>
 
  <div class="card-footer bg-dark">
    <center><button type="submit" name="up" class="btn btn-primary">update</button></center>
  </div>
  </form>
</div>
</div>
</div>
<!-- scripts -->
  <script src="assetes/js/fontawesome.min.js"></script>
  <script src="assetes/js/bootstrap.js"></script>
  <script src="assetes/js/popper.min.js"></script>
  <script src="assetes/js/jquery-3.6.1.min.js"></script>
</body>
</html>