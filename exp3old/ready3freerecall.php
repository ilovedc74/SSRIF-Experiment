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
    border-spacing:10px;
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
        "<h1><p>Part 5</p></h1>"+
        "<p>接下來，請翻開封面為<font color=red>「3」</font>的紙本作答</p>"+
        "<p>每一頁會有故事每一個時段的提示</p>"+
        "<p>請依提示寫下<font color=blue>所有您記得的故事情節</font>，愈完整愈好</p>"+
        "<p>每一個事件細節都非常地重要，即使是不確定的內容也請全部寫下來</p>"+
        "<p><font color=red>不限作答時間</font></p><br>"+
        "<strong><p>寫完「3」的八頁問題之後，請再按鍵盤任意鍵繼續</p></strong></center>"
};

var next={
  type: "text",
  text: function() {
   window.location.replace('ready4survey.php');
  }
};

jsPsych.init({
  display_element: $('#jspsych-target'),
  timeline: [welcome,next]
});

  </script>
</html>
