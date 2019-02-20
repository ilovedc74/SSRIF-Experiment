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
  text: "<center><h1><p>前情提要</p></h1>"+
        "<p><font color=blue>樂樂</font>到美國拜訪國小同學<font color=red>小華</font>，</p>"+
        "<p><font color=red>小華</font>升國中時全家移民至美國。</p>"+
        "<p>這一天，他要帶許久沒見的<font color=blue>樂樂</font>參觀自己的家。</p>"+
        "<strong><p>請按任意鍵繼續</p></strong></center>"
};

var next={
  type: "text",
  text: function() {
   window.location.replace('story.php');
  }
};

jsPsych.init({
  display_element: $('#jspsych-target'),
  timeline: [welcome,next]
});

  </script>
</html>
