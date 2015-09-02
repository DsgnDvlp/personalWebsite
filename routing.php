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
	switch ($url[1]) {
		case '':
		case 'index':
			include "pages/home.php";
			break;

        case 'about':
			include "pages/about.php";
			break;

        case 'portfolio':
			include "pages/portfolio.php";
			break;

        case 'progetti':
            include "pages/progetti.php";
            break;

        case 'projectDetails':
            include "pages/dettaglio.php";
            break;

        case 'contact':
			include "pages/contact.php";
			break;

        case 'freeStuff':
			include "pages/freeStuff.php";
			break;

		default:
            //TODO fix this problem!
            if(strpos($url[1], "projectDetails") !== false){
                include "pages/dettaglio.php";
            }else{
			    include "404.php";
            }
			break;
	}
?>
