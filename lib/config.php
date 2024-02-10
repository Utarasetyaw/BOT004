<?php
include('func.php');
include('igfunc.php');
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
/*
Jika akun terkena feedback_required tenang, tinggal tunggu 24 jam ntar pulih lagi
@theaxe.id
*/

//UBAH BAGIAN INI
$countTarget    = rand(20,28); //Ambil jumlah akun per target
$sleep_1        = rand(20,40); //Jeda per view story
$sleep_2        = rand(35,70); //Jeda per view story 1 akun user
//SAMPAI SINI AJA

$answerFile		= 'storyAnswer.txt'; // FIle komentar mu
$saveFile 		= 'logData.txt'; // File log
$cookieFile 	= 'cookieData.txt'; // File cookie
$targetFile 	= 'targetData1.txt'; // File target
$date 			= date("Y-m-d");
$time 			= date("H:i:s");
?>
