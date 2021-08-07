<?php
include_once "../vendor/autoload.php";

echo EchoHello();
echo PHP_EOL;

for ( $i=0 ;$i < 50; $i++){

    log::info('似乎遗漏了一些内容');
    usleep($i*1000 + 10*$i*$i);
    log::error("重大错误{$i}！",['mes'=>'fuck'.$i]);
}

log::printLog();