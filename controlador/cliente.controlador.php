
<?php
include_once("modelo/cliente.php");
include_once("modelo/categoria.php");
class clientecontrolador{
	private $modelo;
	private $modelocategoria;
	
	public function __construct(){
		$this->modelo=new cliente();
		$this->modelocategoria = new categoria();
	}

	//Permite está función mandar las páginas principales que contrenda el index//
	public function index(){
		$data=$this->modelo->listar();
		require_once("vista/encabezado.php");
		require_once("vista/cliente/index.php");
		require_once("vista/pie.php");
	}
    // La función editar perimite que el valor de los campos usados de la tabla puedan emitir esta sentencia cargando asi mismo el de la tabla de categorias//
   public function editar($id){
   		$data = $this->modelo->buscar($id);
   		$categorias = $this->modelocategoria->listar();
   		if (empty($_POST)) {
   			require_once("vista/encabezado.php");
			require_once("vista/cliente/add.php");
			require_once("vista/pie.php");
		} else {

			$this->modelo->id = $_POST['id'];
			$this->modelo->nombre = $_POST['nombre'];
			$this->modelo->apellidos = $_POST['apellidos'];
			$this->modelo->telefono = $_POST['telefono'];
			$this->modelo->correo_electronico = $_POST['correo_electronico'];
			$this->modelo->categoria_id = $_POST['categoria_id'];
			$data = $this->modelo;
			if (strlen($this->modelo->nombre) == 0) {
				require_once("vista/encabezado.php");
				require_once("vista/cliente/add.php");
				require_once("vista/pie.php");
				return;
			}
			if (strlen($this->modelo->apellidos) == 0) {
				require_once("vista/encabezado.php");
				require_once("vista/cliente/add.php");
				require_once("vista/pie.php");
				return;
			}
			if (!validEmail($this->modelo->correo_electronico)) {
				require_once("vista/encabezado.php");
				require_once("vista/cliente/add.php");
				require_once("vista/pie.php");
				return;
			}
			$this->modelo->guardar();
			header('location: /proyecto1/?m=cliente&a=index');
		}

   }
   //Permite eliminar el dato al cual se dará el clic//
    public function delete($id){
    	$this->modelo->id = $id;
   		$this->modelo->delete();
   		echo "OK";
   }
   //Función que permite añadir un nuevo elemento a la tabla, en esta parte se ponen los datos a añadir//
    public function add(){
    	$categorias = $this->modelocategoria->listar();
   		if (empty($_POST)) {
   			require_once("vista/encabezado.php");
			require_once("vista/cliente/agregar.php");
			require_once("vista/pie.php");
		} else {
			$this->modelo->nombre = $_POST['nombre'];
			$this->modelo->apellidos = $_POST['apellidos'];
			$this->modelo->telefono = $_POST['telefono'];
			$this->modelo->correo_electronico = $_POST['correo_electronico'];
			$this->modelo->categoria_id= $_POST['categoria_id'];

			$data = $this->modelo;
			if (strlen($this->modelo->nombre) == 0) {
				require_once("vista/encabezado.php");
				require_once("vista/cliente/agregar.php");
				require_once("vista/pie.php");
				return;
			}
			if (strlen($this->modelo->apellidos) == 0) {
				require_once("vista/encabezado.php");
				require_once("vista/cliente/agregar.php");
				require_once("vista/pie.php");
				return;
			} 
			if (!validEmail($this->modelo->correo_electronico)) {
				require_once("vista/encabezado.php");
				require_once("vista/cliente/agregar.php");
				require_once("vista/pie.php");
				return;
			}
			$this->modelo->guardar();
			header('location: /proyecto1/?m=cliente&a=index');
		}


   }
}
 
?>