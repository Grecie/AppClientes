<?php

class Create_database
{
    protected $pdo;
     Public $host;
     public $user;
     public $password;

    
    public function __construct($host,$user,$password)
    {    
        $this->pdo = new PDO("mysql:host=".$host.';', $user, $password);
    }
    //creamos la base de datos y las tablas que necesitemos
    public function my_db()
    {
        //creamos la base de datos si no existe
        $crear_db = $this->pdo->prepare('CREATE DATABASE IF NOT EXISTS clientesgestione COLLATE utf8_spanish_ci');
        $crear_db->execute();

        //decimos que queremos usar la tabla que acabamos de crear
        if($crear_db):
            $use_db = $this->pdo->prepare('USE clientesgestione');
            $use_db->execute();
        endif;

        //si se ha creado la base de datos y estamos en uso de ella creamos las tablas
        if($use_db):
            //creamos la tabla Categorias
            $crear_tb_users = $this->pdo->prepare("            
CREATE TABLE `categoria` (
  `id` int(30) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(5, 'general'),
(8, 'recepción');");
           
         endif;
            //creamos la tabla posts
 


   $crear_tb_users->execute();

   
    }
    public function clie(){

      $crear_tb_posts = $this->pdo->prepare("


CREATE TABLE `clientes` (
  `id` int(30) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo_electronico` varchar(60) DEFAULT NULL,
  `categoria_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `telefono`, `correo_electronico`, `categoria_id`) VALUES
(11, 'Ricardo', 'Balam Cupul', '9876', 'balamr@hotmail.com', 5),
(15, 'Grecia', 'Cruz Gongora', '98776789', 'grecicg@gmail.com', 5),
(17, 'Rodrigo Ernesto', 'balam cupul', '0977097097', 'rodrigo@hotmail.com', 8);
--
-- Índices para tablas volcadas
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `categoria_id_2` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
");
            $crear_tb_posts->execute();
       

    }
}
//ejecutamos la función my_db para crear nuestra bd y las tablas

?>