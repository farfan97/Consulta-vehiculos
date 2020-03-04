<?php
  include "header.php";
?>
 <div class="container">
   <header  align="center">
   <h4>Ingresa los datos del Vehiculo</h4>
   </header>
   <form action='administrar_vehiculo.php' method='post'>
   	<table>
   		<tr>
   			<td>Placa:</td>
   			<td> <input type='text' name='placa'></td>
        <td>Color:</td>
   			<td> <input type='text' name='color'></td>
   		</tr>
      <tr>
        <td>Marca:</td>
   			<td> <input type='text' name='marca'></td>
        <td>Tipo de Vehiculo:</td>
   			<td><?php include "tipo.php" ?></td>
   		</tr>
   		<tr>
   			<td>Conductor: </td>
   			<td><?php include "driv.php" ?></td>
        <td>Propietario:</td>
   			<td><?php include "propi.php" ?></td>
   		</tr>
   		<input type='hidden' name='insertar' value='insertar'>
   	</table>
   	<input type='submit' value='Guardar'>
   </form>
 </div>
 <?php

   include "footer.php";
   ?>
