CREATE DATABASE ayuracharya;
USE ayuracharya;

CREATE TABLE disease
(
	did int auto_increment primary key,
    dname varchar(100),
    altnames varchar(500),
    dosha varchar(1000),
    drugs varchar(2000),
    exceptions varchar(2000),
    contraindications varchar(2000),
    medium varchar(100),
    ingredients varchar(2000),
    pharm_prop varchar(2000),
    reference varchar(2000)
);

CREATE TABLE symptom
(
	sid int auto_increment primary key,
    sname varchar(300)
);

CREATE TABLE dis_sym
(
	did int,
    sid int,
    
    foreign key (did) references disease(did),
    foreign key (sid) references symptom(sid)
);