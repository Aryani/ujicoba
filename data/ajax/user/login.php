<?php
	// capturar los datos enviados por "POST"

	$input = json_decode(file_get_contents('php://input'));

	// requerir los archivos del "BEAN" y "MODEL"

	require_once '../../model/ClsConnection.php';
	require_once '../../model/ClsUser.php';
	require_once '../../user/User.php';

	try {
		// generar los objetos

		$user  = new User() ;
		$oUser = new ClsUser() ;

		// realizar la consulta

		$user->setUsername($input->username);
		$user->setPassword($input->password);
		$data = $oUser->login_by_user_password($user) ;

		// realizar las validaciones

		if ( count($data) > 0 ) {
			session_start() ;

			$_SESSION['id_user'] = $data[0]["id"] ;

	        $res = array('msg' => 'Selamat! Anda berhasil login.', 'error' => false, 'data' => $data);
	        $jsn = json_encode($res);
	        print_r($jsn);
		}
		else{
		    $res = array('msg' => 'Username atau Password yang Anda masukkan salah', 'error' => true, 'data' => array());
		    $jsn = json_encode($res);
		    print_r($jsn);
		}
	}
	catch (Exception $e) {
	    $res = array('msg' => $e->getMessage(), 'error' => true, 'data' => array());
	    $jsn = json_encode($res);
	    print_r($jsn);
	}

