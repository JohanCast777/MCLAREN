<?php 
require_once("classes\conection.php");

class Trabajo extends Conexion 
{
	private $datos1;
	private $datos2;
	private $registros=array();
	private $conexion;

	public function __construct()
	{
		$this->conexion=new Conexion();
		$this->conexion=$this->conexion->Abrir_Conexion();

	}

	public function corta_palabras($deta,$cant)
	{
		$largo=strlen($deta);
		$cadena=substr($deta,0,$cant);
		return $cadena;
	}



	public function traer_categorias()
	{
		$sql="select * from categorias";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function trae_noticias_s()
	{
		$sql="select * from noticias_dia";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function trae_noticias($inic,$c)
	{
		$sql="select * from noticias_dia where id_ctegoria=$c order by id_noticias desc limit $inic,5";
		//$sql="select * from noticias_dia order by id_noticias desc limit $inic,5";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function todas_not($inic)
	{
		$sql="select * from noticias_dia order by id_noticia asc limit $inic,10";
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;	
	}

	public function traer_usu($nom,$pass)
	{
		$sql="select * from usuarios_sist where login_usu='$nom' and pass_usu='$pass'";
		
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function adicion_usu($b1,$b2,$b3)
	{
		/*$val=rand(1,99);*/
		$fech=date('y-m-d');
		$b2=password_hash($b2, PASSWORD_DEFAULT);
		$sql="insert into usuarios_sist(login_usu, pass_usu, fech_activ, nro_Identidad) values(:login, :pass, :fecha, :iden)";
		$consulta=$this->conexion->prepare($sql);
		/*$consulta->BindValue(":secue",$val);*/
		$consulta->BindValue(":login",$b1);
		$consulta->BindValue(":pass",$b2);
		$consulta->BindValue(":fecha",$fech);
		$consulta->BindValue(":iden",$b3);
		$resultado=$consulta->execute();
		return $resultado;
	}

}

 ?>