CREATE DATABASE IF NOT EXISTS Calcio;
USE Calcio;
-- Creazione della tabella "Squadra"
CREATE TABLE IF NOT EXISTS Squadra (
    nome_squadra VARCHAR(64),
    codice_squadra INT PRIMARY KEY NOT NULL,
    codice_capitano INT
);
SHOW TABLES;

-- Creazione della tabella "Calciatori"
CREATE TABLE IF NOT EXISTS Calciatori (
codice_giocatore int AUTO_INCREMENT PRIMARY KEY NOT NULL,
cognome VARCHAR(64), 
ruolo INT,
stipendio INT,
data_nascita DATE,
codice_voto INT,
codice_capitano INT,
FK_Squadra int,
FOREIGN KEY(FK_Squadra)REFERENCES Squadra(codice_squadra)
);
SHOW TABLES;

-- Creazione della tabella "Valutazioni"
CREATE TABLE IF NOT EXISTS Valutazioni ( 
codice_voto INT AUTO_INCREMENT PRIMARY KEY NOT NULL, 
voto INT,
data_partita INT,
FK_Calciatore int,
FOREIGN KEY(FK_Calciatore)REFERENCES Calciatori(codice_giocatore)
);
SHOW TABLES;

/*
1)modifica il campo calciatori, cambia la variabile di ruolo
ALTER TABLE Calciatori 
CHANGE COLUMN ruolo ruolo VARCHAR(64);

2)inserire istanza nella tabella calciatori
INSERT INTO Calciatori (ruolo)
VALUES ('attaccante');

3) modificare nella tabella calciatori il cognome Rossi con il cognome Bianchi
UPDATE Calciatori
SET cognome='Bianchi'
WHERE cognome='Rossi';

4)cancellare nella tabella quadre l'istanza con nome squadra=Verdi
DELETE FROM Squadra
WHERE nome_squadra='Verdi';