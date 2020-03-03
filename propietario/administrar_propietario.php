<?php

require_once('crud_propietario.php');
require_once('propietario.php');

$crud= new Crudpropietario();
$propietario= new Propietario();


	if (isset($_POST['insertar'])) {
		$propietario->setCedula($_POST['cedula']);
		$propietario->setPnombre($_POST['pnombre']);
		$propietario->setSnombre($_POST['snombre']);
		$propietario->setApellidos($_POST['apellidos']);
		$propietario->setDireccion($_POST['direccion']);
		$propietario->setTelefono($_POST['telefono']);
		$propietario->setUbicacion($_POST['ubicacion']);

		$crud->insertar($propietario);
		header('Location: ../index.html');

	}elseif(isset($_POST['actualizar'])){
		$propietario->setId($_POST['id']);
		$propietario->setCedula($_POST['cedula']);
		$propietario->setPnombre($_POST['pnombre']);
		$propietario->setSnombre($_POST['snombre']);
		$propietario->setApellidos($_POST['apellidos']);
		$propietario->setDireccion($_POST['direccion']);
		$propietario->setTelefono($_POST['telefono']);
		$propietario->setUbicacion($_POST['ubicacion']);
		$crud->actualizar($propietario);
		header('Location: index.php');

	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');

	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>
