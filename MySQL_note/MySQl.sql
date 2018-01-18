-- 库操作
-- 创建数据库

	create database php07 charset utf8;

-- 查看所有数据库
	show databases;

-- 查看数据库创建语句
	show create database php07;

-- 修改数据库的字符集
	alter database php07 charset=gbk collate=gbk_general_ci;

-- 删除数据库
	drop database php07;

-- 选择数据库
	use `my_house`;


-- 表操作


-- 创建表
	create table my_house_student(
	id int not null auto_increment primary key comment 'id号',
	name varchar(10) not null default '' comment '姓名',
	age int not null default 0 comment '年龄',
	sex varchar(5) not null default '男' comment '性别'
	)charset=utf8 engine=innodb;

-- 创建一个只存储数值的表
-- **整数类型
-- *****无符号创建
	create table my_house_number1(
		num1 tinyint unsigned not null comment'占用1字节',
		num2 smallint unsigned not null  comment'占用2字节',
		num3 int unsigned not null comment'占用4个字节'
	)charset=utf8;
-- *****有符号创建
	create table my_house_number2(
		num1 tinyint not null comment'占用1字节',
		num2 smallint not null  comment'占用2字节',
		num3 int not null comment'占用4个字节'
	)charset=utf8;

-- **小数类型
-- *****无符号创建
	create table my_house_number1(
		num1 float unsigned not null comment'不指定小数位数',
		num2 decimal(10,2) unsigned not null  comment'指定小数位数'
	)charset=utf8;
-- *****有符号创建
	create table my_house_number2(
		num1 float not null comment'不指定小数位数',
		num2 decimal(10,2) not null  comment'指定小数位数'
	)charset=utf8;

-- 创建一个存储字符串的表

-- *****char,varchar,text
	create table my_house_string(
		name char(10) not null comment'名字',
		sex varchar(10)  not null  comment'性别',
		remark text not null comment'备注'
	)charset=utf8;

-- 创建一个存储时间日期的表

-- *****date,datetime
	create table my_house_mydate(
		add_date date not null comment'添加日期',
		add_time datetime  not null  comment'添加时间'
	)charset=utf8;


-- 删除表

	drop table php_stu;

-- 查看所有表
	show tables my_house_student;(先用use 库名来操作表对应的库名)


-- 查看表结构
	desc my_house_student;


-- 查看表的创建语句
	show create table my_house_student;

-- 修改表名
	alter table my_house_student rename NB_NMB;

-- 添加新字段
	alter table my_house_string add want varchar(100) not null default '做梦' comment '想要';


-- 修改表字段(能改名)

	alter table my_house_string change want dream char(120) not null default '大牛' comment '梦想';

-- 修改字段(只改属性)

	alter table my_house_string modify dream varchar(200) not null default '牛逼的人' comment '追捉梦想';

-- 数据的插入
	insert into my_house_number(num1,num2,num3)values(260,70000,5000000000000000000000000000);


-- 一次性插入多条数据
-- ****不省略字段列表
	insert into my_house_string(name,sex,dreame) 
	values('神罗','中性','成为神'),
	values('佐助','男','超越哥哥'),
	values('小智','男','成为葫芦岛第一段子手'),
	values('小苍','女','超越苍井空');

-- ****省略字段列表
	insert into my_house_string(name,sex,dreame) 
	values('神罗','中性','成为神'),
	values('佐助','男','超越哥哥'),
	values('小智','男','成为葫芦岛第一段子手'),
	values('小苍','女','超越苍井空');


---------------------------------------------------------------------------------

-- 删除数据
	delete from newhouse where id=1;



-- 删除表内容重新分配id
	truncate newhouse;
	

-- 修改数据
	update newhouse set name='牛鼻', age='55';
	update newhouse set name='喵了个咪', age='66' where id=1;



-- 查询所有数据及字段
	select * from newhouse_p;

-- 查询指定的字段与数据
	select user,password from newhouse_p;

-- 查询数据量
	select count(id) from newhouse_p;
-- 查询数据量--设置别名
	select count(id) as sum from newhouse_p;

-- from,查询的是哪个或哪些表
	select * from newhouse_p;
	select * from my_house_number,my_house_string;--使用连接方式


-- **where相关
-- 算数运算符
	select * from my_house_string where id=1+1;

-- 比较运算符
	select * from my_house_string where id<6;

-- 逻辑运算符
	select * from my_house_string where id<6 and id>4;

-- 查询指定id
	select * from my_house_string where id in (4,6,8);

-- 查询范围内的id
	select * from newhouse_p where id between 6 and 9;

-- like精确查询
	select * from my_house_string where name like '小';
-- like模糊查询
	select * from my_house_string where name like '%小%';

-- **分组
-- 分男女
	select count(sex) as sex from my_house_string group by sex;


