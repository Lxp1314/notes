```
mysql服务：mysqld
mysql客户端：mysql

//登录mysql命令行客户端，连接本地服务：
mysql -u root -p
//连接远程服务，使用-h指定ip或域名
mysql -h 10.0.1.99 -u root -p

//显示数据库
mysql> show databases;

//选择数据库
mysql> use xx;

//创建数据库
mysql> create database xx;

//删除数据库
mysql> drop database xx;

//列出当前数据库所有表
mysql> show tables;

//查看表结构
mysql> desc xx;

//查看表创建语句
mysql> show create table xx;

//创建表
mysql> create table `students` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `class_id` bigint(20) NOT NULL,
    `name` varchar(100) NOT NULL,
    `gender` varchar(1) NOT NULL,
    `score` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8

//删除表
mysql> drop table xx;

//修改表，增加列、修改列、删除列
mysql> ALTER TABLE students ADD COLUMN birth VARCHAR(10) NOT NULL;
mysql> ALTER TABLE students CHANGE COLUMN birth birthday VARCHAR(20) NOT NULL;
mysql> ALTER TABLE students DROP COLUMN birthday;

//退出mysql命令行
mysql> exit;
```
