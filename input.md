# testdb 생성
```
create database testdb;
```
# testdb 실행
```
use testdb;
```
# ch-01 테이블 설계
```
create table student(
	no int,
    name varchar(10),
    kor int,
    eng int,
    math int
);
```
# ch-02 1-1 테이블 설계
```
create table car(
	no int auto_increment primary key
    ,name varchar(20)
    ,address varchar(20)
    ,tel varchar(20)
    ,email varchar(20)
    ,job varchar(20)
    ,salary varchar(20)
    ,model varchar(20)
    ,year varchar(10)
    ,remark varchar(10)
);
```
# ch-02 1-2 테이블 설계
```
create table customers(
	no int auto_increment primary key,
	name varchar(10),
    id varchar(20),
    addr varchar(20),
    tel varchar(20),
    email varchar(20)
);

create table books(
	no int auto_increment primary key,
	name varchar(10),
    company varchar(20),
    price varchar(20),
    genre varchar(20),
    count varchar(20)
);
```
# ch-03 테이블 설계
```
create table person(
	no int auto_increment primary key,
	name varchar(10),
    position varchar(20),
    salary int,
    overtime int,
    overtimepay int,
    total int
);
```
# ch-04 1-1 테이블 설계
```
create table orders(
	no int auto_increment primary key,
    menu varchar(20),
    count int
);

create table foods(
	name varchar(10)
);

insert into foods values("짜장면");
insert into foods values("짬뽕");
insert into foods values("탕수육");
```
# ch-04 1-2 테이블 설계
```
create table vote(
	no int auto_increment primary key,
    name varchar(10),
    cause text
);

create table candidate(
	name varchar(10)
);

insert into candidate values("문재인");
insert into candidate values("홍준표");
insert into candidate values("안철수");
```
# ch-05 테이블 설계
```
create table charges(
	no int auto_increment primary key,
    name varchar(10),
    addr varchar(20),
    employ int,
    fee char(1),
    sum int
);

create table fees(
	target char(1)
);

insert into fees values("Y");
insert into fees values("N");
```
# ch-06 테이블 설계
```
create table manager(
	id varchar(10),
    pw varchar(10)
);

insert into manager values("admin", "1234");
```
# ch-07 테이블 설계
```
create table guest(
	no int auto_increment primary key,
    writer varchar(10),
    content varchar(50),
    writeday varchar(10),
    hit int default 0
);

create table reply(
	no int auto_increment primary key,
    writer varchar(10),
    content varchar(50),
    writeday varchar(10),
    guest_no int
);

alter table reply add constraint fk_guest_no foreign key(guest_no) references guest(no);
```