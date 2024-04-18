<?php>
$result = array();

$result_json = file_get_contents('php://input');

$result = json_decode($result_json, true);

if(count($result) > 0){
    _in_logit($result);
}

function _in_logit($data) {
    @file_put_contents(__DIR__."/data.json", PHP_EOL.date("Y-m-d:i:s").":".print_r($data, true).PHP_EOL, FILE_APPEND);
}