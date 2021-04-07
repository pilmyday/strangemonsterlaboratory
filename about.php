<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>關於我們</title>
<script src="jquery-3.5.1.min.js"></script>
<link href="about.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="body">
		<div class="about"></div>
		
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
	</div>
	<script>
		$(".button").click(function (){
			$(".menu").animate({width: "toggle"},"fast");
		});
		$("#monster").click(function (){
			$(".monster_ul").slideToggle("fast");
		});
	</script>
</body>
</html>