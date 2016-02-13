<?php
	header('content-type: application/json; charset=utf-8');

	require_once '../../model/ClsConnection.php';
	require_once '../../model/ClsUser.php';
	require_once '../../user/User.php';

	try {
		// generar los objetos

		$user  = new User() ;
		$oUser = new ClsUser() ;

		// realizar la consulta

		$user->setId($_GET['id']) ;
		$data = $oUser->get_by_code($user) ;

		// realizar las validaciones

		if ( count($data) > 0 ) {
	        $res = array('msg' => 'Registrasi berhasil', 'error' => false, 'data' => $data);
	        $jsn = json_encode($res);
	        print_r($jsn);
		}
		else{
		    $res = array('msg' => 'Registrasi gagal', 'error' => true, 'data' => array());
		    $jsn = json_encode($res);
		    print_r($jsn);
		}
	}
	catch (Exception $e) {
	    $res = array('msg' => $e->getMessage(), 'error' => true, 'data' => array());
	    $jsn = json_encode($res);
	    print_r($jsn);
	}