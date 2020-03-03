<?php

require_once('crud_driver.php');
require_once('driver.php');

$crud= new Cruddriver();
$driver= new Driver();


	if (isset($_POST['insertar'])) {
		$driver->setCedula($_POST['cedula']);
		$driver->setPnombre($_POST['pnombre']);
		$driver->setSnombre($_POST['snombre']);
		$driver->setApellidos($_POST['apellidos']);
		$driver->setDireccion($_POST['direccion']);
		$driver->setTelefono($_POST['telefono']);
		$driver->setUbicacion($_POST['ubicacion']);

		$crud->insertar($driver);
		header('Location: ../index.html');

	}elseif(isset($_POST['actualizar'])){
		$driver->setId($_POST['id']);
		$driver->setCedula($_POST['cedula']);
		$driver->setPnombre($_POST['pnombre']);
		$driver->setSnombre($_POST['snombre']);
		$driver->setApellidos($_POST['apellidos']);
		$driver->setDireccion($_POST['direccion']);
		$driver->setTelefono($_POST['telefono']);
		$driver->setUbicacion($_POST['ubicacion']);
		$crud->actualizar($driver);
		header('Location: index.php');

	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');

	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
