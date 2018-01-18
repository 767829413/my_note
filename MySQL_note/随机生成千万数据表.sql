#创建随机生成千万级数据的表
#创建自动生成雇员姓名函数
create function rand_string(n INT)
returns varchar(255)
begin
declare chars_str varchar(100) default
'abcdefqhijklmnopqrstuvwxyzABCDEFJHIJKLMNOPQRSTUVWXYZ';
declare return_str varchar(255) default '';
declare i int default 0;
while i < n do
set return_str = concat(return_str,substring(chars_str,floor(1+rand()*52),1));
set i = i + 1;
end while;
return return_str;
end $$


#创建自动生成部门号
create function rand_num() 
returns int(5) 
begin
declare i int default 0;
set i = floor(10+rand()*500);
return i;
end $$

#创建自动生成插入SQL语句函数
create procedure insert_emp(in start int(10),in max_num int(10)) 
begin 
declare i int default 0;
set autocommit = 0;
repeat 
set i = i + 1;
insert into emp values((start+i),rand_string(6),'SALESMAN',0001,curdate(),2000,400,rand_num());
until i = max_num 
end repeat;
commit;
end $$


#调用存储过程函数
call insert_emp(100001,8000000)$$