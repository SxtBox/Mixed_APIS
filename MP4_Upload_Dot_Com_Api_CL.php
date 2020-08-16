<?php
/* -- https://kodi.al MP4 Upload Dot Com API Modified Sunday, August 16, 2020 (GMT+2) -- */ 
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$GET_URL = file_get_contents('https://paidcodes.albdroid.al/MP4_Upload_Dot_Com_Api/'.$_SERVER['QUERY_STRING']);
echo $GET_URL;
?>
