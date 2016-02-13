<?php
	// es necesario requerir el bean, para poder extraer los datos del objeto que se encuentra en la session
	require_once '../../user/User.php';

	// tenemos que llamar a "session_start()" siempre que queramos utilizar sesiones
	// ya sea para acceder a ellas o para almacenar valores
	session_start();

	// verificamos si la session "usuario" contine algun objeto
	if( isset($_SESSION['id_user']) ) {
		print $_SESSION['id_user'] ;
	}