<?php

require_once('conexion.php');

	class Cruddriver{

		public function __construct(){}


		public function insertar($driver){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO driver values(NULL,:cedula,:pnombre,:snombre,:apellidos,:direccion,:telefono,:ubicacion)');
			$insert->bindValue('cedula',$driver->getCedula());
			$insert->bindValue('pnombre',$driver->getPnombre());
			$insert->bindValue('snombre',$driver->getSnombre());
			$insert->bindValue('apellidos',$driver->getApellidos());
			$insert->bindValue('direccion',$driver->getDireccion());
			$insert->bindValue('telefono',$driver->getTelefono());
			$insert->bindValue('ubicacion',$driver->getUbicacion());
			$insert->execute();

		}


		public function mostrar(){
			$db=Db::conectar();
			$listaDriver=[];
			$select=$db->query('SELECT * FROM driver');

			foreach($select->fetchAll() as $driver){
				$myDriver= new Driver();
				$myDriver->setId($driver['id']);
				$myDriver->setCedula($driver['cedula']);
				$myDriver->setPnombre($driver['pnombre']);
				$myDriver->setSnombre($driver['snombre']);
				$myDriver->setApellidos($driver['apellidos']);
				$myDriver->setDireccion($driver['direccion']);
				$myDriver->setTelefono($driver['telefono']);
				$myDriver->setUbicacion($driver['ubicacion']);
				$listaDriver[]=$myDriver;
			}
			return $listaDriver;
		}


		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM driver WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}


		public function obtenerDrivers($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM driver WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$driver=$select->fetch();
			$myDriver= new Driver();
			$myDriver->setId($driver['id']);
			$myDriver->setCedula($driver['cedula']);
			$myDriver->setPnombre($driver['pnombre']);
			$myDriver->setSnombre($driver['snombre']);
			$myDriver->setApellidos($driver['apellidos']);
			$myDriver->setDireccion($driver['direccion']);
			$myDriver->setTelefono($driver['telefono']);
			$myDriver->setUbicacion($driver['ubicacion']);
			return $myDriver;
		}

		
		public function actualizar($driver){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE persona SET cedula=:cedula, pnombre=:pnombre, snombre=:snombre, apellidos=:apellidos, direccion=:direccion, telefono=:telefono, ubicacion=:ubicacion  WHERE ID=:id');
			$actualizar->bindValue('id',$driver->getId());
			$actualizar->bindValue('cedula',$driver->getCedula());
			$actualizar->bindValue('pnombre',$driver->getPnombre());
			$actualizar->bindValue('snombre',$driver->getSnombre());
			$actualizar->bindValue('apellidos',$driver->getApellidos());
			$actualizar->bindValue('direccion',$driver->getDireccion());
			$actualizar->bindValue('telefono',$driver->getTelefono());
			$actualizar->bindValue('ubicacion',$driver->getUbicacion());
			$actualizar->execute();
		}
	}
?>
