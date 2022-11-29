<?php 
session_start();
require_once("classes\classes.php");
$tra=new Trabajo();
if(isset($_POST["usuario_comp"]) and $_POST["usuario"]="si")
{
	$_SESSION['usuario_comp']=$_POST["usuario_comp"];
	//print_r($_SESSION);
		$nom=$_POST["usuario_comp"];
 		$pass=$_POST["identidad"];
 		$valo=$tra->traer_usu($nom,$pass);
 		if(count($valo)==1)
 		{
 			echo "<script type='text/javascript'>
			alert('Bienvenido al sistema de Administracion ');
			window.location='chose_crud.php';
			</script>";
		}else
		{
			echo "<script type='text/javascript'>
			alert('Debe Identificarse Ante el Sistema... Gracias');
			</script>";
		}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN USERS</title>
    <link rel="stylesheet" href="styles\login.css">
    <link rel="shortcut icon" href="icons\dd.ico" type="image/x-icon">
</head>

<body>
    <div class="wrapper fadeInDown">

        <div id="formContent">

            <!-- Tabs Titles -->
            <h2 class="active"> LOG IN</h2>
            <h2 style="cursor:pointer;" name="hand" class="inactive underlineHover">
                <a class="a" href="singnup.php">SIGN UP</a></h2>
            <br/>
            <br/>


            <!-- Icon -->
            <div class="fadeIn first">
                <th><a href="index.php"><img src="images\logo.png" id="icon" alt="User Icon" class="img" /></a></th>
            </div>
            <br/>
            <!-- Login Form -->
            <form action="" method="post">
                <input type="text" id="login" class="fadeIn second" name="usuario_comp" placeholder="Username"required=1>
                <input type="password" id="password" class="fadeIn_third" name="identidad" placeholder="Password"required=1>
                <br/>
                <br/>
                <input type="submit" style="cursor:pointer;" class="fadeIn_fourth" id="submit" name="enviar"  value="Submit">
	 		    <input type="hidden" name="usuario" value="si">                
            </form>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Did you forget your password?</a>
            </div>

        </div>

    </div>


</body>

</html>