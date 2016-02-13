<?php
	class ClsUser extends ClsConnection {
		# CONSTRUCT
		public function __construct($cnx  = null)
		{
			$this->conn = $cnx;
		}
		
		public function login_by_user_password($user)
		{
			$username = $user->getUsername();
			$password   = $user->getPassword();

			$this->query = "SELECT user.username, user.password, user.name, user.id, mhs.NIM, mhs.nama_mhs, mhs.angkatan, mhs.ips, mhs.kode_prodi, mhs.prodi, mhs.fakultas FROM mhs, user WHERE user.username=mhs.NIM AND user.password='$password'";

			$this->execute_query();

			$data = $this->rows ;

			return $data;
		}
		
		public function get_by_code($user)
		{
			$id = $user->getId();

			$this->query = "SELECT user.username, user.password, user.name, user.id, mhs.NIM, mhs.nama_mhs, mhs.angkatan, mhs.ips, mhs.kode_prodi, mhs.prodi, mhs.fakultas FROM mhs, user WHERE user.username=mhs.NIM AND user.id='$id'";

			$this->execute_query();

			$data = $this->rows ;

			return $data;
		}
	}