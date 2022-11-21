<?php 
require_once("classes\classes.php");
$tra=new Trabajo();
if(isset($_POST["noticias_dia"]))
{
	$b1=$_POST["id_noticia"];
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
<p>ACTUALIZACIÓN DE CAMPOS NOTICIA</p>
</div>

<div class="registro">

 		<form action="" method="post">
		 <p><br>ID NOTICIA :<input type="text" class="control" name="id" id="nombre" placeholder="Id"></br>
			 <label for="identidad"></label>
	 		<br>TITULO NOT :<input type="password" class="control" name="titu" placeholder="Titulo not"></br>
			 <label for="num_doc"></label>
	 	<label for="num_doc"></label>
         <br>DETALLE NOT : <input type="text" name="detall" class="control" placeholder="Detalle not"></br>
        
        <input type="submit" name="enviar"value="GUARDAR">
	 		<input type="hidden" name="noticia" value="si" >           
 		</form>
 	</div>
 	</p>
 </body>
 </html>
 