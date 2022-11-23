<?php
require_once("classes\classes.php");
$tra=new Trabajo();
if(isset($_GET["noticias_dia"]))
{
	$b1=$_POST["cod"];
	$b2=$_POST["titulo_not"];
	$b3=$_POST["detalle_not"];
	//$b4=$_POST["ids_tipo"];
	$val=$tra->editar_noticia($b1,$b2,$b3);
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="../estilos/estiloactualizar.css">
 	<title>Actualizacion noticia</title>
 </head>
 <body>
<div class="titulo">
</div>
<br>
<style>
	img{
		width:60px ;
		height: 60px;
	}
	html {
    background-image: url(https://images.pexels.com/photos/10553205/pexels-photo-10553205.jpeg?auto=compress&cs=tinysrgb&w=1600);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
 }
 input{
	opacity: .7;
	padding:5px 150px;
 }
</style>
<table width="98%" align="center" border="1" >
		<thead>
			<tr>
					<th><a href="primero.php">
						<a href="login.php"><img src="images\comeback.png" alt="Come back" class="comeback"></a>
					</th>
					<th colspan="4">ACTUALIZACIÓN DE CAMPOS NOTICIA</th>
					<th><a href="primero.php">
						<img src="images\guardar-el-archivo.png" alt="Guardar Datos" title="Guardar Datos" class="imagenn"></a>
					</th>
			<tr> 
			<tr>
				<th colspan="2">ID Noticia</th>
				<th colspan="2">Titulo Noticia</th>
				<th colspan="2">Descripción Noticia</th>
			</tr>
			<tr>
				<th colspan="2"><input type="text" class="control" name="id" id="nombre" value="<?php echo $b1;?>"></th>
				<th colspan="2"><input type="text" class="control" name="titu" value="<?php echo $b2; ?>"></th>
				<th colspan="2"><input type="text" name="detall" class="control" value="<?php echo $b2; ?>"></th>
			</tr>
		</thead>
 </body>
 </html>
 