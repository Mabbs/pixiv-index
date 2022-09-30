# pixiv-index
无需后端的部分Pixiv图片索引API   
图片来源：https://api.lolicon.app/   
由于无法忍受调用次数限制又懒得动脑思考其他图片获取方法，然后站长又明确表示不给数据库而做的方案。   
## 调用方法
PHP示例:
```php
<?php
$raw=json_decode(file_get_contents("https://mabbs.github.io/pixiv-index/index.json"),true);
echo file_get_contents('https://mabbs.github.io/pixiv-index/data/'.$raw[rand(0,count($raw)-1)]);
```
同样，你也可以使用由[jsDelivr](https://www.jsdelivr.com/)提供的CDN，例如：
```php
<?php
$raw=json_decode(file_get_contents("https://cdn.jsdelivr.net/gh/Mabbs/pixiv-index/index.json"),true);
echo file_get_contents('https://cdn.jsdelivr.net/gh/Mabbs/pixiv-index/data/'.$raw[rand(0,count($raw)-1)]);
```

## 前端演示
[Setu Viewer](setu.html)
