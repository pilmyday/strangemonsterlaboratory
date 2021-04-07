<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>怪怪們</title>
<link href="bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="bootstrap.bundle.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<link href="monster.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="body">
		
		<div class="monster"></div>
		<div class="h"></div>
		<div class="mongif"></div>
		
		<div class="play"  data-bs-toggle="modal" data-bs-target="#playgame"></div>
		<div class="modal" id="playgame" data-bs-backdrop="static" data-bs-keyboard="false">
			<div class="modal-dialog modal-dialog-centered modal-lg" style="width: 650px;">
				<div class="modal-content" style="height: 570px;">
					<div class="modal-header" style="height: 70px;left: -15px">
						<div class="goback" data-bs-dismiss="modal"></div>
					</div>
					<div class="modal-body" style="left: -25px;top: -25px">
						<div class="frame2">
							<iframe width="650px" height="500px" src="<?php 
								 switch($_GET[mon]){
									 case "waste":
										 echo 'https://pilmyday.github.io/Trash';
										 break;
									 case "hoarding":
										 echo 'https://pilmyday.github.io/Hamster/';
										 break;
									 case "exaggeration":
										 echo 'https://pilmyday.github.io/Chihuahua/';
										 break;
									 case "pretend":
										 echo 'https://pilmyday.github.io/Chameleon/';
										 break;
									 case "rumors":
										 echo 'https://pilmyday.github.io/Crow/';
										 break;
								 }
								 ?>"></iframe>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="round" data-bs-toggle="modal" data-bs-target="#model"></div>
		<div class="modal" id="model"  data-bs-backdrop="static" data-bs-keyboard="false">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content" style="height: 710px;width: 800px">
					<div class="modal-header" style="height: 70px;">
						<div class="goback" data-bs-dismiss="modal" style="left: 720px;"></div>
					</div>
					<div class="modal-body" style="margin: -16px;">
						<?php
							switch($_GET[mon]){
								case "waste":
									?>
									<div class="sketchfab-embed-wrapper">
										<iframe title="Strange monster laboratory_Waste monster" width="800" height="640" src="https://sketchfab.com/models/22965f71f95746c7aacd20099e77c7d2/embed?autostart=1">
										</iframe>
									</div>
						<?php
									break;
								case "hoarding":
									?>
									<div class="sketchfab-embed-wrapper">
										<iframe title="Strange monster laboratory_Hoarding monster" width="800" height="640" src="https://sketchfab.com/models/11ff5ce465274d0ca5c5c0d2b803c5f9/embed?autostart=1">
										</iframe>
									</div>
						<?php
									break;
								case "pretend":
									?>
									<div class="sketchfab-embed-wrapper frame">
										<iframe title="Strange monster laboratory_Pretend monster" width="800" height="640" src="https://sketchfab.com/models/cd38027bc82a4f66af71b7905a97d2a2/embed?autostart=1">
										</iframe>
									</div>
						<?php
									break;
								case "rumors":
									?>
									<div class="sketchfab-embed-wrapper frame">
										<iframe title="Strange monster laboratory_Rumors Monster" width="800" height="640" src="https://sketchfab.com/models/47528d7dcd9641fdb14d59abcf24566e/embed?autostart=1">
										</iframe>
									</div>
						<?php
									break;
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="aboutit" id="about1"></div>
		<div class="aboutit" id="about2"></div>
		<div class="aboutit" id="about3"></div>
		<div class="video" data-bs-toggle="modal" data-bs-target="#clickvideo"></div>
		
		<div class="button"></div>
		<ul class="menu">
			<li id="aboutus" onclick='location.href="about.php"'></li>
			<li id="monster">
				<ul class="monster_ul">
					<li id="menu_waste" onclick='location.href="monster.php?mon=waste"'></li>
					<li id="menu_hoarding" onclick='location.href="monster.php?mon=hoarding"'></li>
					<li id="menu_exaggeration" onclick='location.href="monster.php?mon=exaggeration"'></li>
					<li id="menu_pretend" onclick='location.href="monster.php?mon=pretend"'></li>
					<li id="menu_rumors" onclick='location.href="monster.php?mon=rumors"'></li>
				</ul>
			</li>
			<li id="knowledge" onclick='location.href="knowledge.php"'></li>
			<li id="merchandise" onclick='location.href="merchandise.php"'></li>
			<li id="video" onclick='location.href="video.php"'></li>
		</ul>
		
		<div class="modal" id="clickvideo">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content" style="height: 570px;width: 650px;">
					<div class="modal-header" style="height: 70px;">
						<div class="goback" data-bs-dismiss="modal" style="left: 570px;"></div>
					</div>
					<div class="modal-body" style="margin: -16px;">
						<div class="frame3">
						<iframe width="650" height="500" src="<?php 
								switch($_GET[mon]){
									case "waste":
										echo 'https://www.youtube.com/embed/VNqq8NuoQCE';
										break;
									case "hoarding":
										echo 'https://www.youtube.com/embed/P_WaSwJKKYI';
										break;
									case "exaggeration":
										echo 'https://www.youtube.com/embed/9Jwh4Z0PZBY';
										break;
									case "pretend":
										echo 'https://www.youtube.com/embed/l_FZ0GTXb-o';
										break;
									case "rumors":
										echo 'https://www.youtube.com/embed/rJx8FElobLI';
										break;
								}
					  		?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var $mon="<?php echo $_GET[mon];?>";
		switch($mon){
		   	case "waste":
		   		$(".monster").css("background-image",'url("gif/Trash/C5_1_1.svg")');
				$(".mongif").css("background-image",'url("gif/Trash/C5_1_2.gif")');
				$(".frame").css("border-image",'url("monster/SVG/D1.svg") 65 40 50 40');
				$(".frame2").css("border-image",'url("monster/SVG/D1.svg") 65 40 50 40');
				$(".frame3").css("border-image",'url("monster/SVG/D1.svg") 65 40 50 40');
				break;
			case "hoarding":
				$(".monster").css("background-image",'url("gif/Hamster/C4_1_1.svg")');
				$(".mongif").css("background-image",'url("gif/Hamster/C4_1_2.gif")');
				$(".frame").css("border-image",'url("monster/SVG/D2.svg") 65 40 50 40');
				$(".frame2").css("border-image",'url("monster/SVG/D2.svg") 65 40 50 40');
				$(".frame3").css("border-image",'url("monster/SVG/D2.svg") 65 40 50 40');
				break;
			case "exaggeration":
				$(".monster").css("background-image",'url("gif/Chihuahua/C3_1_1.svg")');
				$(".mongif").css("background-image",'url("gif/Chihuahua/C3_1_2.gif")');
				$(".frame").css("border-image",'url("monster/SVG/D3.svg") 65 40 50 40');
				$(".frame2").css("border-image",'url("monster/SVG/D3.svg") 65 40 50 40');
				$(".frame3").css("border-image",'url("monster/SVG/D3.svg") 65 40 50 40');
				break;
			case "pretend":
				$(".monster").css("background-image",'url("gif/Chameleon/C2_1_1.svg")');
				$(".mongif").css("background-image",'url("gif/Chameleon/C2_1_2.gif")');
				$(".frame").css("border-image",'url("monster/SVG/D4.svg") 65 40 50 40');
				$(".frame2").css("border-image",'url("monster/SVG/D4.svg") 65 40 50 40');
				$(".frame3").css("border-image",'url("monster/SVG/D4.svg") 65 40 50 40');
				break;
			case "rumors":
				$(".monster").css("background-image",'url("gif/Crow/C1_1_1.svg")');
				$(".mongif").css("background-image",'url("gif/Crow/C1_1_2.gif")');
				$(".frame").css("border-image",'url("monster/SVG/D5.svg") 65 40 50 40');
				$(".frame2").css("border-image",'url("monster/SVG/D5.svg") 65 40 50 40');
				$(".frame3").css("border-image",'url("monster/SVG/D5.svg") 65 40 50 40');
				break;
		}
		
		$("#about1").click(function(){
			switch($mon){
				case "waste":
					$(".monster").css("background-image",'url("gif/Trash/C5_1_1.svg")');
					$(".mongif").css("background-image",'url("gif/Trash/C5_1_2.gif")');
					break;
				case "hoarding":
					$(".monster").css("background-image",'url("gif/Hamster/C4_1_1.svg")');
					$(".mongif").css("background-image",'url("gif/Hamster/C4_1_2.gif")');
					break;
				case "exaggeration":
					$(".monster").css("background-image",'url("gif/Chihuahua/C3_1_1.svg")');
					$(".mongif").css("background-image",'url("gif/Chihuahua/C3_1_2.gif")');
					break;
				case "pretend":
					$(".monster").css("background-image",'url("gif/Chameleon/C2_1_1.svg")');
					$(".mongif").css("background-image",'url("gif/Chameleon/C2_1_2.gif")');
					break;
				case "rumors":
					$(".monster").css("background-image",'url("gif/Crow/C1_1_1.svg")');
					$(".mongif").css("background-image",'url("gif/Crow/C1_1_2.gif")');
					break;
			}
		});
		$("#about2").click(function(){
			switch($mon){
				case "waste":
					$(".monster").css("background-image",'url("gif/Trash/C5_2_1.svg")');
					$(".mongif").css("background-image",'url("gif/Trash/C5_2_2.gif")');
					break;
				case "hoarding":
					$(".monster").css("background-image",'url("gif/Hamster/C4_2_1.svg")');
					$(".mongif").css("background-image",'url("gif/Hamster/C4_2_2.gif")');
					break;
				case "exaggeration":
					$(".monster").css("background-image",'url("gif/Chihuahua/C3_2_1.svg")');
					$(".mongif").css("background-image",'url("gif/Chihuahua/C3_2_2.gif")');
					break;
				case "pretend":
					$(".monster").css("background-image",'url("gif/Chameleon/C2_2_1.svg")');
					$(".mongif").css("background-image",'url("gif/Chameleon/C2_2_2.gif")');
					break;
				case "rumors":
					$(".monster").css("background-image",'url("gif/Crow/C1_2_1.svg")');
					$(".mongif").css("background-image",'url("gif/Crow/C1_2_2.gif")');
					break;
			}
		});
		$("#about3").click(function(){
			switch($mon){
				case "waste":
					$(".monster").css("background-image",'url("gif/Trash/C5_3_1.svg")');
					$(".mongif").css("background-image",'url("gif/Trash/C5_3_2.gif")');
					break;
				case "hoarding":
					$(".monster").css("background-image",'url("gif/Hamster/C4_3_1.svg")');
					$(".mongif").css("background-image",'url("gif/Hamster/C4_3_2.gif")');
					break;
				case "exaggeration":
					$(".monster").css("background-image",'url("gif/Chihuahua/C3_3_1.svg")');
					$(".mongif").css("background-image",'url("gif/Chihuahua/C3_3_2.gif")');
					break;
				case "pretend":
					$(".monster").css("background-image",'url("gif/Chameleon/C2_3_1.svg")');
					$(".mongif").css("background-image",'url("gif/Chameleon/C2_3_2.gif")');
					break;
				case "rumors":
					$(".monster").css("background-image",'url("gif/Crow/C1_3_1.svg")');
					$(".mongif").css("background-image",'url("gif/Crow/C1_3_2.gif")');
					break;
			}
		});
		
		$(".button").click(function (){
			$(".menu").animate({width: "toggle"},"fast");
		});
		$("#monster").click(function (){
			$(".monster_ul").slideToggle("fast");
		});
	</script>
</body>
</html>