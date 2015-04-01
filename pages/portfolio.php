
<?php
	$path = "";	

	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>		
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
		<div class="container valign-wrapper">
            <div class="pageContainer valign center-align">
                <p class="mainTitle">404 PAGE NOT FOUND</p>
                <p class="subtitle">Sorry mama, I was too drunk last night<br/>
                    :(
                </p>
            </div>
        </div>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
