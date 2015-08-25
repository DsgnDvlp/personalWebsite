
<?php
	$path = "";

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>

        <link rel="stylesheet" type="text/css" href="css/portfolio.css"/>

        <script type="text/javascript" src="js/portfolio.js"></script>
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->

	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
