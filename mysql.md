# MySQL 용어 정리
### 컬럼(Column)
```
1. 문자로 시작한다
2. 30자 이내로 지정 가능하다
3. 영문, 숫자, _, $, #만 사용한다.
4. 테이블명은 데이터베이스(스키마) 안에서 중복되면 안된다
5. 테이블 안에서 컬럼명이 중복되지 않게 한다
6. 예약어는 사용 불가능 하다
7. 대소문자를 구별하지 않는다
8. 생성할 때 입력한 문자와 관계없이 대문자로 정의된다
9. 테이블 이름은 딕셔너리에 저장되고, 모두 대문자로 저장된다.
```
### 제약조건(Constraints)
```
1. AUTO_INCREMENT 새로 데이터가 추가될때마다 값이 자동 증가한다
2. PRIMARY KEY 중복된값 과 NULL 값이 들어갈 수 없음, 다른 테이블에서 식별가능, 정수형에 사용 권장
3. FOREIGN KEY 다른 테이블의 PRIMARY KEY를 참조한다, 참조할 다른 테이블 컬럼과 데이터타입이 같아야 한다
4. NOT NULL 무조건 값이 들어가야한다
5. DEFAULT 입력값이 없을때 기본 입력 값을 정의한다
6. 값을 지정하지 않으면 NULL 값이 저장된다
7. NULL과 NONE은 둘다 값이 없다
8. NULL은 수식 계산이 불가능함 에러도 발생 할 수 있고, NONE은 수식 계산이 가능하다
```
### 데이터타입(Data Type)
###### money, date, time 등 더 많이 있지만 자주 사용하는 데이터타입만 입력했습니다.
|이름|종류|설명|
|:--:|:--:|:--:|
|int|숫자형|연산 가능한 정수형 데이터|
|float|숫자형|연산 가능한 실수형 데이터|
|char()|문자형|변동 불가능한 문자형, ()안에 길이 입력, 지정한 길이보다 크거나 작게 입력 불가능|
|varchar()|문자형|변동 가능한 문자형, ()안에 길이 입력, 지정한 길이 안에서 자유롭게 입력가능|
|text|긴문자형|영문기준 8000자 이상 입력 가능한 문자형|
***
### DB(Database) 만들기
```
create database 데이터베이스명;
```
### 데이터베이스 목록 출력하기
```
show databases;
```
### 데이터베이스 사용하기
```
use 데이터베이스명; 
```
***
### 테이블 만들기 
```
create table 테이블명(
    컬럼명 데이터타입 조건;
);
```
### 테이블 컬럼 목록 출력하기
```
desc 테이블명;
```
### 테이블 삭제하기
```
drop table 테이블명;
```
***
### 테이블에 입력한 데이터 전체 출력하기
```
select * from 테이블명
```
### 테이블에 입력한 데이터 조건을 추가해서 출력하기
```
select 출력할 컬럼명 from 테이블명;
select * from 테이블명 where 컬럼명=컬럼값;
select 같은값을 찾을 숫자형 컬럼명 from 테이블명 where 컬럼명 = 찾을 숫자값;
select 연산할 숫자형 컬럼명 from 테이블명 where 컬럼명 >= 연산할 숫자값;
select 특정문자를 찾을 문자형 컬럼명 from 테이블명 where 컬럼명 like '찾을 문자값%';
select 숫자형 컬럼명, 문자형 컬럼명 from 테이블명 where 숫자형 컬럼명 >= 숫자값, 문자형 컬럼명 like '%문자값%';
```
### 특정 컬럼명을 특정한 명칭으로 바꿔서 출력하기
```
select 컬럼명 as 출력할 컬럼명 from 테이블명;
```
### 테이블 안에 데이터 입력하기
```
insert into 테이블명 (컬럼명1, 컬럼명2...) values (컬럼값1, 컬럼값2...);
insert into 테이블명 values (컬럼값1, 컬럼값2, 컬럼값3, 컬럼값4, 컬럼값5);
```
### 테이블 안에 데이터 수정하기
```
update 테이블명 set 수정할 컬럼명=수정할 컬럼값 where PK_컬럼명=수정할 PK_컬럼값;
```
### 테이블 안에 데이터 삭제하기
```
delete from 테이블명 where 컬럼명=삭제할 컬럼값;
```
### 테이블 컬럼 추가하기
```
alter table 테이블명 add column 컬럼명 데이터타입;
```
### 테이블 컬럼 삭제하기
```
alter table 테이블명 drop column 컬럼명;
```
***
### 제약조건 테이블 구조(예시)
```
CREATE TABLE Orders (
    OrderID int PRIMARY KEY,
    OrderNumber int,
    PersonID int
);

CREATE TABLE Persons (
    ID int NOT NULL PRIMARY KEY,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int
);
```
### PK(Primary Key) 제약조건 추가하기
```
ALTER TABLE Persons
ADD PRIMARY KEY (ID);

ALTER TABLE Persons
ADD CONSTRANINT PK_Person PRIMARY KEY (PersonID);
```
### PK 제약조건이 추가된 컬럼의 데이터를 역순으로 전체 출력하기
```
SELECT * FROM Orders ORDER BY PersonID DESC
```
### Persons 테이블의 PK컬럼을 Orders테이블 FK컬럼 추가하기
```
ALTER TABLE Orders
ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

ALTER TABLE Orders
ADD CONSTRAINT FK_PersonOrder
FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);
```
### 컬럼에 추가한 제약조건 삭제하기
```
ALTER TABLE Orders
DROP FOREIGN KEY (PersonID);

ALTER TABLE Orders
DROP CONSTRANINT FK_Orders_PersonID;
```
