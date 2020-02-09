<?php

require_once('conexion.php');

	class Crudpropietario{

		public function __construct(){}


		public function insertar($propietario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO persona values(NULL,:cedula,:pnombre,:snombre,:apellidos,:direccion,:telefono,:ubicacion)');
			$insert->bindValue('cedula',$propietario->getCedula());
			$insert->bindValue('pnombre',$propietario->getPnombre());
			$insert->bindValue('snombre',$propietario->getSnombre());
			$insert->bindValue('apellidos',$propietario->getApellidos());
			$insert->bindValue('direccion',$propietario->getDireccion());
			$insert->bindValue('telefono',$propietario->getTelefono());
			$insert->bindValue('ubicacion',$propietario->getUbicacion());
			$insert->execute();

		}


		public function mostrar(){
			$db=Db::conectar();
			$listaPropietarios=[];
			$select=$db->query('SELECT * FROM persona');

			foreach($select->fetchAll() as $propietario){
				$myPropietario= new Propietario();
				$myPropietario->setId($propietario['id']);
				$myPropietario->setCedula($propietario['cedula']);
				$myPropietario->setPnombre($propietario['pnombre']);
				$myPropietario->setSnombre($propietario['snombre']);
				$myPropietario->setApellidos($propietario['apellidos']);
				$myPropietario->setDireccion($propietario['direccion']);
				$myPropietario->setTelefono($propietario['telefono']);
				$myPropietario->setUbicacion($propietario['ubicacion']);
				$listaPropietarios[]=$myPropietario;
			}
			return $listaPropietarios;
		}


		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM persona WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}


		public function obtenerPropietarios($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM persona WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$propietario=$select->fetch();
			$myPropietario= new Propietario();
			$myPropietario->setId($propietario['id']);
			$myPropietario->setCedula($propietario['cedula']);
			$myPropietario->setPnombre($propietario['pnombre']);
			$myPropietario->setSnombre($propietario['snombre']);
			$myPropietario->setApellidos($propietario['apellidos']);
			$myPropietario->setDireccion($propietario['direccion']);
			$myPropietario->setTelefono($propietario['telefono']);
			$myPropietario->setUbicacion($propietario['ubicacion']);
			return $myPropietario;
		}


		public function actualizar($propietario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE persona SET cedula=:cedula, pnombre=:pnombre, snombre=:snombre, apellidos=:apellidos, direccion=:direccion, telefono=:telefono, ubicacion=:ubicacion  WHERE ID=:id');
			$actualizar->bindValue('id',$propietario->getId());
			$actualizar->bindValue('cedula',$propietario->getCedula());
			$actualizar->bindValue('pnombre',$propietario->getPnombre());
			$actualizar->bindValue('snombre',$propietario->getSnombre());
			$actualizar->bindValue('apellidos',$propietario->getApellidos());
			$actualizar->bindValue('direccion',$propietario->getDireccion());
			$actualizar->bindValue('telefono',$propietario->getTelefono());
			$actualizar->bindValue('ubicacion',$propietario->getUbicacion());
			$actualizar->execute();
		}
	}
?>
