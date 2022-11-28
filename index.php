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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>MCLAREN NEWS</title>
</head>
<body>

<!--NAVBAR-->
<nav id="header">
        <div id="logo">
            <a href="#"><img src="images\logo.png" alt="img3" class="img3"></a>
		</div>
        <ul class="nav">
            <li><a href="index2.php"class="a">HOME</a></li>
            <li><a  class="a">CRUDS TOOLS  &nbsp;&nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
              </svg></a>
                <ul>
                    <li><a href="crud_noticias.php">EDIT NEWS</a></li>
                    <li><a href="crud_users.php">EDIT USERS</a></li>
                    <li><a href="upload_img.php">ADD PICTURE</a></li>
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
                    $c=0;
        ?>        
                    <div class="container">
                       <div class="text"><h1><?php echo $titulo; ?></h1><p><?php echo $c_noticia; ?></p><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a id="btn-abrir-popup" class="btn-abrir-popup" style="cursor:pointer;">Add Comentary <?php echo $c; ?></a></div>        
                       <style>
                            .text a{
                                color:rgb(165, 33, 33);
                                text-decoration:none;                                
                            }
                       </style>
                        <div class="image"><img src="<?php echo $imagen;?>" alt="primeraimg"></div>
                    </div>            					
                <?php
                }
                ?>

<!--public function upload_comentari($b1,$b2,$b3,$b4){
		$val="";
		$fech=date('y-m-d');
		$sql="insert into coment_not(nombre_lector, correo_lector, web_lector, texto_not, fecha_com) values(:name, :email, :web, :txt, :date)";
		$consulta=$this->conexion->prepare($sql);
		$consulta->BindValue(":name",$b1);
		$consulta->BindValue(":email",$b2);
		$consulta->BindValue(":web",$b3);				
		$consulta->BindValue(":txt",$b4);
		$consulta->BindValue(":date",$fech);
		$resultado=$consulta->execute();
		return $resultado;
	}-->

    <?php
    if(isset($_POST["popup"]))
{
	$b1=$_POST["user"];
	$b2=$_POST["email"];
	$b3=$_POST["web"];
    $b4=$_POST["text"];
	$vall=$traa->upload_comentari($b1,$b2,$b3,$b4);	
    $c=$c+1;
}
?>
                <!--Popup window-->
		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"><img src="icons\cerca.png" class="exit" alt="exit"></i></a>
                <style>
                    .exit{
                        height: 10px;
                        width: 10px;
                    }
                    .exit:hover{
                        transform: scale(1.2);
                    }
                </style>
				<h3>Comments</h3>
				<h4>Whrite your comment here!</h4>
				<form action="">
					<div class="contenedor-inputs">
						<input type="text" placeholder="Name" name="user">
						<input type="email" placeholder="Email" name="email">
                        <input type="text" placeholder="Web_user" name="web">
                        <input type="text" id="comment" placeholder="Comment" name="text">                       
					</div>
					<input type="submit" name="enviar"value="GUARDAR" class="btn-submit">
	 				<input type="hidden" name="popup" value="si" >
				</form>
			</div>
		</div>

    </div>
</body>
    <script>
        var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
    </script>
</html>