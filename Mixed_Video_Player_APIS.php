<?php
// Features https://paidcodes.albdroid.al/Mixed_Video_Player_API/features/
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

$GET_URL = file_get_contents('https://paidcodes.albdroid.al/Mixed_Video_Player_API'.$_SERVER['QUERY_STRING']);
echo $GET_URL;
?>
