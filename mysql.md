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

//插入或替换（如果记录已经存在，就先删除原记录，再插入新记录）
REPLACE INTO students (id, class_id, name, gender, score) VALUES (1, 1, '小明', 'F', 99);
//插入或更新（如果记录已经存在，就更新该记录）
INSERT INTO students (id, class_id, name, gender, score) VALUES (1, 1, '小明', 'F', 99) ON DUPLICATE KEY UPDATE name='小明', gender='F', score=99;
//插入或忽略
INSERT IGNORE INTO students (id, class_id, name, gender, score) VALUES (1, 1, '小明', 'F', 99);

//创建表快照（创建test表的快照test_1表并将id<10的数据写入）
create table test_1 select * from test where id<10;

//将查询插入表
INSERT INTO statistics (class_id, average) SELECT class_id, AVG(score) FROM students GROUP BY class_id;

//事务：ACID
A：Atomic，原子性，将所有SQL作为原子工作单元执行，要么全部执行，要么全部不执行；
C：Consistent，一致性，事务完成后，所有数据的状态都是一致的，即A账户只要减去了100，B账户则必定加上了100；
I：Isolation，隔离性，如果有多个事务并发执行，每个事务作出的修改必须与其他事务隔离；事务隔离分为不同级别，包括读未提交（Read uncommitted）、读提交（read committed）、可重复读（repeatable read）和串行化（Serializable）
D：Duration，持久性，即事务完成后，对数据库数据的修改被持久化存储。
//使用begin;|start transaction;开始一个事务，使用commit;|commit work;提交一个事务；使用rollback;|rollback work;回滚一个事务。
BEGIN;
UPDATE accounts SET balance = balance - 100 WHERE id = 1;
UPDATE accounts SET balance = balance + 100 WHERE id = 2;
COMMIT;
```
