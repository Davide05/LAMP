CREATE DATABASE videoteca_hu;
USE videoteca_hu;

DROP TABLE attore;
CREATE TABLE attore (
    ID_attore int not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(20) not null,
    cognome varchar(20) not null,
    DATA_nascita date
);

DROP TABLE film;
CREATE TABLE film (
    ID_film int not null AUTO_INCREMENT PRIMARY KEY,
    nome_film varchar(20) not null,
    genere varchar(65)not null
);

DROP TABLE contratto;
CREATE TABLE contratto (
	ID_attore int NOT null ,
    ID_film int NOT null, 
    FOREIGN KEY (ID_attore)REFERENCES attore(ID_attore),
    FOREIGN KEY (ID_film)REFERENCES film(ID_film)
);

SHOW TABLES;

-- Inseriamo i dati