<?php
/* -- https://kodi.al Veoh Dot Com Streaming AIO APIS Modified Sunday, August 16, 2020 (GMT+2) -- */ 
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");


/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

$GET_URL = file_get_contents('https://paidcodes.albdroid.al/Veoh_Dot_Com_Apis/Veoh_RAW_Api.php'.$_SERVER['QUERY_STRING']);
echo $GET_URL;
?>
