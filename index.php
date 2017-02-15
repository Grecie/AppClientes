<?php
//include_once("controlador/controlador.php")
//echo $_GET['m'];
//echo "<br>";

function validEmail($email){
// Check the formatting is correct
if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
return FALSE;
}
// Next check the domain is real.
$domain = explode("@", $email, 2);
return checkdnsrr($domain[1]); // returns TRUE/FALSE;
}
// Example
validEmail('real@hotmail.com'); // Returns TRUE
validEmail('fake@fakedomain.com'); // Returns FALSE

//echo $_GET['url'];
define("BASEURL","http://localhost:8080/proyecto1");
$seccion="";
include_once("controlador/controlador.php");
?>