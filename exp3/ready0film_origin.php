<?php
session_start();
?>

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

  }
 </style>
</head>
<body>
  <div id="jspsych-target"></div>
</body>

<script>  

var welcome={
  type: "text",
  text: "<center><h1><p>Part 2</p></h1>"+
        "<p>現在請觀賞一部約三十分鐘的歷史影片，</p>"+
        "<p>影片結束後，將詢問您對影片內容的一些感想。</p><br>"+
        "<p>影片會自動播放，請勿於任何一處暫停影片。</p><br>"+
        "<strong><p>請按任意鍵繼續</p></strong></center>"
};

var next={
  type: "text",
  text: function() {
   window.location.replace('CC.php');
  }
};

jsPsych.init({
  display_element: $('#jspsych-target'),
  timeline: [welcome,next]
});

  </script>
</html>
