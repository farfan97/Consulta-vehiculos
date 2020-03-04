<?php
	class Driver{
		private $id;
		private $cedula;
		private $pnombre;
		private $snombre;
		private $apellidos;
		private $direccion;
		private $telefono;
		private $ubicacion;

		function __construct(){}

		public function getCedula(){
			return $this->cedula;
		}
		public function setCedula($cedula){
			$this->cedula = $cedula;
		}

		public function getPnombre(){
			return $this->pnombre;
		}
		public function setPnombre($pnombre){
			$this->pnombre = $pnombre;
		}

		public function getSnombre(){
			return $this->snombre;
		}
		public function setSnombre($snombre){
			$this->snombre = $snombre;
		}

		public function getApellidos(){
			return $this->apellidos;
		}
		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}

		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}

		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}

		public function getUbicacion(){
			return $this->ubicacion;
		}
		public function setUbicacion($ubicacion){
			$this->ubicacion = $ubicacion;
		}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
	}
?>
