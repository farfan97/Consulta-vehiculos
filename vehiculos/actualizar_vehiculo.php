<?php include "header.php"; ?>
<?php

	require_once('crud_vehiculo.php');
	require_once('vehiculo.php');
	$crud= new Crudvehiculo();
	$vehiculo=new Vehiculo();

	$vehiculo=$crud->obtenerVehiculos($_GET['id']);
?>
<div class="container">
	<header  align="center">
	<h4>Actualiza los datos del Vehiculo</h4>
	</header>
	<form action='administrar_vehiculo.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $vehiculo->getId()?>'>
			<td>Placa:</td>
			<td> <input type='text' name='placa' value='<?php echo $vehiculo->getPlaca()?>'></td>
			<td>Color:</td>
			<td> <input type='text' name='color' value='<?php echo $vehiculo->getColor()?>'></td>
		</tr>
		<tr>
			<td>Marca:</td>
			<td><input type='text' name='marca' value='<?php echo $vehiculo->getMarca()?>'></td>
			<td>Tipo de Vehiculo:</td>
			<td><input type='text' name='tipo' value='<?php echo $vehiculo->getTipo()?>'></td>
		</tr>
		<tr>
			<td>Conductor: </td>
			<td><input type='text' name='driver' value='<?php echo $vehiculo->getDriver()?>'></td>
			<td>Propietario:</td>

			<td><input type='text' name='propietario' value='<?php echo $vehiculo->getPropietario()?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
</form>
<table>

	<input type='hidden' name='insertar' value='insertar'>
</table>
</div>
