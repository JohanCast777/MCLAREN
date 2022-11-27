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
	public function traer_user()
	{
		$sql="select * from usuarios_sist";
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	public function all_news($inic)
	{
		$sql="select * from usuarios_sist order by id_usuario asc limit $inic,10";
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

	public function eliminar_noti($b3){
		$val="";
		$sql="delete from noticias_dia where id_noticia=:iden";
		$consulta=$this->conexion->prepare($sql);
		$consulta->BindValue(":iden",$b3);				
		$resultado=$consulta->execute();
		return $resultado;
	}

	public function actualizar_noticia($b1,$b2,$b3){
		$val="";
		$sql="update noticias_dia set titulo_not=:titu, detalle_not=:detall where id_noticia=:id";
		$consulta=$this->conexion->prepare($sql);
		$consulta->BindValue(":id",$b1);
		$consulta->BindValue(":titu",$b2);
		$consulta->BindValue(":detall",$b3);				
		$resultado=$consulta->execute();
		return $resultado;
	}

	public function actualizar_usuario($b1,$b2,$b3){
		$val="";
		$sql="update usuarios_sist set login_usu=:log, pass_usu=:pass where id_usuario=:id";
		$consulta=$this->conexion->prepare($sql);
		$consulta->BindValue(":id",$b1);
		$consulta->BindValue(":log",$b2);
		$consulta->BindValue(":pass",$b3);				
		$resultado=$consulta->execute();
		return $resultado;
	}

	public function sube_img($id_noti,$nombre){
		$sql="update noticias_dia set descarg_not='$nombre' where id_noticia='$id_noti'";
		$result=$this->conexion->query($sql);
		echo "<script type='text/javascrit'>
			alert('Imagen Adicionada Correctamente....');
			window.location='sube_imagenes.php';
		</script>";		
	}

	public function actualizar_noticia($b1,$b2,$b3){
		$val="";
		$sql="update noticias_dia set titulo_not=:titu, detalle_not=:detall where id_noticia=:id";
		$consulta=$this->conexion->prepare($sql);
		$consulta->BindValue(":id",$b1);
		$consulta->BindValue(":titu",$b2);
		$consulta->BindValue(":detall",$b3);				
		$resultado=$consulta->execute();
		return $resultado;
	}


}

 ?>