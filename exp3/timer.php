<?php

session_start();

?>
<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="jspsych.js"></script>
  <script src="plugins/jspsych-survey-text.js"></script>
  <script src="plugins/jspsych-text.js" ></script>
  <script src="plugins/jspsych-single-stim.js" ></script>
  <link rel="stylesheet" href="css/jquery-ui.css"></link>
  <link rel="stylesheet" href="css/jspsych.css"></link>
  <style>
    div.rule{

      font-size: 500%;
      text-align: center;
      position: absolute;
      top: 20%;
      width: 100%;
      border-spacing:10px;
      display: none;
    }
    h1 {
      font-weight: bold;
      font-size: 180%;
    }
    p {
      font-size: 130%;
      line-height: 200%;
    }
    html, body{
      width: 100%;
      height: 100%;
    }
    div.col{
      background: black;
      width: 100%;
      height: 100%;
    }



  </style>
</head>
<body>
  <div id="background" class="col" style="display: none;"></div>
  <div id="trial_1" class="rule"><h1>車 庫</h1></div>
  <div id="trial_2" class="rule"><h1>客 廳</h1></div>
  <div id="trial_3" class="rule"><h1>廚 房</h1></div>
  <div id="trial_4" class="rule"><h1>臥 室</h1></div>
  <div id="trial_5" class="rule"><h1>飯 廳</h1></div>
  <div id="trial_6" class="rule"><h1>康 樂 室</h1></div>
  <div id="trial_7" class="rule"><h1>洗 衣 間</h1></div>
  <div id="trial_8" class="rule"><h1>後 院</h1></div>
  <div id="trial_9" class="rule"><h1>陽 台</h1></div>
<!--   <div id="clock" class="rule"></div> -->
</body>
<script>



var myarray = new Array(1,2,3,4,5,6,7,8,9);
var order = jsPsych.randomization.shuffle(myarray);
var current = 0;





$(document).ready(function(){
  $("#trial_" + order[current]).fadeIn("slow");
});

var timing = setInterval(next_trial,30000);


function next_trial(){
  $("#trial_" + order[current]).fadeOut("slow",function(){
      current ++;
      if (current<6) {
        $("#background").show(0, function() {
          setTimeout(function() {
            $("#background").hide(0, function() {
              $("#trial_" + order[current]).fadeIn("slow");})},1000)
        });
      } 
      // else {
      //     window.location.replace('ready2arith.html');
      //     };
    });
};

console.log(order)

  var xmlHttp=new XMLHttpRequest();
  var URL="http://mil.psy.ntu.edu.tw/~whitney/exp2/order.php?pracorder="+order;
    xmlHttp.open("GET",URL,true);
    xmlHttp.send(null);




</script>

</html>