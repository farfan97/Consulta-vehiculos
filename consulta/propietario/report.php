<?php include "header.php"; ?>
<?php

require_once('crud_propietario.php');
require_once('propietario.php');
$crud=new Crudpropietario();
$propietario= new Propietario();

$listaPropietarios=$crud->mostrar();
?>
  <div class="container">
    <table class="responsive-table centered striped bordered">
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
  		<body>
  			<?php foreach ($listaPropietarios as $propietario) {?>
  			<tr>
  				<td><?php echo $propietario->getCedula() ?></td>
					<td><?php echo $propietario->getPnombre() ?></td>
					<td><?php echo $propietario->getSnombre() ?></td>
					<td><?php echo $propietario->getApellidos() ?></td>
					<td><?php echo $propietario->getTelefono() ?></td>
  				<td><?php echo $propietario->getDireccion() ?></td>
  				<td><?php echo $propietario->getUbicacion()?> </td>
  				<td><a href="actualizar_propietario.php?id=<?php echo $propietario->getId()?>&accion=a">Actualizar</a> </td>
  				<td><a href="administrar_propietario.php?id=<?php echo $propietario->getId()?>&accion=e">Eliminar</a>   </td>
  			</tr>
  			<?php }?>
  		</body>
  	</table>
  </div>
<?php include "footer.php"; ?>
