#创建学生信息库
create database `stu_info` charset utf8 collate utf8_general_ci;
#创建学生信息表
create table `stu_grade`(
id int,
name varchar(20) not null default '' comment '姓名',
chinese decimal(5,2) unsigned not null default 0.00 comment '语文成绩',
english decimal(5,2) unsigned not null default 0.00 comment '英语成绩',
math decimal(5,2) unsigned not null default 0.00 comment '数学成绩')
charset utf8 collate utf8_general_ci engine myisam;
#向stu_grade表中插入信息
insert into stu_grade(id,name,chinese,english,math) values 
(1,'刘备',89,78,90),
(2,'张飞',67,98,56),
(3,'宋江',87,78,77),
(4,'关羽',88,98,90),
(5,'赵云',82,84,67),
(6,'欧阳锋',55,85,45),
(7,'黄蓉',75,65,30);


