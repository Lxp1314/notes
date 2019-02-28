<?php
/**
 * 代码复用
 * 1.类中通过use ExampleTrait;调用，多个时使用逗号分隔：use Trait1,Trait2;
 * 2.优先级（覆盖）：当前类代码>trait代码>基类代码
 * 3.多trait时冲突解决：insteadof（代替） as（别名）
 * use A,B{
 *     A::fun1 insteadof B;//A的方法fun1代替B的方法
 *     B::fun2 as fun3;//B的方法fun2别名改为fun3
 * }
 * 4.使用as语法调整访问控制
 * use A {func1 as protected;}
 * 5.trait组合
 * trait C{ use A,B; }
 * 6.trait支持抽象方法，类使用trait时需要实现该方法
 * 7.trait可以使用静态属性和定义静态方法
 * 8.trait可以定义属性
 */
trait ExampleTrait{
    //trait可以定义属性
    //如果类中有同名同值同可见度的属性，7.0之前报E_STRICT提醒，7.0则不报错
    //如果类中定义了一个同名的属性，可见度或者值不同，则引发致命错误。
    public $x = 1;
    

    function sayHello(){
        //如果使用此trait的类有基类，且基类有sayHello()的方法，可以通过下行代码调用
        // parent::sayHello();
        echo 'Trait say hello!' . PHP_EOL;
    }
    //静态成员
    public function inc(){
        static $c = 0;
        $c = $c + 1;
        echo $c . PHP_EOL;
    }
    //静态方法
    public static function doSomething(){
        echo 'doing something...' . PHP_EOL;
    }
}

/**
 * 接口
 * 1.接口中所有方法都必须公有（可以不加访问控制符，默认公有）
 * 2.实现多个接口时，接口中的方法不能重名
 * 3.接口也可以继承，通过extends，
 * 4.接口的继承可以继承多个（interface c extends a,b）
 * 5.接口中只能定义方法和常量
 */
interface IExampleInterface{

    const interface_info = 'a interface';
    //不加访问控制符，默认公有
    function getClassInfo();
    //只能加public访问控制符
    public function getConstant();
}

/**
 * 抽象类
 * 1.不能被实例化
 * 2.可以包含抽象方法和普通方法
 * 3.抽象方法只有声明，不能有具体功能，具体功能由继承的子类实现
 * 4.子类必须全部实现其抽象方法，且这些方法的访问控制不能小于抽象方法的定义
 * 5.子类实现抽象父类的方法时，类型和参数必须一致，但单子类的参数可多于父类
 * 6.抽象类只支持抽象方法，没有抽象属性一说，因为直接定义普通属性就好了，实际上
 *   抽象类除了可以定义抽象方法外，其他普通方法、普通属性都是可以的
 */
abstract class ExampleAbstract implements IExampleInterface{
    //普通属性
    public $classInfo = 'this a abstract class';
    //抽象方法
    abstract protected function getValue($property);
    //普通方法（实现了接口）
    public function getClassInfo(){
        echo $this->classInfo . PHP_EOL;
    }
    //可以将接口中的方法加abstract，留待子类实现
    abstract public function getConstant();
    // public function getConstant(){
    //     echo self::interface_info . PHP_EOL;
    // }
}

class Example extends ExampleAbstract{
    
    /**
     * public：公有，所有的类都能访问
     * private：私有，只有自己能访问
     * protected：自身、父类、子类可访问
     * var：视为public，旧版本兼容写法
     * $this：伪变量，对象访问自身
     * self：伪变量，类访问自身，常用作静态方法内部访问自身的静态属性
     */

    /**
     * 属性（访问控制符）
     *  |--变量$
     *      |--普通变量
     *      |--静态变量(static $) 
     *  |--常量 const
     */

    use ExampleTrait;

    /**
     * 类属性（变量成员、字段）
     * 必须定义访问控制符（public|protected|private|var）
     * var是php5之前的写法，相当于public
     * 属性必须以$开头
     * 必须使用类的对象调用属性（使用静态方式也可能成功，但是会报E_DEPRECATED错误）
     * $example = new Example; 
     * $example->p;（$example只能访问public属性）
     */
    public $p = 'a property';
    protected $p_protected = 'a protected property';
    private $p_private = 'a private property';

    /**
     * 类常量
     * 常量名称不能加$
     * 可加访问控制符，不加默认public
     * 使用Class::constant方式访问，也可使用$obj::constant方式访问
     * 内部也可self::constant访问（private时只能通过self方式访问）
     */
    public const constant = 'a constant property';

    static private $pp;
    /**
     * 类的静态属性
     * 静态变量名称必须以$开头
     * 可加访问控制符，不加默认public
     * 外部通过Class::$p_static访问，注意需要带$符号
     * 也可使用$obj::$p_static方式访问
     * private时只能通过self::$p_static在内部调用
     */
    public static $p_static = 'a static property';

