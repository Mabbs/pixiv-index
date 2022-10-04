<?php
for($i=0;$i<=500;$i++){
$raw=json_decode(file_get_contents('https://api.lolicon.app/setu/v2?r18=1&num=20&size=regular'),true)['data'];
foreach($raw as $pic){
$pic['url']=$pic['urls']['regular'];
$pic['url']=str_replace("https://i.pixiv.re","",$pic['url']);
//if(!is_file('./data/'.$pic['pid'].'.json')){
$picfile = fopen('./data/'.$pic['pid'].'.json', "w");
fwrite($picfile, json_encode($pic,JSON_UNESCAPED_UNICODE));
fclose($picfile);
//}
}
}
