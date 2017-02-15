<?php 
include_once("database.php");
class cliente{
	private $pdo;
	public $nombre;
	public $apellido;
	public $correo_electronico;
	public $telefono;
	public $categoria_id;
	public $id;
	public $row;

	public function __construct(){
		$this->pdo=Database::Open();

	}
	public function listar(){
		try
		{

			$sql="select cl.id, cl.nombre, cl.apellidos, cl.telefono, cl.correo_electronico, cl.categoria_id, ca.nombre categoria from clientes cl join categoria ca on ca.id=cl.categoria_id";
			$stm=$this->pdo->prepare($sql);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());

 		}//fin de lista
 		
 	}
 	public function buscar($id){
 		try{
 			$sql="select * from clientes where id = ?";
 			$stm=$this->pdo->prepare($sql);
 			$stm->execute([$id]);
 			return $stm->fetch(PDO::FETCH_OBJ);

 		} catch (Exception $e) 
 		{
 			die($e->getMessage());
 		}
 	}
 	public function buscarCorreo($id){
 		try{
 			$sql="select * from clientes where correo_electronico = ?";
 			$stm=$this->pdo->prepare($sql);
 			$stm->execute([$id]);
 			return $stm->fetch(PDO::FETCH_OBJ);

 		} catch (Exception $e) 
 		{
 			die($e->getMessage());
 		}
 	}

 	public function guardar() {
 		try {
 			if ($this->id == null) {

//realizar un insert
 				$sql="insert into clientes(nombre,apellidos,telefono,correo_electronico,categoria_id) values
 				(?,?,?,?,?)";
 				$stm=$this->pdo->prepare($sql);
 				$stm->execute(array(
 					$this->nombre,
 					$this->apellidos,
 					$this->telefono,
 					$this->correo_electronico,
 					$this->categoria_id
 					));
 			} else 
 			        {
//realizar un update
 				$sql="update clientes set nombre=?,apellidos=?,telefono=?,correo_electronico=?,categoria_id=? where id=?";

 				$stm=$this->pdo->prepare($sql);
 				$stm->execute(array(
 					$this->nombre,
 					$this->apellidos,
 					$this->telefono,
 					$this->correo_electronico,
 					$this->categoria_id,
 					$this->id
 					));
 			}
 		} catch (Exception $e) 
 		    {
 			die ($e->getMessage());
 		}
 	}
 	public function delete()
 	{
 		$sql="delete from clientes where id = ?";
 		$stm=$this->pdo->prepare($sql);
 		$stm->execute(array(
 			$this->id
 			));
 	}
 }
 ?>