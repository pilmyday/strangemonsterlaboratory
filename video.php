<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>結局影片</title>
<link href="video.css" rel="stylesheet" type="text/css">
<link href="video_mobile.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="jquery-3.5.1.min.js"></script>
</head>

<body>
	<div class="body">
		<div class="bg">
			<div class="bg"></div>
			<div class="end">
				<div id="player"></div>
			</div>
			
		</div>
		
		
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
	<script src="https://www.youtube.com/iframe_api"></script>
	<script>
		$(".button").click(function (){
			$(".menu").animate({width: "toggle"},"fast");
		});
		$("#monster").click(function (){
			$(".monster_ul").slideToggle("fast");
		});
		
		var player;
		function onYouTubeIframeAPIReady() {
			player = new YT.Player('player', {
				height: '100%',
				width: '100%', 
				videoId: 'QiiMci4I-Mk',
				playerVars: { 'autoplay': 1, 'controls': 0 },
				events: {
					'onReady': onPlayerReady,
					'onStateChange': onPlayerStateChange
				}
			});
		  }

		  function onPlayerReady(e) {
			e.target.playVideo();
		  }
		  function onPlayerStateChange(e) {
			if(e.data==0){
				
			}
		  }
	</script>
</body>
</html>