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
 
//variables POST
  $id=$_POST['id'];
  $rut=$_POST['rut'];
  $nombre=$_POST['nombre'];
  $correo=$_POST['correo'];
  $telefono=$_POST['telefono'];
  $direccion=$_POST['direccion'];


  //sql
  if($id){
    $sql="update cliente set rut='$rut', nombre='$nombre', correo='$correo', telefono='$telefono', direccion='$direccion' where id='$id'";
    mysql_query($sql,$con) or die('Error. '.mysql_error());
  }else{
    $sql="INSERT INTO cliente (rut,nombre,correo,telefono,direccion)  VALUES ('$rut','$nombre','$correo','$telefono','$direccion')";
    mysql_query($sql,$con) or die('Error. '.mysql_error());
  }

?>