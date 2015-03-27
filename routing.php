<?php
    session_start();
	// --------  development settings -------//
	//TODO remove when deploy
	error_reporting (E_ALL);
	ini_set("display_errors", 1); 

	// -------- end development settings -------//
?>


<?php
	$url = explode("/", $_SERVER["REQUEST_URI"]);
	switch ($url[2]) {
		case '':
		case 'index':
			include "pages/home.php";
			break;
        
        case 'about':
			include "pages/about.php";
			break;

		default:
			include "404.php";
			break;
	}
?>
