
<?php
	$path = "";	

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>		

	<?php }
	
	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		<p>NOT FOUND</p>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
