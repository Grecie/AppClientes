<?php
//print_r(@$_GET);
//El controlador usa funcion $_GET es una variable la cual se dar por vías urldecode()//
if(file_exists("controlador/".$_GET['m'].".controlador.php")){
	include_once("controlador/".$_GET['m'].".controlador.php");
	$controlador=$_GET['m']."controlador";
	$controlador=new $controlador;
	$a = @$_GET['a'];
	$arg = (!empty($_GET['i'])) ? $_GET['i'] : null ;
	$controlador->{$a}($arg);
	//echo "Existe el controlador";
}else{
	echo "<h1>Error:acceso a una ruta inexistente</h1>";
}

?>