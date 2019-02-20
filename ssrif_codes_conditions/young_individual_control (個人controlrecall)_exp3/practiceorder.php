<?php

session_start();

?>
<!-- 控制個人(control recall) -->
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
  <div id="trial_1" class="rule"><h1>準備上學時</h1></div>
  <div id="trial_2" class="rule"><h1>走到學校時</h1></div>
  <div id="trial_3" class="rule"><h1>中午吃飯時</h1></div>
  <div id="trial_4" class="rule"><h1>考試時</h1></div>
  <div id="trial_5" class="rule"><h1>棒球社練習時</h1></div>
  <div id="trial_6" class="rule"><h1>吃晚餐時</h1></div>
  <div id="trial_7" class="rule"><h1>看電視時</h1></div>
  <div id="trial_8" class="rule"><h1>準備睡覺時</h1></div>

<!--   <div id="clock" class="rule"></div> -->
</body>
<script>



var myarray = new Array(1,2,3,4,5,6,7,8);
var order = jsPsych.randomization.shuffle(myarray);
var current = 0;





// $(document).ready(function(){
//   $("#trial_" + order[current]).fadeIn("slow");
// });

// var timing = setInterval(next_trial,1000);


function next_trial(){
  $("#trial_" + order[current]).fadeIn(500, function(){

    setTimeout(function() {
      $("#trial_" + order[current]).fadeOut(500,function(){
        current ++;

        if (current<5) {
          next_trial()
          // $("#background").show(0, function() {
          //   setTimeout(function() {
          //   $("#background").hide(0, next_trial())
          // })},500)
        }
        else{
          window.location.replace('ready2arith.php');
        }
      })}
      , 30000)
  })
}
next_trial()

//             $("#background").hide(0, function() {
//               $("#trial_" + order[current]).fadeIn("slow");})},30000)

//   });
//   $("#trial_" + order[current]).fadeOut("slow",function(){
//       current ++;
//       if (current<4) {
//         $("#background").show(0, function() {
//           setTimeout(function() {
//             $("#background").hide(0, function() {
//               $("#trial_" + order[current]).fadeIn("slow");})},500)
//         });
//       } 
//       // else {
//       //     window.location.replace('ready2arith.html');
//       //     };
//     });
// };

console.log(order)

  var xmlHttp=new XMLHttpRequest();
  var URL="http://mil.psy.ntu.edu.tw/~whitney/exp3/order.php?pracorder="+order;
    xmlHttp.open("GET",URL,true);
    xmlHttp.send(null);




</script>

</html>