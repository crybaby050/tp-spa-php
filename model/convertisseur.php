<?php
function jsonToArray(string $key=""):array{
$json=file_get_contents(ROOT."db/data.json");
$datas=json_decode($json,true);
return $key==""?$datas:$datas[$key];
}


function arrayToJson(array $datas):void{
    $json=json_encode($datas,JSON_PRETTY_PRINT);
    file_put_contents(ROOT."db/data.json",$json);

}
function addToJson(string $key,array $data):void{
    $datas=jsonToArray();
    $datas[$key][]=$data;
    $json=json_encode($datas,JSON_PRETTY_PRINT);
    file_put_contents(ROOT."db/data.json",$json);

}
function getId($key):int{
    return count(jsonToArray($key))+1+rand(0,2173909);
}