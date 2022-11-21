<?php 
require_once("classes\classes.php");
$tra=new Trabajo();
if(isset($_POST["usuario"]))
{
	$b1=$_POST["usuario_comp"];
	$b2=$_POST["identidad"];
	$b3=$_POST["nrodocu"];
	$val=$tra->adicion_usu($b1,$b2,$b3);	
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles\login.css">
    <link rel="shortcut icon" href="icons\dd.ico" type="image/x-icon">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript">
        function enablesending(){
            document.loginform.hand.disabled = !document.loginform.terms.checked;
        }

    </script>
    


    

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 style="cursor:pointer;" name="hand" class="inactive underlineHover">
                <a class="a" href="Login.php"> LOG IN</a></h2>
            <h2 class="active" class="inactive underlineHover"><strong>SIGN UP</strong></h2>
            <br/>
            <br/>


            <!-- Icon -->
            <div class="fadeIn first">
                <th>
                    <a href="index.php"><img src="images\logo.png" id="icon" alt="User Icon" class="img" /></a>
                </th>
            </div>
            <br/>
            <!-- Login Form -->
            <form name="loginform" action="" method="post">
                <input type="text" id="login" class="fadeIn second" name="usuario_comp" placeholder="Username">
                <input type="text" id="login" class="fadeIn second" name="nrodocu" placeholder="Document">

                <!--<td valign="top" height="24" align="center">
                    <div class="select_blanco">
                        <select styleid="typeDocument" name="typeDocument" id="typeDocument" size="1" placeholder="Tipo de documento">
                            <option value="CC">Cédula de Ciudadanía</option><option value="TI">Tarjeta de Identidad</option><option value="CE">Cédula de Extranjería</option><option value="NCS">Número ciego SENA</option><option value="PS">Pasaporte</option><option value="DNI">Documento Nacional de Identificaciónasaporte</option><option value="NIT">Número de Identificación Tributaria</option><option value="PR">PEP - RAMV</option><option value="PEP">PEP</option>
                      </select></div>
                </td>-->

                <input type="password" id="password" class="fadeIn third" name="identidad" placeholder="Password">
                <br/>
                <br/>
                <br/>
                <!--Start-->
               <div class="terms">
                <input type="checkbox" name="terms" onclick="enablesending()">
                <label for="terms"><a href="#">I accept all the conditions</a></label>
               </div>
               <!--End-->
                <br/>
                <input type="submit" style="cursor:pointer;" class="fadeIn_fourth" id="submit" name="enviar"  value="Submit">
	 		    <input type="hidden" name="usuario" value="si">
                <!--<a href="primero.php" style="cursor:pointer;" name="hand" type="submit" class="fadeIn fourth" value="Registrarse" disabled>Register</a>-->
            </form>
            <br/>
            <!-- Remind Passowrd -->


        </div>
    </div>

</body>

</html>