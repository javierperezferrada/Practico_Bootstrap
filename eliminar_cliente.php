<?php 
	error_reporting(-1);
  ini_set('display_errors', '1');
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "utn45t"; 
  $bd_base = "comercio"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
	$id=$_GET['id'];


  //sql
  
    $sql="DELETE FROM cliente where id ='$id'";
      mysql_query($sql,$con) or die('Error. '.mysql_error());

 ?>