CREATE DATABASE  FUT_Champions_Ultimate_Team

SHOW DATABASES

use FUT_Champions_Ultimate_Team

--clubs
CREATE TABLE Club (
    club_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    logo VARCHAR(255) 
);

--nationalites
CREATE TABLE Nationality (
    nationality_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    flag VARCHAR(255) 
);

--joueurs
CREATE TABLE Players (
    player_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    position ENUM('LB', 'RB', 'CB', 'CDM', 'CM', 'LW', 'RW', 'ST') NOT NULL,
    nationality_id INT,
    club_id INT,
    pace INT CHECK (pace BETWEEN 10 AND 99),
    shooting INT CHECK (shooting BETWEEN 10 AND 99),
    passing INT CHECK (passing BETWEEN 10 AND 99),
    dribbling INT CHECK (dribbling BETWEEN 10 AND 99),
    defending INT CHECK (defending BETWEEN 10 AND 99),
    physical INT CHECK (physical BETWEEN 10 AND 99),
    rating INT AS (ROUND((pace + shooting + passing + dribbling + defending + physical) / 6)) STORED,
    FOREIGN KEY (nationality_id) REFERENCES Nationality(nationality_id),
    FOREIGN KEY (club_id) REFERENCES Club(club_id)
);
--gardiens
CREATE TABLE Goalkeeper (
    player_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    position ENUM('GK') DEFAULT 'GK',
    nationality_id INT,
    club_id INT,
    diving INT CHECK (diving BETWEEN 10 AND 99),
    handling INT CHECK (handling BETWEEN 10 AND 99),
    kicking INT CHECK (kicking BETWEEN 10 AND 99),
    reflexes INT CHECK (reflexes BETWEEN 10 AND 99),
    speed INT CHECK (speed BETWEEN 10 AND 99),
    positioning INT CHECK (positioning BETWEEN 10 AND 99),
    rating INT AS (ROUND((diving + handling + kicking + reflexes + speed + positioning) / 6)) STORED,
    FOREIGN KEY (nationality_id) REFERENCES Nationality(nationality_id),
    FOREIGN KEY (club_id) REFERENCES Club(club_id)
);

alter table players
add COLUMN photo VARCHAR(255) after name

alter table goalkeeper
add COLUMN photo VARCHAR(255) after name