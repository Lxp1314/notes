# 基础

## 9种原始数据类型
四种标量类型：boolean、integer、float、string
三种复合类型：array、object、callable
两种特殊类型：resource、NULL

## array
```
$arr = ['a' => 'a1', 'b' => 'a2', '3', '44'];
var_dump($arr);
```
输出
```
array(4) {
  ["a"]=>
  string(2) "a1"
  ["b"]=>
  string(2) "a2"
  [0]=>
  string(1) "3"
  [1]=>
  string(2) "44"
}
```

## php允许的类型转换
```
(int), (integer) - 转换为整形 integer
(bool), (boolean) - 转换为布尔类型 boolean
(float), (double), (real) - 转换为浮点型 float
(string) - 转换为字符串 string
(array) - 转换为数组 array
(object) - 转换为对象 object
(unset) - 转换为 NULL (PHP 5)

(binary) 转换和 b 前缀转换支持为 PHP 5.2.1 新增。
$binary = (binary)$string;
$binary = b"binary string";
```

## Ctype函数
```
\n	换行（ASCII 字符集中的 LF 或 0x0A (10)）
\r	回车（ASCII 字符集中的 CR 或 0x0D (13)）
\t	水平制表符（ASCII 字符集中的 HT 或 0x09 (9)）
\v	垂直制表符（ASCII 字符集中的 VT 或 0x0B (11)）（自 PHP 5.2.5 起）
\e	Escape（ASCII 字符集中的 ESC 或 0x1B (27)）（自 PHP 5.4.0 起）
\f	换页（ASCII 字符集中的 FF 或 0x0C (12)）（自 PHP 5.2.5 起）

\\	反斜线
\$	美元标记
\"	双引号

ctype_alnum - 做字母和数字检测（alpha and num）
    [a-zA-Z0-9]
ctype_alpha - 做纯字母检测
    [A-Za-z]
ctype_digit - 做纯数字检测
    [0-9]+
ctype-cntrl - 做控制字符检测
    全部都是控制字符：换行、缩进、制表。
ctype_graph - 做可打印字符检测，空格除外
    检查输出的字符都是可见的（空格不可见）。
ctype_lower - 做小写字母检测
ctype_upper - 做大写字母检测
ctype_print - 做可打印字符检测
    包括字母、数字、标点、特殊符号、空白，但不包括控制字符
ctype_punct - 检测可打印的字符是不是不包含空白、数字和字母
    符合ctype_print要求，但没有字母、数字、空白，只有标点、特殊符号
ctype_space - 做空白字符检测
    空白字符，缩进，垂直制表符，换行符，回车和换页字符
ctype_xdigit - 检测字符串是否只包含十六进制字符
    十进制的数值和 [A-Fa-f] 的字母
```

## 对象创建
```
//标准创建
$instance = new SimpleClass();
//从对象创建
$newInstance = new $instance;
```

## include require include_once require_once
include和require唯一区别就是如果被包含的文件不存在，include仅仅是发出警告E_WARMING并继续运行，而require则会引发致命错误并停止运行。include和include_once，require和require_once的区别在于如果代码中多次包含文件时，include和require会多次引用，而include_once和requere_once则只会引用一次，include和require可能引起的问题是：当多次引用时，被引用代码文件中的变量语句会覆盖之前引用的变量赋值，而如果在被引用文件中定义了方法，则会引发重复定义方法的致命错误。（php4 return语句之后定义的方法不会引起重复定义的问题，这个不重要）

## declare(ticks=N)
declare(ticks=N)，N来定义Zend引擎每执行N条简单语句就执行register_tick_function('functionName')注册的方法;
http://php.net/manual/zh/control-structures.declare.php
https://my.oschina.net/Jacker/blog/32936

## goto
(PHP 5 >= 5.3.0, PHP 7)
goto 操作符可以用来跳转到程序中的另一位置。该目标位置可以用目标名称加上冒号来标记，而跳转指令是 goto 之后接上目标位置的标记。PHP 中的 goto 有一定限制，目标位置只能位于同一个文件和作用域，也就是说无法跳出一个函数或类方法，也无法跳入到另一个函数。也无法跳入到任何循环或者 switch 结构中。可以跳出循环或者 switch，通常的用法是用 goto 代替多层的 break。
```php
<?php
//不会输出111
goto a;
echo '111';

//目标位置，名称加冒号作为标记
a:
echo '222';
```

### 9个超全局变量
1. $_GLOBALS
2. $_SERVER
3. $_GET
4. $_POST
5. $_REQUEST
6. $_FILE
7. $_SESSION
8. $_COOKIE
9. $_ENV

### phpstorm工具下面一直update indices
File->Invalidate Caches/Restart...->Invalidate and Restart

