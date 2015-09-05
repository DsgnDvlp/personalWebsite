
<?php
	$path = "";
	include("database.php");
	$connection = connect();


	//USER CONTROLLER PER L'HEAD
	function head($path){ ?>

		<!--ROYAL SLIDER -->
		<link rel="stylesheet" href="css/royalslider.css">
		<!-- skin stylesheet (change it if you use another) -->
		<!--<link rel="stylesheet" href="royalslider/skins/default/rs-default.css">-->
		<!-- Main slider JS script file -->
		<!-- Create it with slider online build tool for better performance. -->
		<script type="text/javascript" src="js/jquery.easings.min.js"></script>
		<script type="text/javascript" src="js/jquery.royalslider.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/dettaglio.css"/>
        <script type="text/javascript" src="js/dettaglio.js"></script>
	<?php }

	//user controll per il content..
	function content($path){ ?>
		<!-- 		CONTENUTO DELLA PAGINA	 -->
		<?php
			global $connection;
			$result = $connection -> query("select * from Progetti p join Categorie c on p.category = c.id where p.id = '".$_GET["i"]."'");
            $project  = mysqli_fetch_array($result);

			$nextPrevious = $connection -> query("select * from Progetti p where id != '".$_GET["i"]."'");
			$previous = mysqli_fetch_array($nextPrevious);
			$next = mysqli_fetch_array($nextPrevious);
		?>
		<div id="fullpage">
			<div class="royalSlider rsDefault">
			    <!-- simple image slide -->
			    <img class="rsImg" src="img/dino.png" alt="image desc" />

				<img class="rsImg" src="img/dino.png" alt="image desc" />
				<img class="rsImg" src="img/dino.png" alt="image desc" />
			</div>
			<p class="category"><?= $project["Name"]?></p>
			<p class="title"><?= $project["Title"] ?></p>
			<p class="subtitle"><?= $project["Subtitle_".$_SESSION["lang"]] ?></p>
			<div class="detailsRow">
				<div class="detailsItem">
					<p class="detailTitle"><?=tr_("dettaglioInfo")?></p>
					<p class="detailContent"><?= $project["Info_".$_SESSION["lang"]]?></p>
				</div>
				<div class="detailsItem">
					<p class="detailTitle"><?=tr_("dettaglioYear")?></p>
					<p class="detailContent"><?= $project["Year"]?></p>
				</div>
				<div class="detailsItem">
					<p class="detailTitle"><?=tr_("dettaglioRole")?></p>
					<p class="detailContent"><?= $project["Role"]?></p>
				</div>
			</div>
			<div class="imageContainer">
				<img class="fullWidth" src="projects/<?=$project['Title']?>/1.png"/>
				<img class="fullWidth" src="projects/<?=$project['Title']?>/2.png"/>
				<img class="middleWidth left" src="projects/<?=$project['Title']?>/3.png"/>
				<img class="middleWidth right" src="projects/<?=$project['Title']?>/4.png"/>
				<img class="fullWidth" src="projects/<?=$project['Title']?>/5.png"/>
			</div>
			<div class="prevNextContainer">
				<div class="previous">
					<a class="prevNextLink" href="projectDetails?i=<?=$previous['id']?>">
						<img class="prevNextImg" src = "projects/<?=$previous["Title"]?>/front.png">
						<p class="prevNextText"><?=tr_("dettaglioPreviousButton")?></p>
					</a>
				</div>
				<div class="next">
					<a class="prevNextLink" href="projectDetails?i=<?=$next['id']?>">
						<img class="prevNextImg" src = "projects/<?=$next["Title"]?>/front.png">
						<p class="prevNextText"><?=tr_("dettaglioNextButton")?></p>
					</a>
				</div>
			</div>
			<div class="bottomRow">
				<p class="bottomRowText"><?=tr_("dettaglioLostText")?></p>
				<a class="bottomRowButton" href="contact"><?=tr_("dettaglioContactButton")?></a>
			</div>
		</div>
	<?php }

	//chiamata alla masterPage
	require($path."master.php");
?>
