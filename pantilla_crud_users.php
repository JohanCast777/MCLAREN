<?php 
    include("classes\classes.php");
    $tra=new Trabajo();
    $todos=$tra->trae_noticias_s();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT NEWS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styles\crud_users.css" rel="stylesheet">
		<link rel="stylesheet" href="styles\crud_users.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
	<style>
		body{
    	background-image: url(https://images.pexels.com/photos/10553205/pexels-photo-10553205.jpeg?auto=compress&cs=tinysrgb&w=1600);
   		background-repeat: no-repeat;
    	background-attachment: fixed;
    	background-size: cover;
 }
	</style>	
                    <div class="row">                         
                        <div class="col-md-3">
                            <h1>Enter Dates</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="Code Students">
                                    <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Names">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Last Names">                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
						<style>
							.col-md-3{
								margin-top:50px;
								margin-left:60px;
							}
						</style>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >                                    
                                    <tr>
                                        <th colspan="7"><h5 align="center">CRUD NEWS EDIT</h5></th>
                                    </tr>
                                    <tr >                                        
                                        <th>ID_NEWS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>TITTLE</th>
                                        <th>DESC_NEWS</th>
                                        <th>DATE</th>
                                        <th>PICTURE</th>
                                        <th colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDIR</th>
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
									$cant++;
									?>
									<tr>								
										<th><?php echo $v1;?></th>
										<th><?php echo $v2;?></th>
										<th><?php echo $nvapal;?></th>
										<th><?php echo $v4;?></th>
										<th><?php echo $v5;?></th>
										<th>
											<!--<a href="Update-users.php?id=<?/*php echo $row['id_noticia'] */?>" class="btn btn-info">Editar</a>-->
											<a href="Update-users.php?cod=<?php echo $v1;?>" class="btn btn-info">Editar</a>
										</th>
										<th>
											<a href="delete.php?id=<?php echo $row['id_noticia'] ?>" class="btn btn-danger">Eliminar</a>
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
                        </div>
            </div>  

			<style>
							.col-md-8{
								margin-top:50px;
								margin-left:20px;
							}
						</style>
    </body>
</html>