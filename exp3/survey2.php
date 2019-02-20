<?php
session_start();

$file=$_SESSION['subject_id'];

//save form $q1~$q12

// $q1=$_POST['q1'];
// print_r($q1);

$list = array();

for ($i=1; $i <= 10; $i++) {
	$q[$i]=$_POST['q'.$i]; 
	// print_r ($q[$i]);
	array_push($list, $q[$i]);
}


// print_r ($list);
// print_r('<br>');

$a = implode(",", $list);

// print_r ($a);

// system("echo ".$file.",".$a." >> tipi_survey.txt");
// system("echo ".$q[$i]." >> test_survey1.txt");
system("echo ".$a." >> exp3db/tipi_".$file.".txt");

header('Location: agesex.php');



// javascript ajax

// php write csv


?>