<?php
include_once 'testclass.php';
$host = $_POST['host'];
$user = $_POST['user'];
$password = $_POST['password'];
$db = new Create_database($host,$user,$password);
$db->my_db();
$db->clie();
header('Location: http://localhost:8080/proyecto1/instalation/test.php');
header('Location: http://localhost:8080/proyecto1/?m=cliente&a=index');