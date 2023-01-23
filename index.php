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
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
      }
      .body{
        font-family: 'Courier New', Courier, monospace;
      }
      .t1 p{
        display: flex;
        justify-content: center;
        color:crimson;
        font-size: 2.5em;/*حجم الخط*/
        font-weight: 550; /*تخانة الخط*/
        letter-spacing: 1px; /*بيسيب مسافة بين الحروف */
        margin-bottom: 15px;
        margin-top: 15px;
      }
      .t1 p span{
         color:rgb(62, 230, 11);
         font-size: 1.2em;
         font-weight: 400;
      }
      .card{
        background-color: azure;
        border: 2px solid rgb(5, 5, 5);
        overflow: hidden;
        border-radius: 30px;
      }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-dark bg-dark text-light">
        <div class="container-fluid">
          <a class="navbar-brand">
          <img class="d-inline-block align-text-center" style='width:16%;' src='img/logo2.jpg' alt='image'>
            <!-- <i class='fas fa-shopping-cart' style='font-size:1em; color:crimson;'></i>   -->
            N & M</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#clothes">Clothes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#shoses">Shoses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#handmade">Handmade</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="#accessories">accessories</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="#makeup">Makeup</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="#phones">Phones</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="#mobilia">mobilia</a>
              </li>  
            </ul>
        </div>
      </nav>
      <div class="container-fluid">

   <marquee  direction="right" bgcolor="aliceblue"  
   onmouseover="this.stop();" onmouseout="this.start();">
   <h3 style="color: crimson;"> سبحان الله  -  الحمد لله  -  لا اله الا الله  -  الله أكبر  -  لا حول ولا قوة إلا بالله</h3> 
   </marquee>

<!-- section main -->
  <section>
    <div class="bg-dark bg-opacity-70 text-danger d-flex justify-content-center" style="height:490px;">
      <center class="pt-5">
          <h2 class="pt-5"> &#128525; <br>
          <span>welcome to N & M Store</span><br>
          <span>IT'S NICE TO MEET YOU </span><br>
          </h2>

          <form class="d-flex pt-4" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          </center>
    </div>  
  </section>
<!-- clothes -->
  <section class="t1" id="clothes">
  <?php include "clothes.php";?>
  </section> 

<!-- Shoses -->
  <section class="t1" id="shoses">
   <?php include "shoses.php";?>
  </section> 

<!-- Handmade -->
  <section class="t1" id="handmade">
<?php include 'handmade.php'?>
  </section> 

<!-- Accessories -->
  <section class="t1" id="accessories">
<?php include 'accessories.php'?>
  </section> 

<!-- Makeup -->
  <section class="t1" id="makeup">
<?php include 'makeup.php'?>
  </section> 

<!-- Phones -->
<section class="t1" id="phones">
<!-- <?php include 'phones.php'?> -->
</section>
 
<!-- mobilia -->
<section class="t1" id="mobilia">
<!-- <?php include 'mobilia.php'?> -->
</section>
</div>
      
    <footer>
        <center>
        <div class="footer bg-dark text-light p-4 h5">
         <p> copy rights &copy; <span> N & M 2023</span></p>
          
        </div>
        </center>
    </footer>
<!-- scripts -->
  <script src="assetes/js/fontawesome.min.js"></script>
  <script src="assetes/js/bootstrap.js"></script>
  <script src="assetes/js/popper.min.js"></script>
  <script src="assetes/js/jquery-3.6.1.min.js"></script>
</body>
</html>