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


		text-align: center;
	}
	h1 {
		font-weight: bold;
		font-size: 180%;
	}
	p {
		font-size: 130%;
		line-height: 200%;
	}


</style>
</head>
<body>
	<div id="jspsych-target"></div>
	<div id="trial"></div>
</body>

<script>  



var opt = ['+', '-', '*'];

//choose function?
var arith=['plus','minus','times'];

var plus = function (x,y){
	return x+y;
}
var minus = function (x,y){
	return x-y;
}
var times = function (x,y){
	return x*y;
}


answer=[];
exp=[];
trials=[];
for(var i=1; i<=30; i++){ 
 a=Math.round(Math.random()*99); //number A
 b=Math.round(Math.random()*99); //number B
 o=Math.round(Math.random()*2); //operation
 answer.push(eval(arith[o])(a,b));
 exp.push(a+opt[o]+b); //expression
}

//get answer and check correctness

for (var i=1; i<=30; i++) {
// for (var i=1; i<=2; i++) {

	trials.push({
		preamble: '請心算回答第'+i+'/30題:', 
		type: 'survey-text', 
		data: {answer:answer[i-1]},
		questions: [exp[i-1]+"="]});
}

// console.log(answer)

// var subject_id = Math.floor(Math.random()*100000);
// jsPsych.data.addProperties({subject:subject_id});





jsPsych.init({
	display_element: $('#jspsych-target'),
	timeline: trials,
	on_finish: function(){
		data = jsPsych.data.getData()
    	data = encodeURIComponent(JSON.stringify(data))
    	var xmlHttp=new XMLHttpRequest();
    	var URL="http://mil.psy.ntu.edu.tw/~whitney/exp3old/scores.php";
  		var params="data="+data;
    		xmlHttp.open("POST",URL,true);
    		xmlHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
    		xmlHttp.send(params);

    // console.log(subject_id)

    // console.log(data)
      window.location.replace('ready3freerecall.php');
	}
})


</script>
</html>