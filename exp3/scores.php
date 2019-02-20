<?php
session_start();

$file=$_SESSION['subject_id'];


// decode stringified json data
$data=urldecode($_POST['data']);
$a=json_decode($data, true);
$alength=count($a);

// system("echo ".date("Y-m-d").",".date("h:i:sa")." >> ".$file."_score.txt");
// system("echo ".date("Y-m-d").",".date("h:i:sa")." >> ".$file."_score_ans.txt");

//decode json ['responses']
for ($i=0; $i <$alength ; $i++) { 
	$ans[]=json_decode($a[$i]['responses'], true);
}

$x = 0;
// print_r ($x);

for ($i=0; $i <$alength ; $i++) { 
	$rtsum+=$a[$i]['rt'];
	if ($ans[$i]['Q0'] == $a[$i]['answer']) {
		$x+=1;
		$cor[]=1;
	} else {
		$cor[]=0;
	}
};

$percent=round($x / $alength,2);

// for ($i=0; $i <$alength ; $i++) { 
// 	$rtsum+=$a[$i]['rt'];
// };

$rtavg=round($rtsum / $alength);

system("echo 'q,score,percent,rtavg,rt,ans,subjectans' >> exp3db/arith_".$file.".txt");

for ($i=0; $i <$alength ; $i++) { 
	$num=$i+1;
	system("echo ".$num.",".$cor[$i].",".$percent.",".$rtavg.",".$a[$i]['rt'].",".$a[$i]['answer'].",".$ans[$i]['Q0']." >> exp3db/arith_".$file.".txt"); 
	// system("echo ".$i.",".$file.",".$a[$i]['answer'].",".$ans[$i]['Q0']." >> arith_ans_".$file.".txt");
}
// system("echo ".getcwd()." >> ".$file."_cwd1.txt");

?>
