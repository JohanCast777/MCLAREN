<?php
require_once("classes\classes.php");
$tra=new Trabajo();
if(isset($_POST["noticia"]))
{
	$b1=$_POST["id"];
	$b2=$_POST["log"];
	$b3=$_POST["pass"];
	//$b4=$_POST["ids_tipo"];
	$val=$tra->actualizar_usuario($b1,$b2,$b3);
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="../estilos/estiloactualizar.css">
 	<title>UPDATE USERS</title>
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
<form action="" method="post">
    <table width="98%" align="center" border="1" >
		<thead>
			<tr>
					<th>
						<a href="crud_users.php"><img src="images\comeback.png" alt="Come back" class="comeback"></a>
					</th>
					<th colspan="4"><h2>FIELDS UPDATE NOTICE</h2></th>
					<th>						
						<input type="submit" name="enviar"value="GUARDAR">
	 					<input type="hidden" name="noticia" value="si" >
					</th>
			<tr> 
			<tr>
				<th colspan="2">ID Noticia</th>
				<th colspan="2">Login user</th>
				<th colspan="2">Password user</th>
			</tr>
			<tr>
				<th colspan="2"><input type="text" class="control" name="id" id="nombre" placeholder="Id noticia" ></th>          <!--value="<?php/* echo $b1;*/?>"-->
				<th colspan="2"><input type="text" class="control" name="log" placeholder="Login User"></th>
				<th colspan="2"><input type="text" name="pass" class="control" placeholder="Password"></th>
			</tr>
	</thead>
</form>	
 </body>
 </html>
 