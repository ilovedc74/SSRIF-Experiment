<?php
session_start();

$file=$_SESSION['subject_id'];



$list = array();

for ($i=1; $i <= 5; $i++) {
	$q[$i]=$_POST['q'.$i]; 
	// print_r ($q[$i]);
	array_push($list, $q[$i]);
}



$a = implode(",", $list);

system("echo 'age,sex,q3,q4,q5' >> exp3db/agesex_".$file.".txt");

system("echo ".$a." >> exp3db/agesex_".$file.".txt");


header('Location: end.php');



// javascript ajax

// php write csv


?>