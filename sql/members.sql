-- Création du script pour la gestion des membres
-- DDL : création structure
DROP DATABASE IF EXISTS greta60
;

CREATE DATABASE greta60
;

USE greta60
;

CREATE TABLE users(
	uid SMALLINT PRIMARY KEY AUTO_INCREMENT,
	pseudo VARCHAR(20) NOT NULL,
	mail VARCHAR(255) NOT NULL UNIQUE,
	pass VARCHAR(255) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8
;

ALTER TABLE users
	ADD active TINYINT DEFAULT 1
;

-- DML : ajout des données
INSERT INTO users(uid, pseudo, mail, pass, active)
VALUES(1, 'gaston', 'glagaffe@dupuis.be', 'secret123', 0)
;

INSERT INTO users(uid, pseudo, mail, pass, active)
VALUES(2, 'lesly', 'lesly.lodin@baobab-ingenierie.fr', '$ecret_123', 1)
;

-- crypte les mots de passe et mail
UPDATE users SET 
	mail = MD5(CONCAT(MD5(mail), LENGTH(mail))), -- SALT pour complexifier le cryptage
	pass = SHA1(CONCAT(MD5(mail), MD5(pass)))
;

-- Algos de cryptage : MD5, SHA1, etc.
SELECT MD5('$ecret_123')
;

SELECT *
FROM users
;

SHOW TABLES
;