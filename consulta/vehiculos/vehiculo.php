<?php
	class Vehiculo{
		private $id;
		private $placa;
		private $color;
		private $marca;
		private $tipo;
		private $driver;
		private $propietario;
		private $ubicacion;

		function __construct(){}

		public function getPlaca(){
			return $this->placa;
		}
		public function setPlaca($placa){
			$this->placa = $placa;
		}

		public function getColor(){
			return $this->color;
		}
		public function setColor($color){
			$this->color = $color;
		}

		public function getMarca(){
			return $this->marca;
		}
		public function setMarca($marca){
			$this->marca = $marca;
		}

		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}

		public function getDriver(){
			return $this->driver;
		}
		public function setDriver($driver){
			$this->driver = $driver;
		}

		public function getPropietario(){
			return $this->propietario;
		}
		public function setPropietario($propietario){
			$this->propietario = $propietario;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>
