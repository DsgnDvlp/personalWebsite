
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
            <div class="section first active">
            	<div class="container">
            		<div class="title">hola</div>
            		<div class="subtitle">
            			<p>I’m a 24 years old designer from Italy, born in Lima Perù, currently living in Milan.</p>
						<br/>
						<p>I work for a web agency and as a freelancer &amp; consultant for digital realities.</p>
            		</div>
            	</div>
            	<div class="pageTitle">about</div>
            	<div class="footer">
            		<div class="goDown"><span class="text">go down</span><br/>
            			<div class="lineDown"></div>
            		</div>
            		<div class="breadCrumbs">
						<span>what i do</span>
						<span>my cv</span>
            		</div>
            	</div>
            </div>
            <div class="section second">
            	<div class="topPanel"><span class="text">back</span></div>
            	<div class="centerLine"></div>
            	<div class="centerBlock"><span class="text">what i do</span></div>
            	
            	<div class="contentBlockContainer left">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<img src="../img/uxUi.svg"/>
            				<p class="title">UX / UI</p>
            				<p class="content">I work as a UX &amp; UI designer, trying to search every aspect of design in 
            			memories lost.</p>
            			</div>
            			<div class="contentBlock">
            				<p class="title">web</p>
            				<p class="content">I work as a UX &amp; UI designer, trying to search every aspect of design in 
            			memories lost.</p>
            			</div>
            		</div>
            	</div>
            	<div class="contentBlockContainer right">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<img class="visual" src="../img/visual.svg" />
            				<p class="title">visual</p>
            				<p class="content">I work as a UX &amp; UI designer, trying to search every aspect of design in 
            			memories lost.</p>
            			</div>
            			<div class="contentBlock">
            				<img src="../img/graphic.svg" />
            				<p class="title">graphic</p>
            				<p class="content">I work as a UX &amp; UI designer, trying to search every aspect of design in 
            			memories lost.</p>
            			</div>
            		</div>
            	</div>
            	<div class="footer">
            		<div class="goDown"><span class="text">keep going down</span><br/>
            		</div>
            		<div class="breadCrumbs">
						<span>what i do</span>
						<span>my cv</span>
            		</div>
            	</div>
            </div>
            <div class="section third">Section 3</div>
            <div class="section">Section 4</div>
        </div>
		
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
