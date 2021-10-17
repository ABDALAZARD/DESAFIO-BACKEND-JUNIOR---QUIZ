CREATE DATABASE QUIZ;
USE QUIZ;

CREATE TABLE perg(
    idPerg int(10) primary key AUTO_INCREMENT,
    Enunciado text,
    Resp varchar(50)

);


CREATE TABLE resp(
idResp int(10) primary key AUTO_INCREMENT,
Alternativa0 varchar(250),
Alternativa1 varchar(250),
Alternativa2 varchar(250),
Alternativa3 varchar(250),
Alternativa4 varchar(250),
resp int(10),
IdPerg int(10)
);


CREATE TABLE usuario( 
idUser int(10) primary key AUTO_INCREMENT, 
usuario varchar(50) UNIQUE, 
MD5(senha varchar(50)),
pontos int(50),
qtdPerg int(50),
avatar varchar(50)
);


CREATE TABLE recompensa(
    idMeta int(10) primary key AUTO_INCREMENT,
    iduser int(10) UNIQUE,
    meta1 enum('ok', '!ok'),
    meta2 enum('ok', '!ok'),
    meta3 enum('ok', '!ok')
    
    );
