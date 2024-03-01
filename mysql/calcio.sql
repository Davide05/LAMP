CREATE Database IF NOT EXISTS Calcio;
USE Calcio;
-- Creazione della tabella "Squadra"
CREATE TABLE  IF NOT EXISTS Squadra (
    codice_squadra int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    codice_capitano int
);
SHOW TABLES;

-- Creazione della tabella "Calciatori"
CREATE TABLE IF NOT EXISTS Calciatori (
codice_giocatore int AUTO_INCREMENT PRIMARY KEY NOT NULL,
cognome varchar, 
ruolo int,
stipendio int,
data_nascita date,
codice_voto int,
codice_capitano int,
);
SHOW TABLES;

-- Creazione della tabella "Valutazioni"
CREATE TABLE IF NOT EXISTS Valutazioni ( 
codice_voto int AUTO_INCREMENT PRIMARY KEY NOT NULL, 
voto int,
data_partita int,
FOREIGN KEY(codice_voto(FK))REFERENCES(codice_giocatore(PK)),
);
SHOW TABLES;