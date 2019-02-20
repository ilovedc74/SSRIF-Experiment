<?php
session_start();

$file=$_SESSION['subject_id'];

//save form $q1~$q12

// $q1=$_POST['q1'];
// print_r($q1);

$list = array();

for ($i=1; $i <= 6; $i++) {
	$q[$i]=$_POST['q'.$i]; 
	// print_r ($q[$i]);
	array_push($list, $q[$i]);
}


// print_r ($list);
// print_r('<br>');

$a = implode(",", $list);

// print_r ($a);
system("echo 'learned,abstract,q3,q4,like,why' >> exp3db/film_".$file.".txt");
system("echo ".$a." >> exp3db/film_".$file.".txt");
// system("echo ".$q[$i]." >> test_survey1.txt");


header('Location: ready1freecon.php');



// javascript ajax

// php write csv


?>