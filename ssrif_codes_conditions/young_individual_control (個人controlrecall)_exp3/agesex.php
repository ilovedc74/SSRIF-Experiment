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
    .qa{
      margin-left: 230px;
      font-size: 100%;
      line-height: 140%;

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

  </style>
</head>
<body>
<form action="/~whitney/exp3/surveybasic.php" id="usrform" method="post">
  <div><p>
    <br>
    最後請提供您的個人基本資料與回答關於實驗的感受。<br>
    <br><br>
    以下作答將完全保密，並只用於研究用途，請放心填寫。
    <br><br>
    </p>
  </div>

  <div class="qa">
    <br><br>
    <font color=red>*</font>年齡:<br>
    <input type="text" name="q1" required>
    <br><br>
    <font color=red>*</font>性別:<br>
    <input type="radio" name="q2" value="1" required> 男
    <input type="radio" name="q2" value="0" required> 女
    <br><br>

  
</div>
<br><br>

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
    <th class="tg-e9v8">非常不同意</th>
    <th class="tg-e9v8">不同意</th>
    <th class="tg-e9v8">有點不同意</th>
    <th class="tg-e9v8">有點同意</th>
    <th class="tg-e9v8">同意</th>
    <th class="tg-e9v8">非常同意</th>
    <th class="tg-eklo"></th>
  </tr>
  <tr>
    <td class="tg-s4a2">1. 在自己回想的過程中，平均而言我覺得緊張。</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="0" required> 0</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="1" required> 1</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="2" required> 2</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="3" required> 3</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="4" required> 4</td>
    <td class="tg-90fe"><input type="radio" name="q3" value="5" required> 5</td>
    <td class="tg-3w8c"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">2. 在自己回想的過程中，平均而言我能專注。</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="0" required> 0</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="1" required> 1</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="2" required> 2</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="3" required> 3</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="4" required> 4</td>
    <td class="tg-lvth"><input type="radio" name="q4" value="4" required> 5</td>
    <td class="tg-2ktp"></td>
  </tr>

  <tr>
    <td class="tg-s4a2">3. 我剛剛的記憶策略是……。<br>（例如：利用圖像記憶、文字記憶、其他……請詳述。）</td>
    <td class="tg-90fe" colspan="6"><textarea class="txtbox" rows="3" cols="50" name="q5" form="usrform" data-parsley-required></textarea>
    </td>
    <td class="tg-3w8c"></td>
  </tr>
</table>

    <input type="submit" class="button button2" value="Submit">

</form>



</body>
</html>