    /**
     * 构造函数：
     * 每次创建新对象时先调用此方法，用来做一些初始化工作
     * 如果没有__construct()函数，会把与类同名（不区分大小写）的函数作为构造函数
     */
    function __construct(){
        //不会隐式调用父类的构造函数，未定义构造函数则会隐式调用
        //parent::__construct();
        $this->classInfo = 'this a class extends abstract';
        echo __METHOD__ . '初始化' . PHP_EOL;
    }

    /**
     * 与类同名的函数，当__construct()不存在时，会调用同名函数作为构造函数
     * php5.3.3后，有命名空间的类的同名函数不再被作为构造函数调用
     */
    function example(){
        echo __METHOD__ . '初始化' . PHP_EOL;
    }

    /**
     * 析构函数，在对象的所有引用都被删除或者对象被显示销毁时执行
     * 单词destruct有自毁、销毁的意思。
     * 即使使用了exit()，析构函数也会被执行
     * 和构造函数一样，自己没有析构函数则隐式调用父类析构函数，有则不会隐式调用。
     * 试图在析构函数中抛出一个异常会导致致命错误
     */
    function __destruct(){
        //父类的析构函数，需要显示调用
        //parent::__destruct();
        echo '对象销毁了' . PHP_EOL;
    }

    /**
     * 抽象父类的方法实现
     */
    public function getValue($name){
        if(property_exists($this, $name)){
            echo $name . ":" . $this->$name . PHP_EOL;
        }else{
            echo $name . '属性不存在' . PHP_EOL;
        }
    }

    public function getClassInfo(){
        // echo parent::classInfo . PHP_EOL;
        echo $this->classInfo . PHP_EOL;
    }

    public function getConstant(){
        echo self::interface_info . PHP_EOL;
    }

    function test(){
        echo self::constant;
        echo self::$p_static;
        Example::$pp = 'pppppp';
        echo self::$pp;
    }

    static function testStaticFun(){
        //静态方法中不能用伪变量$this
    }

    //当给不可访问属性赋值时调用
    //所有重载方法必须声明为public
    //如果不重写此方法，使用$example->a=‘xx’能设置值，也能取值，
    //如果重写了此方法，则需要自己去纯值，然后重写__get(string $name)进行取值。
    public function __set(string $name, string $value){
        echo '设置：' . $name . '的值' . $value . PHP_EOL;
    }

    //读取不可访问属性的值时调用
    public function __get(string $name){
        echo '获取：' . $name. '的值' . PHP_EOL;
    }

    //对不可访问属性调用isset()或者empety()时调用
    public function __isset(string $name) :bool{
        echo '调用isset:' . $name . PHP_EOL;
        return false;
    }

    //对不可访问属性调用unset()时被调用
    public function __unset(string $name){
        echo '调用unset:' . $name . PHP_EOL;
    }

    //在对象调用一个不可访问的方式时调用
    public function __call(string $name, array $arguments){
        echo ’普通方法‘ . $name . ':' . implode(',' , $arguments). '被调用' . PHP_EOL;
    }

    //在静态上下文中调用一个不可访问方法时调用
    public static function __callStatic(string $name, array $arguments){
        echo ’静态方法‘ . $name . ':' . implode(',' , $arguments). '被调用' . PHP_EOL;

    }

    /** 
     * 魔术方法，以__开头
     */

     //常用于序列化对象之前调用(调用serialize时会先调用__slepp，过滤不需要被序列化的属性，将需要被序列化的属性名称返回)
     public function __sleep() :array{

     }

     //常用于反序列化操作，先调用__wakeup
     public function __wakeup(){

     }

     //把对象当字符串使用时调用：echo $example;
     public function __toString() :string{
        return '调用对象toString了' . PHP_EOL;
     }

     //当尝试以函数方式调用一个对象时被调用
     public function __invoke(){
        echo '调用了对象的__invoke方法' . PHP_EOL;
     }

     //当调用var_export()导出类时调用
     public static function __set_state($array){
        //下面代码不对，不太会用
        //  $obj = new Example;
        //  $obj->p = 'p_value';
        //  $obj->p_protected = 'p_protected value';
        // return $obj;
     }

     //当复制完成时，如果定义了__clone()方法，则新对象中的__clone方法会被调用
     public function __clone(){
        
     }
}

class ExampleChild extends Example{
    protected $p_protected = 'a child protected property';
    private $p_private = 'a child private property';

    // function echoProperty($name){
    //     echo $this->$name;
    // }

    public function test(string $a){
        var_dump($a);
    }
}

// echo Example::constant . PHP_EOL;
// echo (new Example)::constant;
// echo (new Example)::$p_static . PHP_EOL;
$example = new ExampleChild;
$example->getValue('p_private');
$example->getValue('p_no');
$example->getClassInfo();
$example->getConstant();
$example->sayHello();
$example->inc();
$example->doSomething();
$example->a = '1234';//设置不可访问的属性
$example->a;//获取不可访问的属性
isset($example->a);//判断不可访问属性
$example->a(1,2);//调用不存在方法
Example::b('a', 'b');//调用不存在静态方法
echo $example;//调用对象的__toString方法
$example();
// var_export($example);
$example->test(true);
