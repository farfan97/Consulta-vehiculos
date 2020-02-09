<?php include "header.php"; ?>
<?php

	require_once('crud_propietario.php');
	require_once('propietario.php');
	$crud= new Crudpropietario();
	$propietario=new Propietario();

	$propietario=$crud->obtenerPropietarios($_GET['id']);
?>
<div class="container">
	<header  align="center">
	<h4>Actualiza los datos de la persona Propietaria</h4>
	</header>
	<form action='administrar_propietario.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $propietario->getId()?>'>
			<td>Cedula:</td>
			<td> <input type='number' name='cedula' value='<?php echo $propietario->getCedula()?>'></td>
		</tr>
		<tr>
			<td>Primer Nombre:</td>
			<td> <input type='text' name='pnombre' value='<?php echo $propietario->getPnombre()?>'></td>
			<td>Segundo Nombre:</td>
			<td> <input type='text' name='snombre' value='<?php echo $propietario->getSnombre()?>'></td>
		</tr>
		<tr>
			<td>Apellidos:</td>
			<td><input type='text' name='apellidos'  value='<?php echo $propietario->getApellidos()?>'></td>></td>
			<td>Telefono:</td>
			<td> <input type='number' name='telefono' value='<?php echo $propietario->getTelefono()?>'></td>></td>
		</tr>
		<tr>
			<td>Direccion:</td>
			<td> <input type='text' name='direccion' value='<?php echo $propietario->getDireccion()?>'></td>></td>
			<td>Ciudad:</td>
			<td> <input type='text' name='ubicacion' value='<?php echo $propietario->getUbicacion()?>'></td>></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
<table>

	<input type='hidden' name='insertar' value='insertar'>
</table>
</div>
