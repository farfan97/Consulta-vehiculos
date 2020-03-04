<?php include "header.php";?>
<?php

	require_once('crud_driver.php');
	require_once('driver.php');
	$crud= new Cruddriver();
	$driver=new Driver();

	$driver=$crud->obtenerDrivers($_GET['id']);
?>
<div class="container">
	<header  align="center">
	<h4>Actualiza los datos del Conductor</h4>
	</header>
	<form action='administrar_driver.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $driver->getId()?>'>
			<td>Cedula:</td>
			<td> <input type='hidden' name='cedula' value='<?php echo $driver->getCedula()?>'>
			<input disabled id="disabled" type="text" class="validate" value='<?php echo $driver->getCedula()?>'></td>
		</tr>
		<tr>
			<td>Primer Nombre:</td>
			<td> <input type='text' name='pnombre' value='<?php echo $driver->getPnombre()?>'></td>
			<td>Segundo Nombre:</td>
			<td> <input type='text' name='snombre' value='<?php echo $driver->getSnombre()?>'></td>
		</tr>
		<tr>
			<td>Apellidos:</td>
			<td><input type='text' name='apellidos'  value='<?php echo $driver->getApellidos()?>'></td>></td>
			<td>Telefono:</td>
			<td> <input type='number' name='telefono' value='<?php echo $driver->getTelefono()?>'></td>></td>
		</tr>
		<tr>
			<td>Direccion:</td>
			<td> <input type='text' name='direccion' value='<?php echo $driver->getDireccion()?>'></td>></td>
			<td>Ciudad:</td>
			<td> <input type='text' name='ubicacion' value='<?php echo $driver->getUbicacion()?>'></td>></td>
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
<?php include "footer.php";?>
