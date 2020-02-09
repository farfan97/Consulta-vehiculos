<?php

require_once('conexion.php');

	class Crudvehiculo{

		public function __construct(){}


		public function insertar($vehiculo){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO cars values(NULL,:placa,:color,:marca,:tipo,:driver,:propietario)');
			$insert->bindValue('placa',$vehiculo->getPlaca());
			$insert->bindValue('color',$vehiculo->getColor());
			$insert->bindValue('marca',$vehiculo->getMarca());
			$insert->bindValue('tipo',$vehiculo->getTipo());
			$insert->bindValue('driver',$vehiculo->getDriver());
			$insert->bindValue('propietario',$vehiculo->getPropietario());
			$insert->execute();

		}


		public function mostrar(){
			$db=Db::conectar();
			$listaVehiculos=[];
			$select=$db->query('SELECT * FROM cars');

			foreach($select->fetchAll() as $vehiculo){
				$myVehiculos= new Vehiculo();
				$myVehiculos->setId($vehiculo['id']);
				$myVehiculos->setPlaca($vehiculo['placa']);
				$myVehiculos->setColor($vehiculo['color']);
				$myVehiculos->setMarca($vehiculo['marca']);
				$myVehiculos->setTipo($vehiculo['tipo']);
				$myVehiculos->setDriver($vehiculo['driver']);
				$myVehiculos->setPropietario($vehiculo['propietario']);
				$listaVehiculos[]=$myVehiculos;
			}
			return $listaVehiculos;
		}


		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM cars WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}


		public function obtenerVehiculos($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM cars WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$vehiculo=$select->fetch();
			$myVehiculos= new Vehiculo();
			$myVehiculos->setId($vehiculo['id']);
			$myVehiculos->setPlaca($vehiculo['placa']);
			$myVehiculos->setColor($vehiculo['color']);
			$myVehiculos->setMarca($vehiculo['marca']);
			$myVehiculos->setTipo($vehiculo['tipo']);
			$myVehiculos->setDriver($vehiculo['driver']);
			$myVehiculos->setPropietario($vehiculo['propietario']);
			return $myVehiculos;
		}


		public function actualizar($vehiculo){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE cars SET placa=:placa, color=:color, marca=:marca, tipo=:tipo, driver=:driver, propietario=:propietario  WHERE ID=:id');
			$actualizar->bindValue('id',$vehiculo->getId());
			$actualizar->bindValue('placa',$vehiculo->getPlaca());
			$actualizar->bindValue('color',$vehiculo->getColor());
			$actualizar->bindValue('marca',$vehiculo->getMarca());
			$actualizar->bindValue('tipo',$vehiculo->getTipo());
			$actualizar->bindValue('driver',$vehiculo->getDriver());
			$actualizar->bindValue('propietario',$vehiculo->getPropietario());
			$actualizar->execute();
		}
	}
?>
