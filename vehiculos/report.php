<?php include "header.php"; ?>
<?php

require_once('crud_vehiculo.php');
require_once('vehiculo.php');
$crud=new Crudvehiculo();
$vehiculo= new Vehiculo();

$listaVehiculos=$crud->mostrar();
?>
  <div class="container">
    <table border=1>
  		<head>
  			<td>Placa</td>
				<td>Color</td>
				<td>Marca</td>
				<td>Tipo de Vehiculo</td>
				<td>Conductor</td>
  			<td>Propietario</td>
  			<td>Actualizar</td>
  			<td>Eliminar</td>
  		</head>
  		<body>
  			<?php foreach ($listaVehiculos as $vehiculo) {?>
  			<tr>
  				<td><?php echo $vehiculo->getPlaca() ?></td>
					<td><?php echo $vehiculo->getColor() ?></td>
					<td><?php echo $vehiculo->getMarca() ?></td>
					<td><?php echo $vehiculo->getTipo() ?></td>
  				<td><?php echo $vehiculo->getDriver() ?></td>
  				<td><?php echo $vehiculo->getPropietario()?> </td>
  				<td><a href="actualizar_vehiculo.php?id=<?php echo $vehiculo->getId()?>&accion=a">Actualizar</a> </td>
  				<td><a href="administrar_vehiculo.php?id=<?php echo $vehiculo->getId()?>&accion=e">Eliminar</a>   </td>
  			</tr>
  			<?php }?>
  		</body>
  	</table>
  </div>
<?php include "footer.php"; ?>
