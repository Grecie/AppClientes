<?php
include_once("modelo/categoria.php");
class categoriacontrolador{
	private $modelo;
	
	public function __construct(){
		$this->modelo=new categoria();
	}
	//Permite está función mandar las páginas principales que contrenda el index//
	public function index(){
		$data=$this->modelo->listar();
		require_once("vista/encabezado.php");
		require_once("vista/categoria/index.php");
		require_once("vista/pie.php");
		
	}
 // La función editar perimite que el valor de los campos usados de la tabla puedan emitir esta sentencia cargando asi mismo el de la tabla de categorias//
	public function editar($id){
		$data = $this->modelo->buscar($id);
		if (empty($_POST)) {
			require_once("vista/encabezado.php");
			require_once("vista/categoria/add.php");
			require_once("vista/pie.php");
		} else {
			$this->modelo->id = $_POST['id'];
			$this->modelo->nombre = $_POST['nombre'];
			$data = $this->modelo;
			if (strlen($this->modelo->nombre) == 0) {
				require_once("vista/encabezado.php");
			 	require_once("vista/categoria/add.php");
			 	require_once("vista/pie.php");
				return;
			}
			
			$this->modelo->guardar();
			header('location: /proyecto1/?m=categoria&a=index');
		}

	}
	 //Permite eliminar el dato al cual se dará el clic//
	public function delete($id){
		$this->modelo->id = $id;
		$this->modelo->delete();
	}

	 //Función que permite añadir un nuevo elemento a la tabla, en esta parte se ponen los datos a añadir//
	public function add(){
		if (empty($_POST)) {
			require_once("vista/encabezado.php");
			require_once("vista/categoria/agregar.php");
			require_once("vista/pie.php");
		} else {
			$this->modelo->nombre = $_POST['nombre'];
			$data = $this->modelo;
			if (strlen($this->modelo->nombre) == 0) {
				require_once("vista/encabezado.php");
			    require_once("vista/categoria/agregar.php");
			    require_once("vista/pie.php");
				return;
			}
			$this->modelo->guardar();
			header('location: /proyecto1/?m=categoria&a=index');
		}

	}
}

?>