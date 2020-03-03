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
	<table class="responsive-table centered striped bordered">
		<tr>
			<input type='hidden' name='id' value='<?php echo $vehiculo->getId()?>'>
			<td>Placa:</td>
			<td><input type='text' name='placa' value='<?php echo $vehiculo->getPlaca()?>'>
			</td>

			<td>Color:</td>
			<td> <input type='text' name='color' value='<?php echo $vehiculo->getColor()?>'></td>
		</tr>
		<tr>
			<td>Marca:</td>
			<td><input type='text' name='marca' value='<?php echo $vehiculo->getMarca()?>'></td>
			<td>Tipo de Vehiculo:</td>
			<td>
				<?php
				  $mysqlii = new mysqli('localhost', 'root', '', 'acme');
				?>
				<select name='tipo'>
        <option value="<?php echo $vehiculo->getTipo()?>">Actual: <?php echo $vehiculo->getTipo()?></option>
        <?php
          $queryi = $mysqlii -> query ("SELECT * FROM tipo");
          while ($valoresi = mysqli_fetch_array($queryi)) {
            echo '<option value="'.$valoresi[tipo].'">'.$valoresi[tipo].'</option>';
          }
        ?>
      	</select>
			</td>
		</tr>
		<tr>
			<td>Conductor: </td>
			<td>
				<?php
				  $mysqlii = new mysqli('localhost', 'root', '', 'acme');
				?>
				      <select name='driver'>
				        <option value="<?php echo $vehiculo->getDriver()?>">Actual: <?php echo $vehiculo->getDriver()?></option>
				        <?php
				          $queryi = $mysqlii -> query ("SELECT * FROM driver");
				          while ($valoresi = mysqli_fetch_array($queryi)) {
				            echo '<option value="'.$valoresi[pnombre]. " " .$valoresi[snombre]. " " .$valoresi[apellidos].'">'.$valoresi[pnombre]. " " .$valoresi[snombre]. " " .$valoresi[apellidos].'</option>';
				          }
				        ?>
				      </select>
			</td>
			<td>Propietario:</td>

			<td>
				<?php
				  $mysqlii = new mysqli('localhost', 'root', '', 'acme');
				?>
				      <select name='propietario'>
				        <option value="<?php echo $vehiculo->getPropietario()?>">Actual: <?php echo $vehiculo->getPropietario()?></option>
				        <?php
				          $queryi = $mysqlii -> query ("SELECT * FROM persona");
				          while ($valoresi = mysqli_fetch_array($queryi)) {
				            echo '<option value="'.$valoresi[pnombre]. " " .$valoresi[snombre]. " " .$valoresi[apellidos].'">'.$valoresi[pnombre]. " " .$valoresi[snombre]. " " .$valoresi[apellidos].'</option>';
				          }
				        ?>
				      </select>
			</td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
</form>
<table>
	<input type='hidden' name='insertar' value='insertar'>
</table>
</div>
<?php include "footer.php" ?>
