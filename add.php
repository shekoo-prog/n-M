<?php
 include 'insert.php';
?>
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
   <center> <h2>Add new catogary</h2> </center>
  </div>

 <div class="card-body" style='font-size:1.3em'>
  <form method="post" enctype="multipart/form-data" action="admain.php" >  
   <div class="mb-3">
    <label for="name" class="form-label">Name :</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
   </div>
 
   <div class="mb-3">
     <label for="description" class="form-label">description :</label>
     <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
   </div>

   <div class="mb-3">
     <label for="price" class="form-label">price :</label>
     <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
   </div>

   <div class="mb-3">
     <label for="type" class="form-label">type :</label>
     <select class="form-select mt-3" id="type" name="type">
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
     <label for="image" class="form-label">image :</label>
     <input class="form-control" type="file" name="image" id="image" multiple>
   </div>
 
  <div class="card-footer bg-dark">
    <center><button type="submit" name="save" class="btn btn-primary">Save</button></center>
  </div>
  </form>
 </div>
</div>
<!-- scripts -->
  <script src="assetes/js/fontawesome.min.js"></script>
  <script src="assetes/js/bootstrap.js"></script>
  <script src="assetes/js/popper.min.js"></script>
  <script src="assetes/js/jquery-3.6.1.min.js"></script>
</body>
</html>