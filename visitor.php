<?php
$file= fopen("visits.txt", "w");
session_start();
$_SESSION['vi']= $_SESSION['vi']+1;
$count= $_SESSION['vi'];
fwrite($file, $count);
$visits = file_get_contents("visits.txt");
?>