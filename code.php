<?php

//把用户输入存到php文件内
$code = $_GET['str'];
//$code = '$array = array(1,2,3);print_r($array);';
$code = "<?php ".$code." ?>";
if(!$code) exit('请输入要执行php的代码');
$dirPath = '/usr/local/nginx/html/php_tools/temp/';
$filename = $dirPath.md5($code.time()).'.php';
file_put_contents($filename,$code);

//执行php文件
exec("php ".$filename,$result);
$res = '';
foreach($result as $key=>$val){
	$val = str_replace("   ","\n",$val);
	$res .= $val;
}
exec('rm -rf '.$filename);
echo $res;
