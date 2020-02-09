<?php
  include "header.php";
 ?>
 <div class="container">
   <header  align="center">
   <h4>Ingresa los datos del Conductor</h4>
   </header>
   <form action='administrar_driver.php' method='post'>
   	<table>
   		<tr>
   			<td>Cedula:</td>
   			<td> <input type='number' name='cedula'></td>
   		</tr>
      <tr>
   			<td>Primer Nombre:</td>
   			<td> <input type='text' name='pnombre'></td>
        <td>Segundo Nombre:</td>
   			<td> <input type='text' name='snombre'></td>
   		</tr>
   		<tr>
   			<td>Apellidos:</td>
   			<td><input type='text' name='apellidos' ></td>
        <td>Telefono:</td>
   			<td> <input type='number' name='telefono'></td>
   		</tr>
      <tr>
   			<td>Direccion:</td>
   			<td> <input type='text' name='direccion'></td>
        <td>Ciudad:</td>
   			<td> <input type='text' name='ubicacion'></td>
   		</tr>
   		<input type='hidden' name='insertar' value='insertar'>
   	</table>
   	<input type='submit' value='Guardar'>
   </form>
 </div>
 <?php
   include "footer.php";
  ?>
