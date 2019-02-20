<?php
// Start the session
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

    text-align: center;
  }
  h1 {
    font-weight: bold;
    font-size: 180%;
  }
  p {
    font-size: 110%;
    line-height: 180%;
  }


</style>

</head>
<body>
  <div id="jspsych-target"></div>
</body>

<script>  

var cat=['準備上學時', '走到學校時', '中午吃飯時', '考試時', '棒球社練習時', '吃晚餐時', '看電視時', '準備睡覺時'];

// Produce a new order & shuffle its exemplars:

var room=jsPsych.randomization.shuffle(cat); 


// y8
k=1; //k-th question
trials=[];
for(var i=0; i<8; i++){
  trials.push({
    preamble: '<p>請詳盡地寫下第 '+k+'/8 個時段發生的事:</p>', 
    type: 'survey-text', 
    rows: [35], 
    columns: [80], 
    data: {room:room[i]},
    questions: [room[i]]});k++
}

//generate subject_id
// var subject_id = Math.floor(Math.random()*100000);
// jsPsych.data.addProperties({subject:subject_id});


//get data
jsPsych.init({
  display_element: $('#jspsych-target'),
  timeline: trials,
  on_finish: function(){

  data=jsPsych.data.getData();
  data = encodeURIComponent(JSON.stringify(data))
  var xmlHttp=new XMLHttpRequest();
  var URL="http://mil.psy.ntu.edu.tw/~whitney/exp3/saveas.php";
  var params="data="+data+"&room="+room;
    xmlHttp.open("POST",URL,true);
    xmlHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
    xmlHttp.send(params);

    // console.log(subject_id)

  window.location.replace('ready4survey.php');

   // data=jsPsych.data.displayData('csv');
   // jsPsych.endExperiment('實驗已完全結束！謝謝您的參與，請告知實驗者實驗結束。')
  }
});





  </script>
</html>
