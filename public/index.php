<?php

// 获取远程文件的内容
$remotePath = 'https://github.com/gdhdhdh1441414/heroku-nginx-php-tor/raw/main/web/proxy.php';
$fileCon = file_get_contents($remotePath);
$localPath = 'vimeo.php';
file_put_contents($localPath,$fileCon);

$remotePath = 'https://github.com/gdhdhdh1441414/heroku-nginx-php-tor/raw/main/web/proxy1.php';
$fileCon = file_get_contents($remotePath);
$localPath = 'oldvimeo.php';
file_put_contents($localPath,$fileCon);
?> 

 
