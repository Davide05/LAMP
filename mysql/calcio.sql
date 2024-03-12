CREATE DATABASE IF NOT EXISTS Calcio;
USE Calcio;
-- Creazione della tabella "Squadra"
CREATE TABLE IF NOT EXISTS Squadra (
    nome_squadra VARCHAR(64) NOT NULL,
    codice_squadra INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
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

5)produrre un elenco con i cognomi di tutti i calciatori aventi stipendio>10.000 oridnato su cognome
SELECT cognome 
FROM calciatori
WHERE stipendio>10.000
ORDER BY cognome;

6)visualizzare tuitte le informazioni dei calciatori che ricoporono ruolo 'terzino' oi 'portiere'
SELECT * 
FROM calciatori
WHERE ruolo='terzino'or'portiere';

7)visualzzare cognome di tutti i calciatori la cui lettera 2 del cognome è 'a' e lultima lettera è 'o'
SELECT cognome
FROM calciatori
WHERE cognome like '_a%o';

8)produrre elenco con i cognomi dei calciatori seguiti dal nome della loro sqaudra solo per le squadre Napoli, Bologna, Verona (join con where)
9)visualizzare qaunti calciatori sono nati prima del 2000
10)visulaizzare solo una volta in rodijne crescente tutti i voti nella tabella valutazioni
11)visualizzare il voto più alto, più basso e la media di tutti i voti della tabella valutazioni
12)per ogni calciatore visulazziare il cognome seguito dal voto massimo, dal voto minimo e dalla media dei voti e da qaunti voti ha ottenuto nelle partite che ha disputato
13)visualizzare il cognome di ogni giocatore seguito dal cognome del suo capitano
14)visualizzare i nomi delle sqaudre che non hanno calciatori
*/