<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="http://www.youtube.com/player_api"></script>
<style>

body {
	background-color: black;
}

.video {
	text-align:center
}
.button {
	background-color: #4CAF50; /* Green */
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: block;
	font-size: 16px;
	margin: 50px auto;
	cursor: pointer;
	-webkit-transition-duration: 0.4s; /* Safari */
	transition-duration: 0.4s;
}
.button2:hover {
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>

</head>

<body>
	<div id="part_1" class="video">
		<video id="myVideo" width="1280" height="720" autoplay>
  			<source src="silkroad4.mp4" type="video/mp4">
  			Your browser does not support HTML5 video.
		</video>
<!-- 		<iframe width="1280" height="720" src="http://mil.psy.ntu.edu.tw/~whitney/exp3/silkroad1.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
	</div>
<!-- 	<div id="part_2" class="video">
	<input type="button" class="button button2-disabled" id="submitbutton" value="next" style="margin-bottom: 20pt"><br>
	</div> -->
<!-- 	<iframe width="100%" src="http://mil.psy.ntu.edu.tw/~whitney/exp3/silkroad1.mp4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
</body>

<script>
// var current = 1
 // document.querySelector('.video').defaultPlaybackRate = 3.0;
 // document.querySelector('.video').play();
var vid = document.getElementById("myVideo");
vid.playbackRate = 1.3;

	function next_page () {
		setTimeout(function() {
	        $("#part_1").fadeOut(2000, function(){
	        	// $("#part_2").fadeIn(1000);
	        	window.location.replace('filmqa.php');
	        })
	    }, 664000)
	}
	        
next_page ()

</script>