### js的label用法
```js
fori: for(var i=0; i<3; i++){
  for(var j=0; j<3; j++){
    if(i==1 && j==0){
      break fori;
    }
    console.log(i + '\t' + j);
  }
}
```

### 匿名函数直接运行
```js
(function(){
  alert('123');
})()
```

### 方法的参数arguments
```js
function test(name, age){
  console.log(arguments.length);//方法的参数长度
  if(arguments.length==2){
    console.log(name);//name等于arguments[0]
    console.log(arguments[1]);//age等于arguments[1]
  }
}
test('wuyun', 18);
test('wuyun');
test();
```

### undefined和null
1. null表示一个对象，undefined表示一个未定义的基本变量
2. typeof null 返回的是“object”，typeof undefined 返回的是“undefined”

### 为false的五种值
0、NaN、undefined、null、""（空字符串）
### NaN
```
NaN 属性是代表非数字值的特殊值。该属性用于指示某个值不是数字。
可以把 Number 对象设置为该值，来指示其不是数字值。
NaN 与其他数值进行比较的结果总是不相等的，包括它自身在内。
因此，不能与 Number.NaN 比较来检测一个值是不是数字，
而只能调用 isNaN() 来比较。
```
### 对象的创建方式
1. new Object()
```js
var person = new Object();
person.name = "Wuyun";
person.age = 18;
person.growUp = function(){
  this.age += 1;
}
//调用
console.log(person.name); //Wuyun
console.log(person.age); //18
person.growUp();
console.log(person.age); //19
```
2. 花括号{}
```js
var person = {
  name: 'Wuyun',
  age: 18,
  growUp: function(){
    this.age += 1;
  }
}
```
3. 构造函数法
```js
function Person(name, age){
  this.name = name;
  this.age = age;
  this.growUp = function(){
    this.age += 1;
  }
}
var person = new Person('Wuyun', 18);
```

### 数组
数组的本质是对象

### 数组的创建方式
1. []
```js
var a = [1,2,3,4,5];
```
2. new Array(value1,value2...)
```js
var a = new Array(1,2,3,4,5);
```
3. new Array(length)
```js
var a = new Array(5);
a[0] = 1;
a[1] = 2;
a[2] = 3;
a[3] = 4;
a[4] = 5;
```

### splice
splice() 方法向/从数组中添加/删除项目，然后返回被删除的项目。
```js
array.splice(start, deleteCount[, ...items]);
```
