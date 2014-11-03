<?php 
	error_reporting(-1);
	ini_set('display_errors', '1');

	$link = mysqli_connect('localhost', 'root', 'utn45t', 'comercio')
		or die('No se pudo conectar: ' . mysqli_error($link));

	$query = 'select * from producto;'
		or die('Error en la consulta: ' . mysqli_error($link));
	//echo $query;

	$result = $link->query($query);

	$num=$result->num_rows;

	$clases = array();
	while( $row=mysqli_fetch_array($result)){
		$clases[] = $row;
	}
	//echo var_dump($clases);	
	$json=json_encode($clases);

	//echo var_dump($clases);

	header('Content-Type: application/json');
	echo $json;?>