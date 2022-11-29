<?php 
require_once("classes\classes.php");
$tra=new Trabajo();
$todos=$tra->trae_noticias_s();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles\crud_noti.css">
	<title>CRUD NEWS</title>
</head>
<body>
	<table width="98%" align="center" border="1" >
		<thead>
			<tr>
					<th>
						<a href="chose_crud.php"><img src="images\comeback.png" alt="Come back" class="comeback"></a>
					</th>
					<th colspan="4"><h1>GENERAL LIST OF NEWS OF THE DAY</h1></th>
					<th><a href="primero.php">
						<img src="images\guardar-el-archivo.png" alt="Guardar Datos" title="Guardar Datos" class="imagenn"></a>
					</th>
			</tr>
			<tr>
				<th>Id Noti</th><th>Titulo Not</th><th>Det. Noti</th><th>Fecha Autor</th><th>Descarga Not</th><th>Actividad</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php
					if(isset($_GET["pos"]))
					{
						$inic=$_GET["pos"];
					}else
					{
						$inic=0;
					}
	              		$todos=$tra->todas_not($inic);
	              		
	              		$cant=0;
	              		for ($i=0;$i<sizeof($todos);$i++)
	              		{
	              			$v1=$todos[$i]["id_noticia"];
	              			$v2=$todos[$i]["titulo_not"];
	              			$v3=$todos[$i]["detalle_not"];
	              			$v4=$todos[$i]["fecha_cadena"];
	              			$v5=$todos[$i]["descarg_not"];
	              			$nvapal=$tra->corta_palabras($v3,80);
	              			$varia=($cant%2)==0 ? '<tr style= color="#9de5ec" font-weigth:bold' :
	              			'<tr style= color="#9de5ec" font-weigth:bold';
	              			$cant++;
	              			?>
							<tr>
								<th><?php echo $varia;?></th>
	              				<th><?php echo $v1;?></th>
	              				<th><?php echo $v2;?></th>
	              				<th><?php echo $nvapal;?></th>
	              				<th><?php echo $v4;?></th>
	              				<th><?php echo $v5;?></th>
	              				<th>
	              					<a href="edit.php?cod=<?php echo $v1;?>">
	              						<img src="images\editar.png" alt="Editar Registros" title="Edicion de Registros" width="25" height="25">||</a>
	              					<a href="delete.php?cod=<?php echo $v1;?>">
	              						<img src="images\basura.png" alt="Eliminar Registros" title="Eliminacion de Registros" width="25" height="25"> </a>		
	              				</th>
	              			</tr>
	            <?php
	           	}
				?>
				<tr>
					<th colspan=6>
					<?php 
                        if($inic==0)
                        {
                        	?>
                        	<a href="">Anteriores Registros</a>	
                        	<?php
                        }else
                        {
                        	$anteriores=$inic-10;
                        	?>
                        	<a href="?pos=<?php echo $anteriores;?>" title="Anteriores Registros">Anteriores Registros</a>
                        	<?php
                        }   
					?>
					&nbsp;&nbsp;||&nbsp;&nbsp;
					<?php 
						if(count($todos)==10)
						{
							$proximo=$inic+10;
							?>
							<a href="?pos=<?php echo $proximo;?>" title="Proximos Registros">Proximos Registros</a>
							<?php

						}else
						{	
							?>
							 <a href="">Siguientes Registros</a> 
							<?php

						}
					?>
					</th>
					
				</tr>
			
		</tbody>
	</table>	
	
</body>
</html>