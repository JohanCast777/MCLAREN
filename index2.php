<?php 
    require_once("classes\classes.php");
    $tra=new Trabajo();
    $tra1=$tra->trae_noticias_s();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\index2.css">
    <link rel="shortcut icon" href="icons\dd.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>MCLAREN</title>
</head>
<body>

<!--NAVBAR-->
<nav id="header">
        <div id="logo">
            <a href="#"><img src="images\logo.png" alt="img3" class="img3"></a>
		</div>
        <ul class="nav">
            <li><a href="index2.php"class="a">HOME</a></li>
            <li><a  class="a">CRUDS TOOLS &nbsp;&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
              </svg></a>
                <ul>
                    <li><a href="crud_noticias.php">EDIT NEWS</a></li>
                    <li><a href="crud_users.php">EDIT USERS</a></li>
                    <li><a href="Upload-pictures.php">ADD PICTURE</a></li>
                </ul>
            </li>
            <li><a href="news.php"class="a">NEWS</a></li>
            <li><a class="a">SIGN IN &nbsp;&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
              </svg></a>
                <ul>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="singnup.php">REGISTER</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!--SLIDER-->
<div class="container">
         <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><h2>Jupiter drivers looking to learn more about the aspects and features of the McLaren model line should explore our handy McLaren brochures below. 
                </h2><img src="images\imagen1.jpg" alt="imagen1"></div>
                <div class="swiper-slide"><h2>Hola this is a test</h2><img src="images\imagen2.jpg" alt="imagen2"></div>
                <div class="swiper-slide"><h2>Hola this is a test</h2><img src="images\imagen3.jpg" alt="imagen3"></div>
                <div class="swiper-slide"><h2>Hola this is a test</h2><img src="images\grey.jpg" alt="imagen4"></div>
            </div>
                <!-- If we need pagination -->
                <!--<div class="swiper-pagination"></div>-->
  
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        
    </div>    

<!--------------------------------IMPORTACION PAGINA EXTERNA PARA ESTILO DE SLIDER------------------------------>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        autoplay:{
            delay:6000, 
            disableOnInteraction:false,
            transition:2000,

        },
        loop: true,
      
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      
        // And if we need scrollbar
        scrollbar: {
          el: '.swiper-scrollbar',
        },
      });</script>

</body>
</html>