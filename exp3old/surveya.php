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
  <script src="http://parsleyjs.org/dist/parsley.min.js"></script>
  <link rel="stylesheet" href="css/jquery-ui.css"></link>
  <link rel="stylesheet" href="css/jspsych.css"></link>
<style type="text/css">

    p {
      font-size: 100%;
      line-height: 140%;
      text-align: center;
    }


.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;border:none;margin:0px auto;}
.tg td{
  font-family:Arial, 
  sans-serif;
  font-size:14px;
  padding:20px 7px;
  border-style:solid;
  border-width:0px;
  overflow:hidden;
  word-break:normal;
  border-color:#ccc;
  color:#333;
  background-color:#fff;
}
.tg th{
  font-family:Arial, sans-serif;
  font-size:14px;
  font-weight:normal;
  padding:10px 7px;
  border-style:solid;
  border-width:0px;
  overflow:hidden;
  word-break:normal;
  border-color:#ccc;
  color:#333;
  background-color:#f0f0f0;
}
.tg .tg-qsvf{font-size:18px;vertical-align:top}
.tg .tg-2ktp{font-size:16px;vertical-align:top}
.tg .tg-s4a2{background-color:#f9f9f9;font-size:18px;vertical-align:top}
.tg .tg-90fe{background-color:#f9f9f9;font-size:16px;text-align:center;vertical-align:top}
.tg .tg-3w8c{background-color:#f9f9f9;font-size:16px;vertical-align:top}
.tg .tg-e9v8{font-size:15px;text-align:center;vertical-align:top}
.tg .tg-eklo{font-size:20px;vertical-align:top}
.tg .tg-5s0z{background-color:#f9f9f9;font-size:18px}
.tg .tg-lvth{font-size:16px;text-align:center;vertical-align:top}



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

  </style>
</head>
<body>
<form action="/~whitney/exp3old/survey1.php" method="post">
  <div><p>
    <br>
    下列題目是想了解您在日常生活與他人互動時的感受。<br>請仔細閱讀每個句子，圈選一個最符合您實際經驗的答案。
    <br><br>
    以下作答將完全保密，請放心填寫。
    <br><br>
    </p>
  </div>
<table class="tg" style="undefined;table-layout: fixed; width: 1190px">
<colgroup>
<col style="width: 588px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 147px">
</colgroup>
  <tr>
    <th class="tg-2ktp"></th>
    <th class="tg-e9v8">完全不符合</th>
    <th class="tg-e9v8">少部分符合</th>
    <th class="tg-e9v8">部分符合</th>
    <th class="tg-e9v8">大部分符合</th>
    <th class="tg-e9v8">非常符合</th>
    <th class="tg-eklo"></th>
  </tr>
  <tr>
    <td class="tg-5s0z">1. 我和他人視線接觸有困難。</td>
    <td class="tg-90fe"><input type="radio" name="q1" value="0" required> 0</td>
    <td class="tg-90fe"><input type="radio" name="q1" value="1" required> 1</td>
    <td class="tg-90fe"><input type="radio" name="q1" value="2" required> 2</td>
    <td class="tg-90fe"><input type="radio" name="q1" value="3" required> 3</td>
    <td class="tg-90fe"><input type="radio" name="q1" value="4" required> 4</td>
    <td class="tg-3w8c"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">2. 我很難自在地和跟我一起工作的人相處。</td>
    <td class="tg-lvth"><input type="radio" name="q2" value="0" required> 0</td>
    <td class="tg-lvth"><input type="radio" name="q2" value="1" required> 1</td>
    <td class="tg-lvth"><input type="radio" name="q2" value="2" required> 2</td>
    <td class="tg-lvth"><input type="radio" name="q2" value="3" required> 3</td>
    <td class="tg-lvth"><input type="radio" name="q2" value="4" required> 4</td>
    <td class="tg-2ktp"></td>
  </tr>
  <tr>
    <td class="tg-s4a2">3. 在街上遇到不很熟的人，我會緊張起來。</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="0" required> 0</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="1" required> 1</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="2" required> 2</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="3" required> 3</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="4" required> 4</td>
    <td class="tg-3w8c"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">4. 假如我獨自與另一個人在一起，我會覺得緊張。</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="0" required> 0</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="1" required> 1</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="2" required> 2</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="3" required> 3</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="4" required> 4</td>
    <td class="tg-2ktp"></td>
  </tr>
  <tr>
    <td class="tg-s4a2">5. 我和別人交談有困難。</td>
    <td class="tg-90fe"><input type="radio" name="q5" value="0" required> 0</td>
    <td class="tg-90fe"><input type="radio" name="q5" value="1" required> 1</td>
    <td class="tg-90fe"><input type="radio" name="q5" value="2" required> 2</td>
    <td class="tg-90fe"><input type="radio" name="q5" value="3" required> 3</td>
    <td class="tg-90fe"><input type="radio" name="q5" value="4" required> 4</td>
    <td class="tg-3w8c"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">6. 我覺得不同意他人的觀點很困難。</td>
    <td class="tg-lvth"><input type="radio" name="q6" value="0" required> 0</td>
    <td class="tg-lvth"><input type="radio" name="q6" value="1" required> 1</td>
    <td class="tg-lvth"><input type="radio" name="q6" value="2" required> 2</td>
    <td class="tg-lvth"><input type="radio" name="q6" value="3" required> 3</td>
    <td class="tg-lvth"><input type="radio" name="q6" value="4" required> 4</td>
    <td class="tg-2ktp"></td>
  </tr>
  <tr>
    <td class="tg-s4a2">7. 當在街道上行走，感覺路人總是在注意我時，我就感到緊張不安。</td>
    <td class="tg-90fe"><input type="radio" name="q7" value="0" required> 0</td>
    <td class="tg-90fe"><input type="radio" name="q7" value="1" required> 1</td>
    <td class="tg-90fe"><input type="radio" name="q7" value="2" required> 2</td>
    <td class="tg-90fe"><input type="radio" name="q7" value="3" required> 3</td>
    <td class="tg-90fe"><input type="radio" name="q7" value="4" required> 4</td>
    <td class="tg-3w8c"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">8. 當我被別人注意時，我擔心我會顫抖。</td>
    <td class="tg-lvth"><input type="radio" name="q8" value="0" required> 0</td>
    <td class="tg-lvth"><input type="radio" name="q8" value="1" required> 1</td>
    <td class="tg-lvth"><input type="radio" name="q8" value="2" required> 2</td>
    <td class="tg-lvth"><input type="radio" name="q8" value="3" required> 3</td>
    <td class="tg-lvth"><input type="radio" name="q8" value="4" required> 4</td>
    <td class="tg-2ktp"></td>
  </tr>
  <tr>
    <td class="tg-s4a2">9. 在公車或火車上，假如我必須面對他人而坐，我會變得緊張。</td>
    <td class="tg-90fe"><input type="radio" name="q9" value="0" required> 0</td>
    <td class="tg-90fe"><input type="radio" name="q9" value="1" required> 1</td>
    <td class="tg-90fe"><input type="radio" name="q9" value="2" required> 2</td>
    <td class="tg-90fe"><input type="radio" name="q9" value="3" required> 3</td>
    <td class="tg-90fe"><input type="radio" name="q9" value="4" required> 4</td>
    <td class="tg-3w8c"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">10. 我擔心我可能會做出引起他人注意的事。</td>
    <td class="tg-lvth"><input type="radio" name="q10" value="0" required> 0</td>
    <td class="tg-lvth"><input type="radio" name="q10" value="1" required> 1</td>
    <td class="tg-lvth"><input type="radio" name="q10" value="2" required> 2</td>
    <td class="tg-lvth"><input type="radio" name="q10" value="3" required> 3</td>
    <td class="tg-lvth"><input type="radio" name="q10" value="4" required> 4</td>
    <td class="tg-2ktp"></td>
  </tr>
  <tr>
    <td class="tg-s4a2">11. 在電梯裏，當有人注視我時，我會感到緊張。</td>
    <td class="tg-90fe"><input type="radio" name="q11" value="0" required> 0</td>
    <td class="tg-90fe"><input type="radio" name="q11" value="1" required> 1</td>
    <td class="tg-90fe"><input type="radio" name="q11" value="2" required> 2</td>
    <td class="tg-90fe"><input type="radio" name="q11" value="3" required> 3</td>
    <td class="tg-90fe"><input type="radio" name="q11" value="4" required> 4</td>
    <td class="tg-3w8c"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">12. 排隊時，我會覺得自己很顯眼。</td>
    <td class="tg-lvth"><input type="radio" name="q12" value="0" required> 0</td>
    <td class="tg-lvth"><input type="radio" name="q12" value="1" required> 1</td>
    <td class="tg-lvth"><input type="radio" name="q12" value="2" required> 2</td>
    <td class="tg-lvth"><input type="radio" name="q12" value="3" required> 3</td>
    <td class="tg-lvth"><input type="radio" name="q12" value="4" required> 4</td>
    <td class="tg-2ktp"></td>
  </tr>
</table>
<input type="submit" class="button button2" value="Submit">

</form>
</body>
</html>