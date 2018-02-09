CREATE TABLE dept( 
deptno MEDIUMINT   UNSIGNED  NOT NULL  DEFAULT 0, 
dname VARCHAR(20)  NOT NULL  DEFAULT "",
loc VARCHAR(13) NOT NULL DEFAULT ""
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ;

INSERT INTO dept VALUES(10, 'ACCOUNTING', 'NEW YORK'), (20, 'RESEARCH', 'DALLAS'), (30, 'SALES', 'CHICAGO'), (40, 'OPERATIONS', 'BOSTON');




#创建表EMP雇员
CREATE TABLE emp
(empno  MEDIUMINT UNSIGNED  NOT NULL  DEFAULT 0 comment '编号',
ename VARCHAR(20) NOT NULL DEFAULT "" comment '名字',
job VARCHAR(9) NOT NULL DEFAULT "" comment '职位',
mgr MEDIUMINT UNSIGNED comment '上级编号',
hiredate DATE NOT NULL comment '入职时间',
sal DECIMAL(7,2)  NOT NULL comment '薪水',
comm DECIMAL(7,2) comment '红利',
deptno MEDIUMINT UNSIGNED NOT NULL DEFAULT 0 comment '部门编号'
)ENGINE=MyISAM DEFAULT CHARSET=utf8 ;

 
 INSERT INTO emp VALUES(7369, 'SMITH', 'CLERK', 7902, '1980-12-17', 800.00,NULL , 20), 
(7499, 'ALLEN', 'SALESMAN', 7698, '1981-2-20', 1600.00, 300.00, 30),  
(7521, 'WARD', 'SALESMAN', 7698, '1981-2-22', 1250.00, 500.00, 30),  
(7566, 'JONES', 'MANAGER', 7839, '1981-4-2', 2975.00,NULL,20),  
(7654, 'MARTIN', 'SALESMAN', 7698, '1981-9-28',1250.00,1400.00,30),  
(7698, 'BLAKE','MANAGER', 7839,'1981-5-1', 2850.00,NULL,30),  
(7782, 'CLARK','MANAGER', 7839, '1981-6-9',2450.00,NULL,10),  
(7788, 'SCOTT','ANALYST',7566, '1987-4-19',3000.00,NULL,20),  
(7839, 'KING','PRESIDENT',NULL,'1981-11-17',5000.00,NULL,10),  
(7844, 'TURNER', 'SALESMAN',7698, '1981-9-8', 1500.00, NULL,30),  
(7900, 'JAMES','CLERK',7698, '1981-12-3',950.00,NULL,30),  
(7902, 'FORD', 'ANALYST',7566,'1981-12-3',3000.00, NULL,20),  
(7934,'MILLER','CLERK',7782,'1982-1-23', 1300.00, NULL,10);



#工资级别表
CREATE TABLE salgrade
(
grade MEDIUMINT UNSIGNED NOT NULL DEFAULT 0,
losal DECIMAL(17,2)  NOT NULL,
hisal DECIMAL(17,2)  NOT NULL
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO salgrade VALUES (1,700,1200);
INSERT INTO salgrade VALUES (2,1201,1400);
INSERT INTO salgrade VALUES (3,1401,2000);
INSERT INTO salgrade VALUES (4,2001,3000);
INSERT INTO salgrade VALUES (5,3001,9999);


select avg(sal) as 平均工资,min(sal) as 最低工资 
from `emp` 
group by deptno,job; 

select round(avg(sal),3) as 平均工资,deptno 
from `emp` 
group by deptno 
having 平均工资 < 2000; 

select round(avg(sal),3) as 平均工资,deptno,job 
from `emp` 
group by deptno,job
having 平均工资 < 2000; 

create table `mes`(
id int unsigned not null default 0 comment 'id号',
mes varchar(800) not null default '' comment '留言内容',
save_time int unsigned not null default 0 comment '保存时间'
)charset utf8 collate utf8_general_ci engine myisam;

insert into `mes` values
(1,'hello',unix_timestamp());
insert into `mes` values
(1,'hello',unix_timestamp());