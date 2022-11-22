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
    <link rel="stylesheet" href="styles\index.css">
    <link rel="shortcut icon" href="icons\dd.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>Mclaren</title>
</head>
<body>

<!--NAVBAR-->
<nav id="header">
        <div id="logo">
            <a href="#"><img src="images\logo.png" alt="img3" class="img3"></a>
		</div>
        <ul class="nav">
            <li><a href="index2.php"class="a">HOME</a></li>
            <li><a  class="a">TOOLS &nbsp;&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
              </svg></a>
                <ul>
                    <li><a href="crud_noticias.php">ADD</a></li>
                    <li><a href="upload_img.php">VERIFY</a></li>
                </ul>
            </li>
            <li><a href="crud_noticias.php"class="a">NEWS</a></li>
            <li><a class="a">SIGN IN &nbsp;&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
              </svg></a>
                <ul>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="registrarse.php">REGISTER</a></li>
                </ul>
            </li>
        </ul>
    </nav>
<!--NEWS-->

    <div class="news">
        <?php

            for($i=0;$i<count($tra1);$i++)
                {				
                    $titulo=$tra1[$i]["titulo_not"];
                    $c_noticia=$tra1[$i]["detalle_not"];
                    $imagen=$tra1[$i]["descarg_not"];
        ?>        
                    <div class="container">
                       <div class="text"><h1><?php echo $titulo; ?></h1><p><?php echo $c_noticia; ?></p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Agregar comentario</a></div>                
                       <style>
                            .text a{
                                color:red;
                                text-decoration:none;                                
                            }
                       </style>
                        <div class="image"><img src="<?php echo $imagen;?>" alt="primeraimg"></div>
                    </div>            					
                <?php
                }
                ?>

    </div>
</body>
</html>