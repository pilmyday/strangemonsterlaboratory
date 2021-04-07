<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>衛教知識</title>
<link href="knowledge.css" rel="stylesheet" type="text/css">
<script src="jquery-3.5.1.min.js"></script>
</head>

<body>
	<div class="body">
		
		<div class="main">
			<div class="knowledge"></div>
			<div class="rumors" onclick='location.href="knowledge.php?mon=rumors"'></div>
			<div class="pretend" onclick='location.href="knowledge.php?mon=pretend"'></div>
			<div class="exaggeration" onclick='location.href="knowledge.php?mon=exaggeration"'></div>
			<div class="hoarding" onclick='location.href="knowledge.php?mon=hoarding"'></div>
			<div class="waste" onclick='location.href="knowledge.php?mon=waste"'></div>
		</div>
		<div class="waste_main hidden">
			<div class="knowledge knowledge_waste"></div>
			<div class="waste1"></div>
			<div class="waste2"></div>
			<div class="waste3"></div>
			
			<div class="back" onclick='location.href="knowledge.php"'></div>
		</div>
		<div class="hoarding_main hidden">
			<div class="knowledge knowledge_hoarding"></div>
			<div class="hoarding1"></div>
			<div class="hoarding2"></div>
			
			<div class="back" onclick='location.href="knowledge.php"'></div>
		</div>
		<div class="exaggeration_main hidden">
			<div class="knowledge knowledge_exaggeration"></div>
			<div class="exaggeration1"></div>
			<div class="exaggeration2"></div>
			
			<div class="back" onclick='location.href="knowledge.php"'></div>
		</div>
		<div class="pretend_main hidden">
			<div class="knowledge knowledge_pretend"></div>
			<div class="pretend1"></div>
			<div class="pretend2"></div>
			
			<div class="back" onclick='location.href="knowledge.php"'></div>
		</div>
		<div class="rumors_main hidden">
			<div class="knowledge knowledge_rumors"></div>
			<div class="rumors1"></div>
			<div class="rumors2"></div>
			
			<div class="back" onclick='location.href="knowledge.php"'></div>
		</div>
		
		<div class="hidden QAs" id="waste_QA">
			<div class="waste_QA hidden" id="waste_Q1"></div>
			<div class="waste_QA hidden" id="waste_A1">
				<img src="knowledge/Trash/QA/QA1_1.png">
				<img src="knowledge/Trash/QA/QA1_2.png">
				<img src="knowledge/Trash/QA/QA1_3.png">
			</div>
			<div class="waste_QA hidden" id="waste_Q2"></div>
			<div class="waste_QA hidden" id="waste_A2">
				<img src="knowledge/Trash/QA/QA2_1.png">
			</div>
			<div class="waste_QA hidden" id="waste_Q3"></div>
			<div class="waste_QA hidden" id="waste_A3">
				<img src="knowledge/Trash/QA/QA3_1.png">
			</div>
		</div>
		<div class="hidden QAs" id="hoarding_QA">
			<div class="hoarding_QA hidden" id="hoarding_Q1"></div>
			<div class="hoarding_QA hidden" id="hoarding_A1">
				<img src="knowledge/Hamster/QA/QA1_1.png">
				<img src="knowledge/Hamster/QA/QA1_2.png">
				<img src="knowledge/Hamster/QA/QA1_3.png">
			</div>
			<div class="hoarding_QA hidden" id="hoarding_Q2"></div>
			<div class="hoarding_QA hidden" id="hoarding_A2">
				<img src="knowledge/Hamster/QA/QA2_1.png">
				<img src="knowledge/Hamster/QA/QA2_2.png">
			</div>
		</div>
		<div class="hidden QAs" id="exaggeration_QA">
			<div class="exaggeration_QA hidden" id="exaggeration_Q1"></div>
			<div class="exaggeration_QA hidden" id="exaggeration_A1">
				<img src="knowledge/Chihuahua/QA/QA1_1.png">
				<img src="knowledge/Chihuahua/QA/QA1_2.png">
			</div>
			<div class="exaggeration_QA hidden" id="exaggeration_Q2"></div>
			<div class="exaggeration_QA hidden" id="exaggeration_A2">
				<img src="knowledge/Chihuahua/QA/QA2_1.png">
			</div>
		</div>
		<div class="hidden QAs" id="pretend_QA">
			<div class="pretend_QA hidden" id="pretend_Q1"></div>
			<div class="pretend_QA hidden" id="pretend_A1">
				<img src="knowledge/Chameleon/QA/QA1_1.png">
				<img src="knowledge/Chameleon/QA/QA1_2.png">
			</div>
			<div class="pretend_QA hidden" id="pretend_Q2"></div>
			<div class="pretend_QA hidden" id="pretend_A2">
				<img src="knowledge/Chameleon/QA/QA2_1.png">
			</div>
		</div>
		<div class="hidden QAs" id="rumors_QA">
			<div class="rumors_QA hidden" id="rumors_Q1"></div>
			<div class="rumors_QA hidden" id="rumors_A1">
				<img src="knowledge/Crow/QA/QA1_1.png">
				<img src="knowledge/Crow/QA/QA1_2.png">
			</div>
			<div class="rumors_QA hidden" id="rumors_Q2"></div>
			<div class="rumors_QA hidden" id="rumors_A2">
				<img src="knowledge/Crow/QA/QA2_1.png">
				<img src="knowledge/Crow/QA/QA2_2.png">
				<img src="knowledge/Crow/QA/QA2_3.png">
			</div>
		</div>
		
		
		<div class="QAs hidden" id="shares">
			<div class="answer"></div>
			<div class="close"></div>
			<div class="frame"></div>
			<div class="previous"></div>
			<div class="next"></div>
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
	<script>
		$(".button").click(function (){
			$(".menu").animate({width: "toggle"},"fast");
		});
		$("#monster").click(function (){
			$(".monster_ul").slideToggle("fast");
		});
		
		var $mon="<?php echo $_GET[mon];?>";
		switch($mon){
			case "waste":
				$(".waste_main").removeClass("hidden");
				$(".main").addClass("hidden");
				break;
			case "hoarding":
				$(".hoarding_main").removeClass("hidden");
				$(".main").addClass("hidden");
				break;
			case "exaggeration":
				$(".exaggeration_main").removeClass("hidden");
				$(".main").addClass("hidden");
				break;
			case "pretend":
				$(".pretend_main").removeClass("hidden");
				$(".main").addClass("hidden");
				break;
			case "rumors":
				$(".rumors_main").removeClass("hidden");
				$(".main").addClass("hidden");
				break;
		}
		
		var q="";
		$(".waste1").click(function(){
			$("#shares,#waste_QA,#waste_Q1").removeClass("hidden");
			q="waste1";
		});
		$(".waste2").click(function(){
			$("#shares,#waste_QA,#waste_Q2").removeClass("hidden");
			q="waste2";
		});
		$(".waste3").click(function(){
			$("#shares,#waste_QA,#waste_Q3").removeClass("hidden");
			q="waste3";
		});
		$(".hoarding1").click(function(){
			$("#shares,#hoarding_QA,#hoarding_Q1").removeClass("hidden");
			q="hoarding1";
		});
		$(".hoarding2").click(function(){
			$("#shares,#hoarding_QA,#hoarding_Q2").removeClass("hidden");
			q="hoarding2";
		});
		$(".exaggeration1").click(function(){
			$("#shares,#exaggeration_QA,#exaggeration_Q1").removeClass("hidden");
			q="exaggeration1";
		});
		$(".exaggeration2").click(function(){
			$("#shares,#exaggeration_QA,#exaggeration_Q2").removeClass("hidden");
			q="exaggeration2";
		});
		$(".pretend1").click(function(){
			$("#shares,#pretend_QA,#pretend_Q1").removeClass("hidden");
			q="pretend1";
		});
		$(".pretend2").click(function(){
			$("#shares,#pretend_QA,#pretend_Q2").removeClass("hidden");
			q="pretend2";
		});
		$(".rumors1").click(function(){
			$("#shares,#rumors_QA,#rumors_Q1").removeClass("hidden");
			q="rumors1";
		});
		$(".rumors2").click(function(){
			$("#shares,#rumors_QA,#rumors_Q2").removeClass("hidden");
			q="rumors2";
		});
		
		$(".answer").click(function(){
			switch(q){
				case "waste1":
					$("#waste_A1").removeClass("hidden");
					break;
				case "waste2":
					$("#waste_A2").removeClass("hidden");
					break;
				case "waste3":
					$("#waste_A3").removeClass("hidden");
					break;
				case "hoarding1":
					$("#hoarding_A1").removeClass("hidden");
					break;
				case "hoarding2":
					$("#hoarding_A2").removeClass("hidden");
					break;
				case "exaggeration1":
					$("#exaggeration_A1").removeClass("hidden");
					break;
				case "exaggeration2":
					$("#exaggeration_A2").removeClass("hidden");
					break;
				case "pretend1":
					$("#pretend_A1").removeClass("hidden");
					break;
				case "pretend2":
					$("#pretend_A2").removeClass("hidden");
					break;
				case "rumors1":
					$("#rumors_A1").removeClass("hidden");
					break;
				case "rumors2":
					$("#rumors_A2").removeClass("hidden");
					break;
			}
		});
		
		$(".previous").click(function(){
			switch(q){
				case "waste2":
					$("#waste_Q2").animate({left:"+=100%"},"fast");
					$("#waste_Q2").addClass("hidden");
					$("#waste_Q1").css({left:"-95%"},"fast");
					$("#waste_Q1").animate({left:"+=100%"},"fast");
					$("#waste_Q1").removeClass("hidden");
					q="waste1";
					break;
				case "waste3":
					$("#waste_Q3").animate({left:"+=100%"},"fast");
					$("#waste_Q3").addClass("hidden");
					$("#waste_Q2").css({left:"-95%"},"fast");
					$("#waste_Q2").animate({left:"+=100%"},"fast");
					$("#waste_Q2").removeClass("hidden");
					q="waste2";
					break;
				case "hoarding2":
					$("#hoarding_Q2").animate({left:"+=100%"},"fast");
					$("#hoarding_Q2").addClass("hidden");
					$("#hoarding_Q1").css({left:"-95%"},"fast");
					$("#hoarding_Q1").animate({left:"+=100%"},"fast");
					$("#hoarding_Q1").removeClass("hidden");
					q="hoarding1";
					break;
				case "exaggeration2":
					$("#exaggeration_Q2").animate({left:"+=100%"},"fast");
					$("#exaggeration_Q2").addClass("hidden");
					$("#exaggeration_Q1").css({left:"-95%"},"fast");
					$("#exaggeration_Q1").animate({left:"+=100%"},"fast");
					$("#exaggeration_Q1").removeClass("hidden");
					q="exaggeration1";
					break;
				case "pretend2":
					$("#pretend_Q2").animate({left:"+=100%"},"fast");
					$("#pretend_Q2").addClass("hidden");
					$("#pretend_Q1").css({left:"-95%"},"fast");
					$("#pretend_Q1").animate({left:"+=100%"},"fast");
					$("#pretend_Q1").removeClass("hidden");
					q="pretend1";
					break;
				case "rumors2":
					$("#rumors_Q2").animate({left:"+=100%"},"fast");
					$("#rumors_Q2").addClass("hidden");
					$("#rumors_Q1").css({left:"-95%"},"fast");
					$("#rumors_Q1").animate({left:"+=100%"},"fast");
					$("#rumors_Q1").removeClass("hidden");
					q="rumors1";
					break;
			}
		});
		
		$(".next").click(function(){
			switch(q){
				case "waste1":
					$("#waste_Q1").animate({left:"-=100%"},"fast");
					$("#waste_Q1").addClass("hidden");
					$("#waste_Q2").css({left:"105%"},"fast");
					$("#waste_Q2").animate({left:"-=100%"},"fast");
					$("#waste_Q2").removeClass("hidden");
					q="waste2";
					break;
				case "waste2":
					$("#waste_Q2").animate({left:"-=100%"},"fast");
					$("#waste_Q2").addClass("hidden");
					$("#waste_Q3").css({left:"105%"},"fast");
					$("#waste_Q3").animate({left:"-=100%"},"fast");
					$("#waste_Q3").removeClass("hidden");
					q="waste3";
					break;
				case "hoarding1":
					$("#hoarding_Q1").animate({left:"-=100%"},"fast");
					$("#hoarding_Q1").addClass("hidden");
					$("#hoarding_Q2").css({left:"105%"},"fast");
					$("#hoarding_Q2").animate({left:"-=100%"},"fast");
					$("#hoarding_Q2").removeClass("hidden");
					q="hoarding2";
					break;
				case "exaggeration1":
					$("#exaggeration_Q1").animate({left:"-=100%"},"fast");
					$("#exaggeration_Q1").addClass("hidden");
					$("#exaggeration_Q2").css({left:"105%"},"fast");
					$("#exaggeration_Q2").animate({left:"-=100%"},"fast");
					$("#exaggeration_Q2").removeClass("hidden");
					q="exaggeration2";
					break;
				case "pretend1":
					$("#pretend_Q1").animate({left:"-=100%"},"fast");
					$("#pretend_Q1").addClass("hidden");
					$("#pretend_Q2").css({left:"105%"},"fast");
					$("#pretend_Q2").animate({left:"-=100%"},"fast");
					$("#pretend_Q2").removeClass("hidden");
					q="pretend2";
					break;
				case "rumors1":
					$("#rumors_Q1").animate({left:"-=100%"},"fast");
					$("#rumors_Q1").addClass("hidden");
					$("#rumors_Q2").css({left:"105%"},"fast");
					$("#rumors_Q2").animate({left:"-=100%"},"fast");
					$("#rumors_Q2").removeClass("hidden");
					q="rumors2";
					break;
			}
		});
		
		$(".close").click(function(){
			if(!$("#waste_A1").hasClass("hidden")){
				$("#waste_A1").addClass("hidden");
			}
			else if(!$("#waste_A2").hasClass("hidden")){
				$("#waste_A2").addClass("hidden");
			}
			else if(!$("#waste_A3").hasClass("hidden")){
				$("#waste_A3").addClass("hidden");
			}
			else if(!$("#hoarding_A1").hasClass("hidden")){
				$("#hoarding_A1").addClass("hidden");
			}
			else if(!$("#hoarding_A2").hasClass("hidden")){
				$("#hoarding_A2").addClass("hidden");
			}
			else if(!$("#exaggeration_A1").hasClass("hidden")){
				$("#exaggeration_A1").addClass("hidden");
			}
			else if(!$("#exaggeration_A2").hasClass("hidden")){
				$("#exaggeration_A2").addClass("hidden");
			}
			else if(!$("#pretend_A1").hasClass("hidden")){
				$("#pretend_A1").addClass("hidden");
			}
			else if(!$("#pretend_A2").hasClass("hidden")){
				$("#pretend_A2").addClass("hidden");
			}
			else if(!$("#rumors_A1").hasClass("hidden")){
				$("#rumors_A1").addClass("hidden");
			}
			else if(!$("#rumors_A2").hasClass("hidden")){
				$("#rumors_A2").addClass("hidden");
			}
			else{
				$(".QAs,.waste_QA,.hoarding_QA,.exaggeration_QA,.pretend_QA,.rumors_QA").addClass("hidden");
			}
			
		});
	</script>
</body>
</html>