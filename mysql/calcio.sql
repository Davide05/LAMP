CREATE Database IF NOT EXISTS Calcio;
USE Calcio;
-- Creazione della tabella "Squadra"
CREATE TABLE  IF NOT EXISTS Squadra (
    codice_squadra INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    codice_capitano INT
);

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

-- Creazione della tabella "Valutazioni"
CREATE TABLE IF NOT EXISTS Valutazioni ( 
codice_voto INT AUTO_INCREMENT PRIMARY KEY NOT NULL, 
voto INT,
data_partita INT,
FK_Calciatore int,
FOREIGN KEY(FK_Calciatore)REFERENCES Calciatori(codice_giocatore)
);
SHOW TABLES;

