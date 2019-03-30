<?php
echo '-----------------------------------------------------' . PHP_EOL;
echo '* if $a not defined, method "is_null" will throw a notice level error, but "isset" and "empty" not throw' . PHP_EOL;
echo '* we set error_reporting(E_ERROR | E_WARNING)' . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;
error_reporting(E_ERROR | E_WARNING);
echo '$a' . "\t\t empty=" . empty($a) . "\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = "";
echo '$a=""' . "\t\t empty=" . empty($a) . "\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = " ";
echo '$a=" "' . "\t\t empty=" . empty($a) . "\t\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = null;
echo '$a=null' . "\t\t empty=" . empty($a) . "\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = array();
echo '$a=array()' . "\t empty=" . empty($a) . "\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = false;
echo '$a=false' . "\t empty=" . empty($a) . "\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = 15;
echo '$a=15' . "\t\t empty=" . empty($a) . "\t\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = 1;
echo '$a=1' . "\t\t empty=" . empty($a) . "\t\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = -1;
echo '$a=-1' . "\t\t empty=" . empty($a) . "\t\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = 0;
echo '$a=0' . "\t\t empty=" . empty($a) . "\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = '0';
echo '$a=\'0\'' . "\t\t empty=" . empty($a) . "\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = 'true';
echo '$a=\'true\'' . "\t empty=" . empty($a) . "\t\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
$a = 'false';
echo '$a=\'false\'' . "\t empty=" . empty($a) . "\t\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
unset($a);
echo 'unset($a)' . "\t empty=" . empty($a) . "\t isnull=" . is_null($a) . "\t isset=" . isset($a) . PHP_EOL;
echo '-----------------------------------------------------' . PHP_EOL;
/*
 * 总结：
 * 1. isset:false 未定义的变量、等于null的变量、被unset()了的变量，其他都为true
 * 2. empty:true 未定义的变量、长度为0的字符串和数组、null、false、0和'0'、被unset()了的变量
 * 3. isnull:true 未定义的变量、等于null的变量、被unset()了的变量
 */
echo '总结：' . PHP_EOL;
echo '1. isset:false 未定义的变量、等于null的变量、被unset()了的变量，其他都为true' . PHP_EOL;
echo '2. empty:true 未定义的变量、长度为0的字符串和数组、null、false、0和\'0\'、被unset()了的变量' . PHP_EOL;
echo '3. isnull:true 未定义的变量、等于null的变量、被unset()了的变量' . PHP_EOL;
