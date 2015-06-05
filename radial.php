<!doctype html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<style>
	.radial-menu-container{
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: row;
	}
	.rad-menu-items{
		list-style-type: none;
		padding: 0;
	}
	.rad-menu-items li{
		width: 60px;
		height: 60px;
		background-color: #ffd200;
		border-radius: 50%;
	}
	.rad-menu-pop, .rad-menu-items li{
		position: absolute;
	}
	.rad-menu-pop{
		width: 60px;
		height: 60px;
		background-color: #ff7200;
	}
	.clearfix::before, .clearfix::after{
		display: table;
		content: "";
	}
	.clearfix::after{
		clear: both;
	}
	@media screen and (device-width: 320px) 
  				  and (device-height: 640px) 
				  and (-webkit-device-pixel-ratio: 3) 
				  and (orientation: portrait) {
				  	.rad-menu-items li{
				  		width: 120px;
				  		height: 120px;
				  	}
	}
	</style>
</head>
<body class="clearfix">

<div class="radial-menu-container">
	<ul class="rad-menu-items clearfix">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li class="rad-menu-pop"></li>
	</ul>
	<br clear="all"/>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
var faArray = ['facebook', 'twitter', 'instagram', 'empire', 'dribbble', 'pinterest'];
function bodyMod(){
	var bodyBgColor = [];
	for(i = 0; i < 3; i++){
		bodyBgColor[i] = (Math.floor(Math.random() * 255) + 1).toString(16);
	}
	$('body').css({
		"transition" : "all 1s ease",
		"background-color" : "#" + bodyBgColor[0] + bodyBgColor[1] + bodyBgColor[2]
	});
	console.log(bodyBgColor);
}
$(function(){
	$('.rad-menu-items').css({
		"position" : "relative",
		"top" : (window.innerHeight / 2) - $('.rad-menu-items li').height(),
	});
	//setInterval(bodyMod, 1000);
});
$('.rad-menu-items li').click(function(){
	$('.rad-menu-items li').each(function(){
		var randomize = {
			direction : [Math.floor(Math.random() * 600) - 300, Math.floor(Math.random() * 600) - 300],
			velocity : Math.random() * 2,
			rgb : [],
			icon : faArray[Math.floor(Math.random() * faArray.length)]
		}
		for(i = 0; i < 3; i++){randomize.rgb.push((Math.floor(Math.random() * 255) + 1).toString(16))}
		$(this).css({
			"transition" : "all " + randomize.velocity + "s ease",
			"transform" : "translate(" + randomize.direction[0] + "px, " + randomize.direction[1] + "px)",
			"background-color" : "#" + randomize.rgb[0] + randomize.rgb[1] + randomize.rgb[2],
			"z-index" : Math.floor(Math.random() * 100)
		});
		console.log("Velocity: " + randomize.velocity);
		console.log("Coords: " + randomize.direction[0] + "x, " + randomize.direction[1] + "y");
		console.log("rgb: " + randomize.rgb);
		console.log("icon: " + randomize.icon);

	});
})
</script>
</body>
</html>