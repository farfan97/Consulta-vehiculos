<?php include "header.php"; ?>
<?php

require_once('crud_driver.php');
require_once('driver.php');
$crud=new Cruddriver();
$driver= new Driver();

$listaDriver=$crud->mostrar();
?>
  <div class="container">
    <table border=1>
  		<head>
  			<td>Cedula</td>
				<td>Primer Nombre</td>
				<td>Segun Nombre</td>
				<td>Apellidos</td>
				<td>Telefono</td>
  			<td>Direccion</td>
  			<td>Ciudad</td>
  			<td>Actualizar</td>
  			<td>Eliminar</td>
  		</head>
  			<?php foreach ($listaDriver as $driver) {?>
  			<tr>
  				<td><?php echo $driver->getCedula() ?></td>
					<td><?php echo $driver->getPnombre() ?></td>
					<td><?php echo $driver->getSnombre() ?></td>
					<td><?php echo $driver->getApellidos() ?></td>
					<td><?php echo $driver->getTelefono() ?></td>
  				<td><?php echo $driver->getDireccion() ?></td>
  				<td><?php echo $driver->getUbicacion()?> </td>
  				<td><a href="actualizar_driver.php?id=<?php echo $driver->getId()?>&accion=a">Actualizar</a> </td>
  				<td><a href="administrar_driver.php?id=<?php echo $driver->getId()?>&accion=e">Eliminar</a>   </td>
  			</tr>
  			<?php }?>
  		</body>
  	</table>
  </div>
<?php include "footer.php"; ?>
