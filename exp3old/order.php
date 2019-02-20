<?php
session_start();

$file=$_SESSION['subject_id'];

// $file=$_GET['file'];
$pracorder=$_GET['pracorder'];
// $studyorder=$_GET['studyorder'];


// system("echo ".date("Y-m-d").",".date("h:i:sa")." >> exp3db/RPorder_".$file.".txt");
// system("echo ".date("Y-m-d").",".date("h:i:sa")." >> ".$file."_order.txt");
// system("echo ".The time is:.",".date("Y-m-d").",".date("h:i:sa")." >> $file.txt");
// system("echo $studyorder >> ".$file."_order.txt");
system("echo ".$pracorder." >> exp3db/con_rp_order_".$file.".txt");
system("echo ".$_SESSION['subject_id'].",".$pracorder." >> exp3db/con_practice_order.txt"); 
//file_2 ex:subject_time.txt
system("echo ".$_SESSION['subject_id'].",".date("Y-m-d").",".date("h:i:sa")." >> exp3db/con_subject_time.txt");

?>
