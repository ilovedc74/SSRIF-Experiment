<?php
// Start the session
session_start();
$_SESSION['subject_id'] = $_GET['uid'];
$file=$_SESSION['subject_id']
// print_r($file)
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
  text: "<center><h1><p>歡迎來到認知測驗!</p></h1>"+
        "<h1><p>Part 1</p></h1>"+
        "<p>接下來的五分鐘，螢幕上會出現一則故事，內容講述樂樂的一天。這個故事只出現一次。</p>"+
        "<p>請「詳細並完整」記住<font color=red>每個時間點</font>發生的事。</p>"+
        "<p>之後將提示<font color=red>時間點</font>請您回憶該時間點發生的事。例如，「<font color=blue>睡覺時</font>」：______</p><br>"+
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
