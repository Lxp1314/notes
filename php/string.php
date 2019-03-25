<?php
/**
 * 污云
 * 2019-3-14 10:30:40
 */

//addslashes对 ' " \ Nul值添加反斜杠
$str = "I'm wuyun";
$str = 'Hello " \ ';
$result = addslashes($str);
var_dump($result);
$result = stripslashes($result);
var_dump($result);

$some_string = "test\ntext text\r\n";
echo convert_uuencode($some_string);