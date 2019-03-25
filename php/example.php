<?php
//example1
$a = [0,1,2];
foreach($a as $k=>$v)
{
	$v = &$a[$k];
}
var_dump($a);//输出 [1,2,3];

//example2
$a = 0;
if($a = 3 > 0)//>运算优先=，所以$a = true
{
	$a++; //相当于true++，结果依然是true
	echo $a; //echo true时会显示1
}
