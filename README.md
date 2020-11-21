# 사용방법
```
1. php 개발환경을 구축한다
2. 코드를 다운받고 C:/Apache24/htdocs 로 폴더를 이동한다
3. 브라우저에 localhost/폴더명/hello.php 를 실행해서 Hello PHP가 출력되나 확인한다
4. input.md 를 참조하여 데이터 베이스 구축한다
5. mysql.md 는 간단하고 사용했던 내용들을 설명한 문서이며 첫 입문자면 참고한다
5. JavaScript 의 window.history 객체를 사용한 페이지는 새로고침 해서 확인한다
```
# PHP란 무엇인가?
" PHP: Hypertext Preprocessor"의 약자 인 PHP 는 널리 사용되는 오픈 소스 범용 스크립팅 언어로 웹 개발에 특히 적합하며 HTML에 포함 할 수 있습니다. 구문은 C, Java 및 Perl을 기반으로하며 배우기 쉽습니다. 이 언어의 주요 목표는 웹 개발자가 동적으로 생성 된 웹 페이지를 빠르게 작성할 수 있도록하는 것이지만 PHP로 훨씬 더 많은 작업을 수행 할 수 있습니다.
# APM란 무엇인가?
Apache + PHP + MySQL 의 줄임말이다. APM 소프트웨어가 존재하는 것이 아니라, 이 3가지가 연동되어 운영되도록 만든 환경을 APM이라고 한다. Apache와 MySQL이 PHP와 호환성이 좋기 때문에 주로 세 프로그램을 묶어 패키지 형태로 사용한다.
***
## 다운로드 링크
* [Apache](https://www.apachelounge.com/download/) - 운영체제 비트에 맞춰서 zip 다운
* [PHP](https://windows.php.net/download) - Thread Safe 쪽 zip 다운 
* [MySQL](https://dev.mysql.com/downloads/installer/) - 두가지 중 용량이 큰 풀버전 다운로드 클릭후 No thanks, just start my download.
***
## 설치 참고사항
* 각 프로그램은 버전 업그레이드 되면서 새로운 기능들이 추가되서 현재 문서에 적힌내용과 다를수 있다
* 버전이 업그레이드 되고 추가된 기능들은 무슨기능을 하고 어떻게 설치해야 될지는 검색해서 참고
* 현재 문서내용의 설치 버전
    * Apache 버전 : 2.4.46
    * PHP 버전 : 7.4(7.4.12)
    * MySQL 버전 : 8.0.22
### MySQL 설치
```
1. 기본값 설정으로 설치 권장
2. Choosing a Setup Type 에서 Developer Default 체크 후 Next
3. Check Requirements 에서 Execute 이후 Next
4. High Availability 에서 Standalone MySQL Server 체크 후 Next
5. Authentication Method 에서 Use Strong Password 체크 후 Next
6. Accounts and Roles 에서 루트 비밀번호, 비밀번호 확인 입력 후 Next
7. Connect To Server 에서 루트 비밀번호 Check 후 Next
8. Installation Complete 체크 풀고 Finish
```
### Apache 설치
```
1. 다운받은 zip 폴더 압축 해제 
2. httpd-2.4.46- 폴더 안에 있는 Apache24만 C드라이브로 이동(예시 - C:/Apache24)
```
### PHP 설치
```
1. 다운받은 zip 폴더 압축 해제
2. php-7.4.12- 폴더를 php로 이름변경 후 C드라이브 이동(예시 - C:/php)
```
***
## 설정 참고사항
* Alt + F 검색 활용
* 메모장 혹은 코드 에디터(IDE)로 파일 열어서 수정
* 설정파일에서 사용중인 주석 httpd.conf 에서 #, php.ini 에서 ;
* 똑같은 문자 많이나와서 수정 혹은 주석삭제 할때 주의

### Apache 설정
    1. Apache24\conf\httpd.conf 열기
    2. Define SRVROOT 아파치 설치경로 입력(예시 - Define SRVROOT "C:/Apache24")
    3. ServerAdmin E-mail 주소 입력(예시 - ServerAdmin example@domain.com)
    4. 환경변수 > 시스템변수 > path > 새로 만들기 > C:\Apache24\bin 추가
    5. 관리자 권한으로 명령 프롬프트 실행
    6. httpd.exe -k install 입력
    7. httpd.exe -k start 입력
    8. 브라우저 주소창에 localhost 혹은 127.0.0.1 입력 
    9. It works! 출력되면 설정 끝

### PHP 설정
    1. php-ini-production 복사본 만들고 php.ini로 이름 바꾸고 열기
    2. extension_dir 을 php 설치경로\ext 입력(예시 - extension_dir = "C:/php/ext")
    3. ;extension=mysqli 주석 제거
    4. date.timezone 에 "Asia/Seoul" 입력
    4. 관리자 권한으로 명령 프롬프트 실행
    5. httpd.exe -k restart 입력
    6. C:/Apache24/htdocs 안에 info.php 저장
    7. 브라우저 주소창에 localhost/info.php 혹은 127.0.0.1/info.php 입력
    8. php 정보가 출력되면 설정 끝
***
###### Apache 에러 디버깅
    C:\Apache24\conf\httpd.conf 파일 맨 마지막에 아래 문장 추가

    # PHP
    LoadModule php7_module "C:/php/php7apache2_4.dll"
    AddType application/x-httpd-php .php .html
    AddHandler application/x-httpd-php .php .html

    # configure the path to php.ini
    PHPIniDir "C:/php" 

###### MySQL 에러 디버깅
    1. 설치 후 첫 실행, 명령어 mysql -u root -p
    2. 에러발생 MySQL ERROR 1045 (28000): Access denied for user 'root'@'localhost' (using password: YES)
    3. 비밀번호 변경 update user set authentication_string=password('변경할비밀번호') where user='root';
    4. Workbench 으로 실행시 연결 안됨 에러메세지 mysql workbench has encountered a problem
    5. 하지만 명령 프롬프트에선 연결이 성공함
    6. 다시 Workbench 실행 후 메뉴 DataBase 에서 Connect to DataBase 로 접속 성공