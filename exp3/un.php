<?php
session_start();
?>

<!doctype html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="http://parsleyjs.org/dist/parsley.min.js"></script>
  <script src="http://parsleyjs.org/src/parsley.css"></script>
  <link rel="stylesheet" href="css/jquery-ui.css"></link>
  <link rel="stylesheet" href="css/jspsych.css"></link>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <style>
/*    body{
      background-color:#2D3047;
    }*/

.timer{
  background-color:#419D78;
  color:#EFD0CA;
  font-size:20px;
  text-align:center;
  position: fixed;
  width: 100%;
}
.mainarea{
  margin-top: 20%
  margin-left: 100px;
}

p {
  line-height: 300%;
  padding: 50pt;
}


.txtbox{
  font-size: 14pt;

}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
  margin: 50px auto;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}



.button2:hover {
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.button2-disabled{
    opacity: 0.6; 
    pointer-events: none; 
}

textarea.form-control.parsley-success {
    color: #468847;
    background-color: #DFF0D8;
    border: 1px solid #D6E9C6;
  }
textarea.form-control.parsley-error{
    color: #B94A48;
    background-color: #F2DEDE;
    border: 1px solid #EED3D7;   
}



  </style>
<body>

 <div class="timer">請花五分鐘的時間作答，剩餘時間：<span id="timer"></span></div>


    <form action="/~whitney/exp3/filmans.php" id="usrform" data-parsley-validate="" method="post">

      <div class="mainarea">
        <p>
        每一個問題請您至少填答二十字以上，詳述您的想法，<br>
        請仔細思考每個問題。
        </p>
        <p>
          <label for="learned">1. 請問您從這部影片學到了什麼之前不知道的內容？</label>
          <textarea class="form-control" rows="6" cols="60" name="q1" data-parsley-minlength="20" form="usrform" data-parsley-minlength-message="請輸入至少20個字" data-parsley-required >答：</textarea>
          <br>
        </p>
        <p>
          <label for="abstract">2. 請寫下剛剛的影片大綱：</label>
          <textarea class="form-control" rows="6" cols="60" name="q2" data-parsley-minlength="20" form="usrform" data-parsley-minlength-message="請輸入至少20個字" data-parsley-required>答：</textarea>
          <br>
        </p>
        <p>
          <label for="abstract">3. 請問當時什麼樣的生活方式在歐洲被認為是時尚？</label>
          <textarea class="form-control" rows="6" cols="60" name="q3" data-parsley-minlength="20" form="usrform" data-parsley-minlength-message="請輸入至少20個字" data-parsley-required="true" >答：</textarea>
          <br>
        </p>
        <p>

          <label for="abstract">4. 請簡述當時從瑞典到中國廣州的航程中倚靠的動力為何，旅途上又有什麼樣的危險？</label>
          <textarea class="form-control" rows="6" cols="60" name="q4" data-parsley-minlength="20" form="usrform" data-parsley-minlength-message="請輸入至少20個字" data-parsley-required>答：</textarea>
          <br>
        </p>
        <p>
          <label for="abstract">5. 請您從 1 到 5 分 評價這部歷史短片是否是您感興趣的議題，1分是『非常不感興趣』、5分是『非常感興趣』。並請簡述原因。</label><br>
          <input type="radio" name="q5" value="1" class="radio" required>1 
          <input type="radio" name="q5" value="2" class="radio" required>2 
          <input type="radio" name="q5" value="3" class="radio" required>3 
          <input type="radio" name="q5" value="4" class="radio" required>4 
          <input type="radio" name="q5" value="5" class="radio" required>5 
          <br>
          <textarea class="form-control" rows="6" cols="60" name="q6"  data-parsley-minlength="20" form="usrform" data-parsley-minlength-message="請輸入至少20個字" data-parsley-required>答：</textarea>
          <br>
        </p>


        <br><br>

          <input type="submit" class="button button2-disabled" id="submitbutton" value="Submit" style="margin-bottom: 20pt"><br>


      </div>
    </form> 


</body>

<script type="text/javascript">
    window.onload=function() {
      // setTimeout(function(){
      //   document.getElementById('submitbutton').disabled = null;
      // },300000);
      setTimeout(function(){
        document.getElementById("submitbutton").classList.remove('button2-disabled');
        document.getElementById("submitbutton").classList.add('button2');
      },4000);
    }


    document.getElementById('timer').innerHTML =
    5 + ":" + 00;
    startTimer();
    


    function startTimer() {
      var presentTime = document.getElementById('timer').innerHTML;
      var timeArray = presentTime.split(/[:]+/);
      var m = timeArray[0];
      var s = checkSecond((timeArray[1] - 1));
      if(s==59){m=m-1}
      if (m < 0) {return;
      }
      // if(m<0){alert('您還有一分鐘。')}

    document.getElementById('timer').innerHTML =
      m + ":" + s;
    setTimeout(startTimer, 1000);
      }

    function checkSecond(sec) {
      if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
      if (sec < 0) {sec = "59"};
      return sec;
    }

    // function checkTime() {
    //   var presentTime = document.getElementById('timer').innerHTML;
    //   var timeArray = presentTime.split(/[:]+/);
    //   var m = timeArray[0];
    //   var s = timeArray[1] - 1;
    //   if (m>0 && s>0) {
    //     alert("敬請耐心作答五分鐘以上，謝謝！");
    //   }
    // }




</script>
</html>

