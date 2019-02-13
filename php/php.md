# 基础

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


### phpstorm工具下面一直update indices
File->Invalidate Caches/Restart...->Invalidate and Restart

