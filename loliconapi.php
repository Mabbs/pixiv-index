<?php
foreach(json_decode(file_get_contents("key.json"),true) as $key){
$raw='data';
while($raw){
$raw=json_decode(file_get_contents('https://api.lolicon.app/setu/?apikey='.$key.'&size1200=1&r18=1&num=10'),true)['data'];
foreach($raw as $pic){
$pic['url']=str_replace("https://i.pixiv.cat","",$pic['url']);
if(!is_file('./data/'.$pic['pid'].'.json')){
$picfile = fopen('./data/'.$pic['pid'].'.json', "w");
fwrite($picfile, json_encode($pic,JSON_UNESCAPED_UNICODE));
fclose($picfile);
}
}
//sleep(1);
}
}
