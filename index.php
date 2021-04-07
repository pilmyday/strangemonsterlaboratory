<html>
    <head>
    <script src="jquery-3.5.1.min.js"></script>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="index_mobile.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>怪怪鑑定所</title>
	
    </head>
    <body>
		<div class="body">
			<div class="logo"></div>
			<ul class="menu">
				<li class="menubutton" id="about" onclick='location.href="about.php"'></li>
				<li class="menubutton" id="monster">
					<ul class="list">
						<li id="list1" onclick='location.href="monster.php?mon=waste"'></li>
						<li id="list2" onclick='location.href="monster.php?mon=hoarding"'></li>
						<li id="list3" onclick='location.href="monster.php?mon=exaggeration"'></li>
						<li id="list4" onclick='location.href="monster.php?mon=pretend"'></li>
						<li id="list5" onclick='location.href="monster.php?mon=rumors"'></li>
					</ul>
				</li>
				<li class="menubutton" id="knowledge" onclick='location.href="knowledge.php"'></li>
				<li class="menubutton" id="merchandise" onclick='location.href="merchandise.php"'></li>
				<li class="menubutton" id="finalvideo" onclick='location.href="video.php"'></li>
				
			</ul>
			<div class="button" id="previous"></div>
			<div class="button" id="next"></div>
			<div class="wellcome">
				<div id="player"></div>
			</div>
			<div class="backgroundpack">
				<div class="background"></div>
				<div class="door" id="door1"></div>
				<div class="door" id="door2" onclick='location.href="monster.php?mon=pretend"'></div>
				<div class="door" id="door3" onclick='location.href="monster.php?mon=hoarding"'></div>
				<div class="door" id="door4" onclick='location.href="monster.php?mon=waste"'></div>
				<div class="door" id="door5" onclick='location.href="monster.php?mon=exaggeration"'></div>
				<div class="door" id="door6" onclick='location.href="monster.php?mon=rumors"'></div>
				<div class="door" id="door7"></div>
			</div>
			
			
			
			<div class="menu_button"></div>
			<ul id="menu">
				<li id="menu_aboutus" onclick='location.href="about.php"'></li>
				<li id="menu_monster">
					<ul class="monster_ul">
						<li id="menu_waste" onclick='location.href="monster.php?mon=waste"'></li>
						<li id="menu_hoarding" onclick='location.href="monster.php?mon=hoarding'></li>
						<li id="menu_exaggeration" onclick='location.href="monster.php?mon=exaggeration'></li>
						<li id="menu_pretend" onclick='location.href="monster.php?mon=pretend'></li>
						<li id="menu_rumors" onclick='location.href="monster.php?mon=rumors'></li>
					</ul>
				</li>
				<li id="menu_knowledge" onclick='location.href="knowledge.php"'></li>
				<li id="menu_merchandise" onclick='location.href="merchandise.php"'></li>
				<li id="menu_video" onclick='location.href="video.php"'></li>
			</ul>
		</div>
		<script src="https://www.youtube.com/iframe_api"></script>
		<script>
			var a=2;
			var b=3;
			
			$("#monster").click(function(){
				$(".list").slideToggle("fast");
			});
			$("#previous").click(function(){
				if(a!=0 && $(window).width() > 428){
					$(".background").animate({left:"+=34.5%"});
					$(".door").animate({left:"+=34.5%"});
					a--;
				}
				else if(b!=1 && $(window).width() <= 428){
					$(".background").animate({backgroundPositionX:"-=16%"});
					b--;
				}
			});
			
			$("#next").click(function(){
				if(a!=4 && $(window).width() > 428){
					$(".background").animate({left:"-=34.5%"});
					$(".door").animate({left:"-=34.5%"});
					a++;
				}
				else if(b!=5 && $(window).width() <= 428){
					$(".background").animate({backgroundPositionX:"+=16%"});
					b++;
				}
			});
			var re="<?php echo $_GET[re];?>";
			
			if(re!="return"){
				var player;
				function onYouTubeIframeAPIReady() {
					player = new YT.Player('player', {
						height: '100%',
						width: '100%', 
						videoId: 'ElX46aw-xxw',
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
						$(".wellcome").css("display","none");
					}
				  }
			}
			else{
				$(".wellcome").css("display","none");
			}
			
			$(".menu_button").click(function (){
			$("#menu").animate({width: "toggle"},"fast");
		});
		</script>
    </body>
</html>