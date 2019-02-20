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
/*.position{
    position:relative;
    right:30px;
    padding:50px;
}*/


.tg  {
    border-collapse:collapse;
    border-spacing:0;
    border-color:#aaa;
    border:none;
    margin:0px auto;
}
.tg td{font-family:Arial, sans-serif;
    font-size:14px;
    padding:20px 7px;
    border-style:solid;
    border-width:0px;
    overflow:hidden;
    word-break:normal;
    border-color:#aaa;
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
    border-color:#aaa;
    color:#fff;
    background-color:#f38630;
}
.tg .tg-j2zy{background-color:#FCFBE3;vertical-align:top}
.tg .tg-qsvf{font-size:18px;vertical-align:top}
.tg .tg-rt73{background-color:#FCFBE3;font-size:18px}
.tg .tg-e9v8{font-size:15px;text-align:center;vertical-align:top}
.tg .tg-yw4l{vertical-align:top}
.tg .tg-dznu{background-color:#FCFBE3;font-size:18px;text-align:center;vertical-align:top}
.tg .tg-13pz{font-size:18px;text-align:center;vertical-align:top}
.tg .tg-7gaw{background-color:#FCFBE3;font-size:18px;vertical-align:top}
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
</style>
</head>
<body>
<div><p>
    <br>
    下面有一些人格特質的描述，可能符合也可能不符合你。<br>
    請選出你在多大程度上同意或者不同意這些描述。<br>
    以下的人格特質，會以兩個人格特質形成一組，<br>
    在進行評分時，即使組中有其中一種人格特質的符合程度高於另一種特質，請以組為單位的考量評分。
    <br>
    <br>
    以下作答將完全保密，請放心填寫。
    <br><br><br>
    </p>
</div>


<form action="/~whitney/exp3old/survey2.php" method="post">
<table class="tg" style="undefined;table-layout: fixed; width: 1143px">
<colgroup>
<col style="width: 370px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 91px">
<col style="width: 100px">
</colgroup>
  <tr>
    <th class="tg-qsvf"></th>
    <th class="tg-e9v8">非常不同意</th>
    <th class="tg-e9v8">不同意</th>
    <th class="tg-e9v8">有點不同意</th>
    <th class="tg-e9v8">無意見</th>
    <th class="tg-e9v8">有點同意</th>
    <th class="tg-e9v8">同意</th>
    <th class="tg-e9v8">非常同意</th>
    <th class="tg-yw4l"></th>
  </tr>
  <tr>
    <td class="tg-rt73">外向的，熱情的</td>
    <td class="tg-dznu"><input type="radio" name="q1" value="1" required> 1</td>
    <td class="tg-dznu"><input type="radio" name="q1" value="2" required> 2</td>
    <td class="tg-dznu"><input type="radio" name="q1" value="3" required> 3</td>
    <td class="tg-dznu"><input type="radio" name="q1" value="4" required> 4</td>
    <td class="tg-dznu"><input type="radio" name="q1" value="5" required> 5</td>
    <td class="tg-dznu"><input type="radio" name="q1" value="6" required> 6</td>
    <td class="tg-dznu"><input type="radio" name="q1" value="7" required> 7</td>
    <td class="tg-j2zy"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">批判的，好爭論的</td>
    <td class="tg-13pz"><input type="radio" name="q2" value="1" required> 1</td>
    <td class="tg-13pz"><input type="radio" name="q2" value="2" required> 2</td>
    <td class="tg-13pz"><input type="radio" name="q2" value="3" required> 3</td>
    <td class="tg-13pz"><input type="radio" name="q2" value="4" required> 4</td>
    <td class="tg-13pz"><input type="radio" name="q2" value="5" required> 5</td>
    <td class="tg-13pz"><input type="radio" name="q2" value="6" required> 6</td>
    <td class="tg-13pz"><input type="radio" name="q2" value="7" required> 7</td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-7gaw">可靠的，自律的</td>
    <td class="tg-dznu"><input type="radio" name="q3" value="1" required> 1</td>
    <td class="tg-dznu"><input type="radio" name="q3" value="2" required> 2</td>
    <td class="tg-dznu"><input type="radio" name="q3" value="3" required> 3</td>
    <td class="tg-dznu"><input type="radio" name="q3" value="4" required> 4</td>
    <td class="tg-dznu"><input type="radio" name="q3" value="5" required> 5</td>
    <td class="tg-dznu"><input type="radio" name="q3" value="6" required> 6</td>
    <td class="tg-dznu"><input type="radio" name="q3" value="7" required> 7</td>
    <td class="tg-j2zy"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">焦慮的，容易不安</td>
    <td class="tg-13pz"><input type="radio" name="q4" value="1" required> 1</td>
    <td class="tg-13pz"><input type="radio" name="q4" value="2" required> 2</td>
    <td class="tg-13pz"><input type="radio" name="q4" value="3" required> 3</td>
    <td class="tg-13pz"><input type="radio" name="q4" value="4" required> 4</td>
    <td class="tg-13pz"><input type="radio" name="q4" value="5" required> 5</td>
    <td class="tg-13pz"><input type="radio" name="q4" value="6" required> 6</td>
    <td class="tg-13pz"><input type="radio" name="q4" value="7" required> 7</td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-7gaw">願意接受新的體驗、喜歡複雜的</td>
    <td class="tg-dznu"><input type="radio" name="q5" value="1" required> 1</td>
    <td class="tg-dznu"><input type="radio" name="q5" value="2" required> 2</td>
    <td class="tg-dznu"><input type="radio" name="q5" value="3" required> 3</td>
    <td class="tg-dznu"><input type="radio" name="q5" value="4" required> 4</td>
    <td class="tg-dznu"><input type="radio" name="q5" value="5" required> 5</td>
    <td class="tg-dznu"><input type="radio" name="q5" value="6" required> 6</td>
    <td class="tg-dznu"><input type="radio" name="q5" value="7" required> 7</td>
    <td class="tg-j2zy"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">保守的，安靜的</td>
    <td class="tg-13pz"><input type="radio" name="q6" value="1" required> 1</td>
    <td class="tg-13pz"><input type="radio" name="q6" value="2" required> 2</td>
    <td class="tg-13pz"><input type="radio" name="q6" value="3" required> 3</td>
    <td class="tg-13pz"><input type="radio" name="q6" value="4" required> 4</td>
    <td class="tg-13pz"><input type="radio" name="q6" value="5" required> 5</td>
    <td class="tg-13pz"><input type="radio" name="q6" value="6" required> 6</td>
    <td class="tg-13pz"><input type="radio" name="q6" value="7" required> 7</td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-7gaw">有同情心的，温暖的</td>
    <td class="tg-dznu"><input type="radio" name="q7" value="1" required> 1</td>
    <td class="tg-dznu"><input type="radio" name="q7" value="2" required> 2</td>
    <td class="tg-dznu"><input type="radio" name="q7" value="3" required> 3</td>
    <td class="tg-dznu"><input type="radio" name="q7" value="4" required> 4</td>
    <td class="tg-dznu"><input type="radio" name="q7" value="5" required> 5</td>
    <td class="tg-dznu"><input type="radio" name="q7" value="6" required> 6</td>
    <td class="tg-dznu"><input type="radio" name="q7" value="7" required> 7</td>
    <td class="tg-j2zy"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">雜亂無章的，粗心大意的</td>
    <td class="tg-13pz"><input type="radio" name="q8" value="1" required> 1</td>
    <td class="tg-13pz"><input type="radio" name="q8" value="2" required> 2</td>
    <td class="tg-13pz"><input type="radio" name="q8" value="3" required> 3</td>
    <td class="tg-13pz"><input type="radio" name="q8" value="4" required> 4</td>
    <td class="tg-13pz"><input type="radio" name="q8" value="5" required> 5</td>
    <td class="tg-13pz"><input type="radio" name="q8" value="6" required> 6</td>
    <td class="tg-13pz"><input type="radio" name="q8" value="7" required> 7</td>
    <td class="tg-yw4l"></td>
  </tr>
  <tr>
    <td class="tg-7gaw">平靜的，情緒穩定的</td>
    <td class="tg-dznu"><input type="radio" name="q9" value="1" required> 1</td>
    <td class="tg-dznu"><input type="radio" name="q9" value="2" required> 2</td>
    <td class="tg-dznu"><input type="radio" name="q9" value="3" required> 3</td>
    <td class="tg-dznu"><input type="radio" name="q9" value="4" required> 4</td>
    <td class="tg-dznu"><input type="radio" name="q9" value="5" required> 5</td>
    <td class="tg-dznu"><input type="radio" name="q9" value="6" required> 6</td>
    <td class="tg-dznu"><input type="radio" name="q9" value="7" required> 7</td>
    <td class="tg-j2zy"></td>
  </tr>
  <tr>
    <td class="tg-qsvf">傳統的，無創造性的</td>
    <td class="tg-13pz"><input type="radio" name="q10" value="1" required> 1</td>
    <td class="tg-13pz"><input type="radio" name="q10" value="2" required> 2</td>
    <td class="tg-13pz"><input type="radio" name="q10" value="3" required> 3</td>
    <td class="tg-13pz"><input type="radio" name="q10" value="4" required> 4</td>
    <td class="tg-13pz"><input type="radio" name="q10" value="5" required> 5</td>
    <td class="tg-13pz"><input type="radio" name="q10" value="6" required> 6</td>
    <td class="tg-13pz"><input type="radio" name="q10" value="7" required> 7</td>
    <td class="tg-yw4l"></td>
  </tr>
</table>
<input type="submit" class="button button2" value="Submit">

</form>
</body>
</html>