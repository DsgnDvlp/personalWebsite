
<?php
	$path = "";

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>
		<link rel="stylesheet" type="text/css" href="css/contact.css"/>
		<script type = "text/javascript" src="js/contact.js"></script>
		<style>

            .container{
                position: absolute;
                right: 0;
                left: 0;
                top: 0;
                bottom: 0;
            }

            .pageContainer{
                margin: auto;
                text-align: center;
            }
        </style>
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		<div class="divContainer">
            <div class="section">
            	<div class="innerContainer">
            		<div class="title">hola</div>
            		<div class="subtitle">
            			<p>I’m a 24 years old designer from Italy, born in Lima Perù, currently living in Milan.</p>
						<br/>
						<p>I work for a web agency and as a freelancer &amp; consultant for digital realities.</p>
            		</div>
            	</div>
            	<div class="pageTitle">about</div>
            </div>
		</div>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
