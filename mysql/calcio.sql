CREATE Database IF NOT EXISTS Calcio;
USE Calcio;


-- Creazione della tabella "Libri"
CREATE TABLE IF NOT EXISTS Libri (
    ISBN VARCHAR(13) PRIMARY KEY,
    Titolo VARCHAR(100),
    Autore VARCHAR(50),
    AnnoPubblicazione INT,
    QuantitaInMagazzino INT
);

CREATE TABLE  IF NOT EXISTS Squadra (
    codice_squadra int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    codice_capitano int
);
SHOW TABLES;

CREATE TABLE Calciatori IF NOT EXISTS
codice_giocatore int AUTO_INCREMENT PRIMARY KEY NOT NULL,
cognome varchar, 
ruolo int,
stipendio int,
data_nascita date,
codice_voto int,
codice_capitano int,


CREATE TABLE Valutazioni IF NOT EXISTS 
codice_voto int AUTO_INCREMENT PRIMARY KEY NOT NULL, 
voto int,
data_partita int,
FOREIGN KEY(codice_voto(FK))REFERENCES(codice_giocatore(PK)),
