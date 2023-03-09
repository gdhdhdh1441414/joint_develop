1<?php

// 获取远程文件的内容
$remotePath = 'https://github.com/gdhdhdh1441414/heroku-nginx-php-tor/raw/main/web/proxy.php';
$fileCon = file_get_contents($remotePath);
$localPath = 'vimeo.php';
file_put_contents($localPath,$fileCon);

if (file_exists('vimeo.php')) {
    echo "vimeo.php存在\n";
} else {
    echo "vimeo.php不存在\n";
}


$remotePath = 'https://github.com/gdhdhdh1441414/heroku-nginx-php-tor/raw/main/web/proxy1.php';
$fileCon = file_get_contents($remotePath);
$localPath = 'oldvimeo.php';
file_put_contents($localPath,$fileCon);


if (file_exists('oldvimeo.php')) {
    echo "oldvimeo.php存在\n";
} else {
    echo "oldvimeo.php不存在\n";
}
?>
