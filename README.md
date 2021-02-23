# pixiv-index
无需后端的部分Pixiv图片索引API   
图片来源：https://api.lolicon.app/   
由于无法忍受调用次数限制又懒得动脑思考其他图片获取方法，然后站长又明确表示不给数据库而做的方案。   
## 调用方法
PHP示例:
```
<?php
$raw=json_decode(file_get_contents("https://mabbs.github.io/pixiv-index/index.json"),true);
echo file_get_contents('https://mabbs.github.io/pixiv-index/data/'.$raw[rand(0,count($raw)-1)]);
```
