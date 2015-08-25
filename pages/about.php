
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
            		<div class="title">Ehilà,</div>
            		<div class="subtitle">
						<p>sono un giovane progettista nato nel 1990 a Lima, Perù.</p>
						<p>Attualmente vivo a Milano e lavoro per un’agenzia di comunicazione.</p>
						<p>Nel mio tempo libero mi piace trovare lavori o progetti nuovi che possano aiutarmi a crescere professionalmente.</p>
						<p>E di tanto in tanto scrivo nel mio blog.</p>
            		</div>
            	</div>
            	<div class="pageTitle">about</div>
            	<div class="footer">
            		<div class="goDown"><a href="#whatido"><span class="text">go down</span></a><br/>
            			<div class="lineDown"></div>
            		</div>
            	</div>
            </div>
            <div class="section second">
							<div class="topPanel"><a href="#about"><span class="text">back</span></a></div>
            	<div class="centerLine"></div>
            	<div class="centerBlock"><span class="text">what i do</span></div>
							<div class="secondCenteredBlock">
								Credo che sostanzialmente si possa fare tutto se si segue un metodo preciso e si rispettano
							</div>

            	<div class="contentBlockContainer left">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<img src="./img/uxUi.svg"/>
            				<p class="title">UI / UX DESIGN</p>
            				<p class="content">I work as a UX &amp; UI designer, trying to search every aspect of design in
            			memories lost.</p>
            			</div>
            			<div class="contentBlock">
							<img class="secondRow" src="./img/graphic.svg" />
            				<p class="title">Graphic design</p>
            				<p class="content">I work as a UX &amp; UI designer, trying to search every aspect of design in
            			memories lost.</p>
            			</div>
            		</div>
            	</div>
            	<div class="contentBlockContainer right">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<img class="visual" src="./img/visual.svg" />
            				<p class="title">digital ad</p>
            				<p class="content">I work as a UX &amp; UI designer, trying to search every aspect of design in
            			memories lost.</p>
            			</div>
            			<div class="contentBlock">
            				<p class="title">developement</p>
            				<p class="content">I work as a UX &amp; UI designer, trying to search every aspect of design in
            			memories lost.</p>
            			</div>
            		</div>
            	</div>
            	<div class="footer">
					<div class="goDown"><a href="#mycv"><span class="text">keep going down</span></a><br/>
            		</div>
            	</div>
            </div>
			<div class="section third">
				<div class="topPanel"><a href="#about"><span class="text">back</span></a></div>
            	<div class="centerLine"></div>
            	<div class="centerBlock"><span class="text">soft ware skills</span></div>
				<div class="secondCenteredBlock">
					Credo che sostanzialmente si possa fare tutto se si segue un metodo preciso e si rispettano
				</div>

            	<div class="contentBlockContainer left">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<span class="number">90%</span>
            				<p class="title">ADOBE CC</p>
            				<p class="content">Conosco bene i programmi di grafica tradizionali quali: InDesign CC, Illustrator CC, Photoshop CC.
Sto attualmente studiando anche After Effects per creare animazioni semplici.</p>
            			</div>
            			<div class="contentBlock">
							<span class="number">100%</span>
            				<p class="title">SKETCH &amp; AD</p>
            				<p class="content">Conosco bene i programmi di grafica tradizionali quali: InDesign CC, Illustrator CC, Photoshop CC.
Sto attualmente studiando anche After Effects per creare animazioni semplici.</p>
            			</div>
            		</div>
            	</div>
            	<div class="contentBlockContainer right">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<span class="number">95%</span>
            				<p class="title">PROTOTYPING</p>
            				<p class="content">Conosco bene i programmi di grafica tradizionali quali: InDesign CC, Illustrator CC, Photoshop CC.
Sto attualmente studiando anche After Effects per creare animazioni semplici.</p>
            			</div>
            			<div class="contentBlock">
            				<span class="number">85%</span>
            				<p class="title">HTML &amp; CSS</p>
            				<p class="content">Conosco bene i programmi di grafica tradizionali quali: InDesign CC, Illustrator CC, Photoshop CC.
Sto attualmente studiando anche After Effects per creare animazioni semplici.</p>
            			</div>
            		</div>
            	</div>
            	<div class="footer">
					<div class="goDown"><a href="#mycv"><span class="text">keep going down</span></a><br/>
            		</div>
            	</div>
            </div>
            <div class="section fourth">
				<div class="topPanel"><a href="#about"><span class="text">back</span></a></div>
            	<div class="centerLine"></div>
				<div class="centerBlock"><span class="text">MY<br/>CV</span></div>
				<div class="secondCenteredBlock">
					Credo che sostanzialmente si possa fare tutto se si segue un metodo preciso e si rispettano
				</div>

            	<div class="contentBlockContainer left">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<p class="title">Studi Superiori</p>
            				<div class="content">
								<p class="contentTitle">anno 2009</p>
									I.T.S.O.S. Albe Steiner
									Diploma di Perito Grafico Aziendale
								<p class="contentTitle">anno 2013</p>
									Diploma di Graphic Designer conseguito presso
									Fondazione Accademia di Comunicazione
							</div>
            			</div>
            			<div class="contentBlock">
            				<p class="title">Premi</p>
            				<div class="content">
								<p class="contentTitle">anno 2013</p>
								D&amp;AD Student of the Year<br/>
								Product Design con il prodotto “Hermes”
							</div>
            			</div>
            		</div>
            	</div>
            	<div class="contentBlockContainer right">
            		<div class="contentBlockContent">
            			<div class="contentBlock">
            				<p class="title">Esperienza</p>
            				<div class="content">
								<p class="contentTitle">anno 2009</p>
								Stage presso Mediastars<br/>
								“Il premio tecnico della pubblicità italiana”
								<p class="contentTitle">anno 2011</p>
								Freelancer come designer di brand identity,<br/>
								supporti cartacei e web
								<p class="contentTitle">anno 2009</p>
								Junior Designer presso<br/>
								Pvolpedesign (Design in Town)
								<p class="contentTitle">anno 2013</p>
								Graphic &amp; Art Director presso<br/>
								Comunicazione Gradizeroseitre S.r.l
								<p class="contentTitle">anno 2014</p>
								UI/UX &amp; Web Designer<br/>
								presso iGenius S.r.l
							</div>
            			</div>
            		</div>
            	</div>
				<div class="footer">
            		<div class="goDown"><a href="#"><span class="downloadButton">Download cv</span></a><br/>
            		</div>
            	</div>
        	</div>
		</div>
        <div class="breadCrumbs">
			<span class="whatido"><a href="#whatido">what i do</a></span>
			<span class="software"><a href="#software">software</a></span>
			<span class="mycv"><a href="#mycv">my cv</a></span>
        </div>

	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
