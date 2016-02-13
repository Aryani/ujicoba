<?php
	class Krs{
		//Constructor
		public function __construct(){}
		//Atribut
		private $kode_sem;
        private $kode_prodi;
        private $nim;
        private $kode_mk;
        private $kelas;
        
		//properties
		public function setKodeSem($kode_sem){
			$this->kode_sem=$kode_sem;
		}
		public function getKodeSem(){
			return $this->kode_sem;
		}

		public function setKodeProdi($kode_prodi){
			$this->kode_prodi = $kode_prodi;
		}
		public function getKodeProdi(){
			return $this->kode_prodi;
		}

		public function setNim($nim){
			$this->NIM = $nim;
		}
		public function getNim(){
			return $this->NIM;
		}

		public function setKodeMk($kode_mk){
			$this->kode_mk = $kode_mk;
		}
		public function getKodeMk(){
			return $this->kode_mk;
		}
        
        public function setKelas($kelas){
			$this->kelas = $kelas;
		}
		public function getKelas(){
			return $this->kelas;
		}
        
       
		public function toString(){
			$str = "" ;

			$str.= isset($this->kode_sem) 		? $this->kode_sem . "/" : "" ;
			$str.= isset($this->kode_prodi) 		? $this->kode_prodi . "/" : "" ;
			$str.= isset($this->NIM) 		? $this->NIM . "/" : "" ;
			$str.= isset($this->kode_mk) 	? $this->kode_mk . "/" : "" ;
            $str.= isset($this->kelas) 	? $this->kelas . "/" : "" ;

			$str = trim($str, "/") ;

			return $str ;
		}

		public function toJson(){
			$json = "" ;

			$json.= isset($this->kode_sem) 		? "{kode_sem:".$this->kode_sem."}," : "" ;
			$json.= isset($this->kode_prodi) 	? "{kode_prodi:".$this->kode_prodi."}," : "" ;
			$json.= isset($this->NIM) 	? "{nim:".$this->NIM."}," : "" ;
			$json.= isset($this->kode_mk) 	? "{kode_mk:".$this->kode_mk."}," : "" ;
            $json.= isset($this->kelas) 	? "{kelas:".$this->kelas."}," : "" ;

			$json = trim($json, ",") ;

			if ($json != "") {
				$json = "[".$json."]" ;
			}

			return $json ;
		}
	}
