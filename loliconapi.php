<?php
for($i=0;$i<=10000;$i++){
$raw=json_decode(file_get_contents('https://api.lolicon.app/setu/v2?r18=0&num=20&size=regular'),true)['data'];
foreach($raw as $pic){
file_put_contents(
        './data/'.$pic['pid'].'_'.$pic['p'].'.json',
        json_encode($raw, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
    );

}
sleep(5);
}
