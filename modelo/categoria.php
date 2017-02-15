<?php 
include_once("database.php");
class categoria{
	private $pdo;

	public $nombre;
	public $id;
	public $row;

	public function __construct(){
		$this->pdo=Database::Open();
		
	}
	public function listar(){
		try{

			$sql="select * from categoria";
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
 			$sql="select * from categoria where id = ?";
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
 				$sql="insert into categoria (nombre) values
 				(?)";
 				$stm=$this->pdo->prepare($sql);
 				$stm->execute(array(
 					$this->nombre
 					));
 			} else{
//realizar un update
 				$sql="update categoria set nombre=? where id=?";

 				$stm=$this->pdo->prepare($sql);
 				$stm->execute(array(
 					$this->nombre,
 					$this->id
 					));
 			}
 		} catch (Exception $e) {
 			die ($e->getMessage());
 		}
 	}
 	public function delete(){
 		try {
 			$sql="delete from categoria where id = ?";
 			$stm=$this->pdo->prepare($sql);
 			$stm->execute(array(
 				$this->id
 				));
 		} catch (PDOException $e) {
 			echo "ERROR";
 			return;
 		}
 		echo "OK";
 	}
 }
 ?>