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
  text: "<center><h1><p>請休息1分鐘!</p></h1>"+
        "<h1><p>Part 4</p></h1>"+
        "<p>接下來幾分鐘，請用心算回答30題算數問題</p>"+
        "<p><font color=red>不限作答時間</font></p><br>"+
        "<strong><p>請按任意鍵繼續</p></strong></center>"
};

var next={
  type: "text",
  text: function() {
   window.location.replace('arith.php');
  }
};

jsPsych.init({
  display_element: $('#jspsych-target'),
  timeline: [welcome,next]
});

  </script>
</html>
