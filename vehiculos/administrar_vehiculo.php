<?php

require_once('crud_vehiculo.php');
require_once('vehiculo.php');

$crud= new Crudvehiculo();
$vehiculo= new Vehiculo();


	if (isset($_POST['insertar'])) {
		$vehiculo->setPlaca($_POST['placa']);
		$vehiculo->setColor($_POST['color']);
		$vehiculo->setMarca($_POST['marca']);
		$vehiculo->setTipo($_POST['tipo']);
		$vehiculo->setDriver($_POST['driver']);
		$vehiculo->setPropietario($_POST['propietario']);

		$crud->insertar($vehiculo);
		header('Location: index.php');

	}elseif(isset($_POST['actualizar'])){
		$vehiculo->setId($_POST['id']);
		$vehiculo->setPlaca($_POST['placa']);
		$vehiculo->setColor($_POST['color']);
		$vehiculo->setMarca($_POST['marca']);
		$vehiculo->setTipo($_POST['tipo']);
		$vehiculo->setDriver($_POST['driver']);
		$vehiculo->setPropietario($_POST['propietario']);
		$crud->actualizar($vehiculo);
		header('Location: index.php');

	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');

	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
