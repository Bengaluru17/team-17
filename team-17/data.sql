create table student(
   id int PRIMARY KEY AUTO_INCREMENT,
  name varchar(20) NOT NULL,
  gender varchar(10) NOT NULL,
  dob varchar(15) , 
  age  int NOT NULL ,
  description varchar(200) ) ;

insert into student (name, gender,dob,age,description ) values ('ravi','male','26-04-2016',25,'good student') ;

 
create table staff(
   sid int PRIMARY KEY AUTO_INCREMENT,
  sname varchar(20) NOT NULL,
  sgender varchar(10) NOT NULL,
  sdob varchar(15) , 
  sage  int NOT NULL ,
  ssal int NOT NULL  ,
  sdepert int NOT NULL ) ;

insert into staff ( sname, sgender,sdob,sage,ssal,sdepert ) values ('ravi','male','26-04-2016',25,2500,1) ;

insert into staff ( sname, sgender,sdob,sage,ssal,sdepert ) values ('$name','$gender','$dob',$sal,$dep)


echo "$name \n";
echo "$email \n";
echo "$pnum \n";
echo "$Amt \n";
echo "$Addr \n";
echo "$ACCno \n";
echo "$comment \n";

create table donor (
  donorid varchar(20) NOT NULL PRIMARY KEY,
  dname varchar(30) NOT NULL,
  demail varchar(40) NOT NULL ,
  dpnum varchar(10) NOT NULL ,
  dAddr varchar(50) NOT NULL ,
  deAMT LONG NOT NULL ,
  deACC varchar(20) NOT NULL ,
  dmonyr varchar(10) ,
  decomment varchar(150) 

);

insert into donor ( donorid, dname , demail , dpnum, dAddr,deAMT, deACC,  dmonyr ,decomment ) values ( '$id' ,'$name', '$email' ,'$pnum','$Addr','$Amt ' ,'$ACCno','$comment') ;

insert into donor ( donorid, dname , demail , dpnum, dAddr,deAMT, deACC, decomment ) values ( '$id' ,'$name', '$email' ,'$pnum','$Addr','$Amt ' ,'$ACCno','$comment') ;



kitchen - 1
girls hostel - 2
boys hoste - 3

create table paid(
  pid INT NOT NULL ,
  pname varchar(30) NOT NULL,
  pdate varchar(40) NOT NULL ,
  pdep INT NOT NULL ,
  pmonyr varchar(10) ,
  pAMT INT(8) NOT NULL 

);

insert into paid values (4,'vegetables','09-07-2017',2,300) ;

create table request (
  rid int PRIMARY KEY AUTO_INCREMENT,
  rname varchar(30) NOT NULL,
  rdate varchar(40) NOT NULL ,
  rdep INT NOT NULL ,
  pmonyr varchar(10) ,
  rAMT INT(8) NOT NULL 

);

insert into request (rname,rdate,rdep,pmonyr,rAMT)values ('veg','27-07-2016',1, '072016',200) ;


CREATE TRIGGER del_rid AFTER INSERT ON paid
    FOR EACH ROW
    BEGIN
       delete from request where  request.rid = new.pid ;
    END;//

CREATE TRIGGER create_pid AFTER DELETE ON request
    FOR EACH ROW
    BEGIN
       insert into paid values (old.rid, old.rname,old.rdate,old.rdep, old.pmonyr,old.rAMT) ;
    END;//
