<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>周邊商品</title>
<link href="merchandise.css" rel="stylesheet" type="text/css">
<script src="jquery-3.5.1.min.js"></script>
</head>

<body>
	<div class="body">
		<div class="merchandise">
			<div class="mer leftmer" id="mer1"></div>
			<div class="mer midmer" id="mer2"></div>
			<div class="mer rightmer" id="mer3"></div>
			<div class="mer vis" id="mer4"></div>
		</div>
		<div class="glass"></div>
		
		<div class="previous"></div>
		<div class="next"></div>
		
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
		var arr=[$("#mer1"),$("#mer2"),$("#mer3"),$("#mer4")];
		var now=2;
		var ready=true;
		$(".previous").click(function(){
			if(ready==true){
				ready=false;
				arr[3].css({"top":"0px","left":"-41%"});
				arr[3].animate({top:"+=15%",left:"+=41%"},"fast");
				arr[0].css({"z-index":"3"});
				arr[0].animate({top:"+=15%",left:"+=41%"},"fast");
				arr[1].css({"z-index":"2"});
				arr[1].animate({top:"-=15%",left:"+=41%"},"fast");
				arr[2].animate({top:"-=15%",left:"+=41%"},"fast");
				arr.splice(3,1);
				switch(now){
					case 1:
						arr.splice(0,0,$("#mer3"));
						now=4;
						break;
					case 2:
						arr.splice(0,0,$("#mer4"));
						now-=1;
						break;
					case 3:
						arr.splice(0,0,$("#mer1"));
						now-=1;
						break;
					case 4:
						arr.splice(0,0,$("#mer2"));
						now-=1;
						break;
				}
				setTimeout(function(){
					ready=true;
				},200);
			}
		});
		$(".next").click(function(){
			if(ready==true){
				ready=false;
				arr[3].css({"top":"0px","left":"123%"});
				arr[3].animate({top:"+=15%",left:"-=41%"},"fast");
				arr[2].css({"z-index":"3"});
				arr[2].animate({top:"+=15%",left:"-=41%"},"fast");
				arr[1].css({"z-index":"2"});
				arr[1].animate({top:"-=15%",left:"-=41%"},"fast");
				arr[0].animate({top:"-=15%",left:"-=41%"},"fast");
				arr.splice(0,1);
				switch(now){
					case 1:
						arr.splice(3,0,$("#mer4"));
						now+=1;
						break;
					case 2:
						arr.splice(3,0,$("#mer1"));
						now+=1;
						break;
					case 3:
						arr.splice(3,0,$("#mer2"));
						now+=1;
						break;
					case 4:
						arr.splice(3,0,$("#mer3"));
						now=1;
						break;
				}
				setTimeout(function(){
					ready=true;
				},200);
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