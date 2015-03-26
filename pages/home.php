
<?php
	$path = "";	

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>		
        <link rel="stylesheet" type="text/css" href="css/home.css"/>
	<?php }
	
	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		
		<div class="container valign-wrapper">
            <div class="homeContent valign center-align">
                <p class="mainTitle">
                    <?php 
                        /* CALCOLO DELL'ORA PER IL CAMBIO DEL MESSAGGIO*/
                        $hour = intVal(Date("G"));
                        if($hour >= 6 && $hour < 12){ ?>
                            GOOD MORNING
                        <?php } else if($hour >= 12 && $hour<14 ){ ?>
                            TIME TO EAT SOMETHING!
                        <?php } else if($hour >= 14 && $hour < 18){ ?>
                            GOOD AFTERNOON
                        <?php } else if($hour >=18 || $hour < 22){ ?>
                            PARTY TIME
                        <?php } else{ ?>
                            Zzzz
                        <?php } 
                    ?>
                </p>
                <p class="subtitle">
                    My name is Paul Jesus Benites Romero<br/>
                    &amp; I’m a graphic designer.
                </p>
                <div class="row buttonRow">
                    <div class="col s10 offset-s1 m5 ">
                        <button class="homeButton">
                            About
                        </button>
                    </div>
                    <div class="col s10 offset-s1 m5 offset-m2">
                        <button class="homeButton">
                            Portfolio
                        </button>
                    </div>
                </div>
            </div>
		</div>
		
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
