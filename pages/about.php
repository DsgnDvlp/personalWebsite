
<?php
	$path = "";	

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>		
       
        <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
        <link rel="stylesheet" type="text/css" href="css/about.css"/>

        <!-- This following line is needed only in case of using other easing effect rather than "linear", "swing" or "easeInQuart". You can also add the full jQuery UI instead of this file if you prefer -->
        <script src="js/jquery.easings.min.js"></script>

        <!-- This following line needed in the case of using the plugin option `scrollOverflow:true` -->
        <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>

        <script type="text/javascript" src="js/about.js"></script>
        
        
	<?php }
	
	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		
		<div id="fullpage">
            <div class="section active">Section 1</div>
            <div class="section">Section 2</div>
            <div class="section">Section 3</div>
            <div class="section">Section 4</div>
        </div>
		
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
