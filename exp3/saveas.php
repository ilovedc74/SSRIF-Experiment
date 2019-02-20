<?php
session_start();

$file=$_SESSION['subject_id'];
$room=$_POST['room'];
// decode stringified json data
$data=urldecode($_POST['data']);
$a=json_decode($data, true);
$alength=count($a);

// system("echo ".getcwd()." >> ".$file."_cwd1.txt");
// echo getcwd() . "\n";
// chdir('exp3db');
// system("echo ".getcwd()." >> ".$file."_cwd2.txt");

//file_1 ex:recall_order.txt
system("echo ".$_SESSION['subject_id'].",".$room." >> exp3db/recall_order.txt"); 
//file_2 ex:subject_time.txt
system("echo ".$_SESSION['subject_id'].",".date("Y-m-d").",".date("h:i:sa")." >> exp3db/subject_time.txt");
//file_3 ex:recallorder_22.txt (just in case)
system("echo ".$room." >> exp3db/recallorder_".$file.".txt"); 

// system("echo ".date("Y-m-d").",".date("h:i:sa")." >> ".$file."_rt.txt");
// decode json 'responses'
for ($i=0; $i <$alength ; $i++) { 
	$rtsum+=$a[$i]['rt'];
	$ans[]=json_decode($a[$i]['responses'], true);
}
//file_4 ex:ans_22.txt
//file_5 ex:rt_22.txt


$rtavg=round($rtsum / $alength);


for ($i=0; $i <$alength ; $i++) { 
	$tmp=preg_replace('/\s+/', ' ', $ans[$i]['Q0']);
	system("echo ".$a[$i]['room'].",".$tmp." >> exp3db/ans_".$file.".txt"); //ans by recall order ex:ans_0001.txt
	system("echo ".$a[$i]['room'].",".$a[$i]['rt'].",".$rtavg." >> exp3db/rt_".$file.".txt"); //ans by recall order ex:rt_0001.txt
}
// for ($i=0; $i <$alength ; $i++) { 
// 	$tmp=preg_replace('/\s+/', ' ', $ans[$i]['Q0']);
// 	system("echo ".$_SESSION['subject_id'].",".$a[$i]['room'].",".$tmp." >> exp3db/ans_".$file.".txt"); //ans by recall order ex:ans_0001.txt
// 	system("echo ".$_SESSION['subject_id'].",".$a[$i]['room'].",".$a[$i]['rt']." >> exp3db/rt_".$file.".txt"); //ans by recall order ex:rt_0001.txt
// }

// // remove all session variables
// session_unset(); 

// // destroy the session 
// session_destroy(); 


?>
