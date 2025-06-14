<?php 

function getIpInfo($data){
    $api = "http://ip-api.com/json/".$_SERVER['REMOTE_ADDR'];
    $c = curl_init($api);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($c);
    $json_data = json_decode($res, true);
    return $json_data[$data];
}









?>