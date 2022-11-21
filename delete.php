<?php 
require_once("classes\classes.php");
$tra=new Trabajo();
if(isset($_POST["noticia"]))
{
	$b3=$_POST["idn"];
	//$b4=$_POST["ids_tipo"];
	$val=$tra->eliminar_noti($b3);//,$b4);
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="../estilos/estiloactualizar.css">
 	<title>Eliminacion noticia </title>
 </head>
 <body>
 
<p>Formulario eliminacion de noticia </p>
<div class="registro">
 		<form action="" method="post">
		 <p><label for="num_doc"></label>
         <br>ID_NOTICIA<input type="text" name="idn" class="control" placeholder="Nro noticia"></br>
         <input type="submit" name="enviar"value="enviar">
	 		<input type="hidden" name="usuario" value="si">
 		</form>
 	</div>
 	</p>
 </body>
 </html>
 