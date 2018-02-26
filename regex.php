<?php

$str = $_SERVER['argv'][1];

//IP 0~255.0~255.0~255.0~255
#$patt = '/^(([0-9]|[0-9][0-9]|[12][0-5][0-5])\.){3}([0-9]|[0-9][0-9]|[12][0-5][0-5])$/';

//中文
#$patt = '/^[\x{4e00}-\x{9fa5}]+$/u';  // x=十六进制 u=unicode

//查找未闭合html标签
//$patt = '/>([a-zA-Z0-9\x{4e00}-\x{9fa5}]+>)/u';

preg_match($patt,$str,$re);
print_r($re);
if(preg_match($patt,$str)){
	echo 'succ';
}else{
	echo 'fail';
}
