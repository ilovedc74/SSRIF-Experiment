<?php
session_start();
?>
<!-- exp original -->
<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="jspsych.js"></script>
  <script src="plugins/jspsych-survey-text.js"></script>
  <script src="plugins/jspsych-text.js" ></script>
  <script src="plugins/jspsych-single-stim.js" ></script>
  <link rel="stylesheet" href="css/jquery-ui.css"></link>
  <link rel="stylesheet" href="css/jspsych.css"></link>
 <style>
  div{
    font-size: 18pt;
    text-align: center;
    position: absolute;
    top: 20%;
    border-spacing:10px;
/*    left: 30%;*/
  }
 </style>
</head>
<body>
  <div id="jspsych-target"></div>
</body>

<script>  

var welcome={
  type: "text",
  text: "<center><h1><p>請休息1分鐘!</p></h1>"+
        "<h1><p>Part 3</p></h1>"+
        "<p>接下來，請與另一名受試者一起回想剛剛的故事情節，有提及的內容請盡可能完整地說出。</p>"+
        "<p>如在一集當中已回想不出，請勿停留太久，就請直接跳到其他集繼續回想。</p>"+
        "<p>不需要按照順序回想，想到就可以說。</p>"+
        "<p>你們有<font color=red>約四分鐘</font>的時間可以回想。</p>"+
        "<p><font color=blue>準備好時請離開房間告知實驗者您已準備好。</font></p><br>"+
        "<strong><p>討論結束回來後請再按任意鍵繼續</p></strong></center>"
};

var next={
  type: "text",
  text: function() {
   window.location.replace('ready2arith.php');
   // ready2arith.php for exp group
  }
};

jsPsych.init({
  display_element: $('#jspsych-target'),
  timeline: [welcome,next]
});

  </script>
</html>
