<?php
session_start();


// $arr = array(1,2,3,4,5,6,7,8,9);

// function val() {
//     return mt_rand();
// }

// mt_srand(substr($_SESSION['subject_id'], 0, 3));

// $order = array_map("val", range(1, count($arr)));

// array_multisort($order, $arr);

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
      text-align: center;
      vertical-align: middle; 
      display: none;

    }
/*     span.rule{
      text-align: center;
      display: none;
    }*/
/*    div.re{
      text-align: center;
      position: absolute;
      top: 20%;
      width: 100%;
      border-spacing:10px;
      display: none;

    }*/
    h1 {
      font-weight: bold;
      font-size: 200%;
    }
    p {
      font-size: 150%;
      line-height: 270%;
    }



  </style>
</head>
<body>
<!--   <div id="alltrials" class="all"></div>
 -->
<!--     <div id="repeat" class="re"><h1><p>請再看一次故事!</p></h1></div> -->


      <br>
      <br>
      <div id="header_1" class="rule"><h1>準備上學時</h1></div><div id="trial_1" class="rule"><p>樂樂夢到作業沒寫完。<br>樂樂早上八點四十五分起床。<br>他先沖了個澡。<br>他套上一件毛衣。<br>他喝了一杯咖啡。<br>他拾起門口的一份經濟早報。<br>氣象預報說那一天會起霧。<br>樂樂穿上鞋子出門。</p>

    </div>
 
      
      <div id="header_2" class="rule"><h1>走到學校時</h1></div><div id="trial_2" class="rule"><p>樂樂騎腳踏車去買早餐。<br>樂樂在小華家的街角跟他見面。<br>他告訴小華他整晚頭痛沒有睡好。<br>他們互相考對方即將到來的西班牙文考試。<br>小華的考試準備得比樂樂充裕。<br>樂樂用袖子把額頭的汗水擦掉。<br>小華提醒樂樂來他週五晚上的鋼琴獨奏會。<br>樂樂看到牆上有徵才海報。</p>

    </div>


      <div id="header_3" class="rule"><h1>中午吃飯時</h1></div><div id="trial_3" class="rule"><p>天氣開始轉晴。<br>樂樂吃了便當而小華吃了三明治。<br>樂樂喝了五百毫升的珍珠紅茶。<br>小華用香蕉跟樂樂交換了水梨。<br>他們的朋友小吉剛考完數學，也來加入他們。<br>體育老師經過他們身邊，他背後有塊大汗漬。<br>樂樂到置物櫃拿自己的筆記。<br>樂樂把水壺裝進書包。</p>

    </div>
    

       <div id="header_4" class="rule"><h1>考試時</h1></div><div id="trial_4" class="rule"><p>上課鐘聲響起。<br>老師從教室前方發下考卷。<br>老師告訴全班這次考試是開書考。<br>樂樂緊張地邊用筆敲桌子邊瞥向考卷。<br>他不停望向時鐘。<br>小華思考著考試問題的時候瞪了樂樂一眼。<br>當時間一到，小華拼命地回答最後一題，但還是無法完成所有試題。<br>老師請同學停筆，開始收考卷。</p>
    
    </div>
    

      <div id="header_5" class="rule"><h1>棒球社練習時</h1></div><div id="trial_5" class="rule"><p>樂樂拿了他的球棒並戴上球帽。<br>樂樂做伸展與衝刺訓練。<br>他做了打擊練習。<br>在比賽中，樂樂成功投出了雙殺。<br>他在投曲球的時候拉傷了肩膀。<br>他到球員席冰敷肩膀。<br>他的傷導致他接下來一週都無法打棒球。<br>他清掉棒球鞋上的泥土。</p>

    </div>
   

      <div id="header_6" class="rule"><h1>吃晚餐時</h1></div><div id="trial_6" class="rule"><p>媽媽叫全家人去洗手。<br>樂樂坐下來跟媽媽、爸爸與兄弟姊妹吃飯。<br>他們吃祖母最拿手的麻婆豆腐料理。<br>他問父母春假期間是否可以去花蓮海邊玩。<br>他父母說要看他的數學總成績而定。<br>他父母問起白天的考試結果。<br>他說他不是很確定，因為當時感到頭暈想吐。<br>他爸爸切了水果。</p>

    </div>
    

      <div id="header_7" class="rule"><h1>看電視時</h1></div><div id="trial_7" class="rule"><p>媽媽問全家誰要洗碗。<br>吃完晚餐後，樂樂與爸爸一起看體育台。<br>他邊看電視邊吃巧克力冰淇淋。<br>他很失望紐約大都會隊輸了。<br>樂樂夢想著有一天在大聯盟當一壘手。<br>新的蘋果平板廣告接著播出。<br>樂樂詢問爸爸要不要贊助他一半的錢買一台當作新年禮物。<br>他爸爸陷入沈思。</p>

    </div>
    

      <div id="header_8" class="rule"><h1>準備睡覺時</h1></div><div id="trial_8" class="rule"><p>樂樂把盤子收進櫃子裡。<br>樂樂刷了牙。<br>他媽問他介不介意睡前去遛個狗。<br>
      樂樂整理著隔天的書包時，有記得把小吉借給他的光碟片放進去。<br>他設定了隔天的鬧鐘，以便早上有時間騎腳踏車到學校。<br>他向父母道晚安之後就上床了。<br>他讀了幾篇運動雜誌的文章後便迅速入睡。<br>他媽媽把家裡的燈都關掉。</p>


    </div>

</body>

<script> 

// var myarray = new Array(1,2,3,4,5,6,7,8,9)
// var studyorder = <?php echo json_encode($arr); ?>;
// var studyorder = new Array(1,2,3,4,5,6,7,8)
// var repeat = true


// var current = 1

// function update_trial () {
//   $("#header_" + current).fadeIn(100, function() {
//     $("#trial_" + current).fadeIn(100, function() {

//       setTimeout(function() {
//         $("#header_" + current).fadeOut(100);
//         $("#trial_" + current).fadeOut(100, function() {
//           current += 1
//           if (current<1) {
//             update_trial ()
//           } else{
//             window.location.replace('freeRecall.php');
//           }

//         })
//       }, 1000)
//   })
// })
// }
var current = 1

function update_trial () {
  $("#header_" + current).fadeIn(3000, function() {
    $("#trial_" + current).fadeIn(3000, function() {

      setTimeout(function() {
        $("#header_" + current).fadeOut(2000);
        $("#trial_" + current).fadeOut(2000, function() {
          current += 1
          if (current<9) {
            update_trial ()
          } else{
            window.location.replace('ready0film.php');
          }

        })
      }, 40000)
  })
})
}
update_trial ()
// var current = 1

// function update_trial () {
//   $("#header_" + current).fadeIn(3000, function() {
//     $("#trial_" + current).fadeIn(3000, function() {

//       setTimeout(function() {
//         $("#header_" + current).fadeOut(2000);
//         $("#trial_" + current).fadeOut(2000, function() {
//           current += 1
//           if (current<9) {
//             update_trial ()
//           } else{
//             window.location.replace('ready0film.php');
//           }

//         })
//       }, 40000)
//   })
// })
// }
// update_trial ()


// window.location.replace('ready1freecon.php');


  // var xmlHttp=new XMLHttpRequest();
  // var URL="http://mil.psy.ntu.edu.tw/~whitney/exp2/order.php?studyorder="+studyorder;
  //   xmlHttp.open("GET",URL,true);
  //   xmlHttp.send(null);


</script>

</html>
