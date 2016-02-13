<?php
	class User{
		//Constructor
		public function __construct(){}
		//Atribut
		private $id;
		private $username;
		private $password;
		private $name;
        private $angkatan;
        private $ips;
        private $kode_prodi;
        private $prodi;
        private $fakultas;
        
		//properties
		public function setId($id){
			$this->id=$id;
		}
		public function getId(){
			return $this->id;
		}

		public function setUsername($username){
			$this->username = $username;
		}
		public function getUsername(){
			return $this->username;
		}

		public function setPassword($password){
			$this->password = $password;
		}
		public function getPassword(){
			return $this->password;
		}

		public function setName($name){
			$this->name = $name;
		}
		public function getName(){
			return $this->name;
		}
        
        public function setAngkatan($angkatan){
			$this->angkatan = $angkatan;
		}
		public function getAngkatan(){
			return $this->angkatan;
		}
        
        public function setIps($ips){
			$this->ips = $ips;
		}
		public function getIps(){
			return $this->ips;
		}
        
        public function setKodeProdi($kode_prodi){
			$this->kode_prodi = $kode_prodi;
		}
		public function getKodeProdi(){
			return $this->kode_prodi;
		}
        
        public function setProdi($prodi){
			$this->prodi = $prodi;
		}
		public function getProdi(){
			return $this->prodi;
		}
        
        public function setFakultas($fakultas){
			$this->fakultas = $fakultas;
		}
		public function getFakultas(){
			return $this->fakultas;
		}

		public function toString(){
			$str = "" ;

			$str.= isset($this->id) 		? $this->id . "/" : "" ;
			$str.= isset($this->username) 		? $this->username . "/" : "" ;
			$str.= isset($this->password) 		? $this->password . "/" : "" ;
			$str.= isset($this->name) 	? $this->name . "/" : "" ;
            $str.= isset($this->angkatan) 	? $this->angkatan . "/" : "" ;
            $str.= isset($this->ips) 	? $this->ips . "/" : "" ;
            $str.= isset($this->kode_prodi) 	? $this->kode_prodi . "/" : "" ;
            $str.= isset($this->prodi) 	? $this->prodi . "/" : "" ;
            $str.= isset($this->fakultas) 	? $this->fakultas . "/" : "" ;

			$str = trim($str, "/") ;

			return $str ;
		}

		public function toJson(){
			$json = "" ;

			$json.= isset($this->id) 		? "{id:".$this->id."}," : "" ;
			$json.= isset($this->username) 	? "{username:".$this->username."}," : "" ;
			$json.= isset($this->password) 	? "{password:".$this->password."}," : "" ;
			$json.= isset($this->name) 	? "{name:".$this->name."}," : "" ;
            $json.= isset($this->angkatan) 	? "{angkatan:".$this->angkatan."}," : "" ;
            $json.= isset($this->ips) 	? "{ips:".$this->ips."}," : "" ;
            $json.= isset($this->kode_prodi) 	? "{kode_prodi:".$this->kode_prodi."}," : "" ;
            $json.= isset($this->prodi) 	? "{prodi:".$this->prodi."}," : "" ;
            $json.= isset($this->fakultas) 	? "{fakultas:".$this->fakultas."}," : "" ;

			$json = trim($json, ",") ;

			if ($json != "") {
				$json = "[".$json."]" ;
			}

			return $json ;
		}
	}
