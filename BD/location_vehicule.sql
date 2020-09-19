
-- TABLE CARS
CREATE TABLE CARS(
  `id` int(10) UNSIGNED NOT NULL,
  `marque` varchar(255) NOT NULL,
  `modele` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `fabricant` varchar(255) NOT NULL,
  `couleur` varchar(100) NOT NULL,
  `contenance` varchar(50) NOT NULL,
  `chaises` int(11) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `vitesse_max` varchar(10) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `acceleration` varchar(10) NOT NULL,
  `puissance_moteur` varchar(10) NOT NULL,
  `disponible` varchar(10) NOT NULL,
  price int(10) not null

);

-- TABLE USERS
CREATE TABLE USERS(
  ID INT(10) UNSIGNED NOT NULL PRIMARY KEY,
  NOM VARCHAR(255) NOT NULL,
  PRENOM VARCHAR(255) NOT NULL,
  EMAIL VARCHAR(255) NOT NULL,
  TEL VARCHAR(255) NOT NULL,
  RANK VARCHAR(255) NOT NULL
);

-- TABLE RESERVATIONS
CREATE TABLE RESERVATIONS(
  ID INT(10) UNSIGNED NOT NULL PRIMARY KEY,
  CAR_ID INT(10) UNSIGNED NOT NULL,
  DATE_DEBUT DATETIME NOT NULL,
  DATE_FIN DATETIME NOT NULL,
  VILLE_DEBUT VARCHAR(255) NOT NULL,
  VILLE_FIN VARCHAR(255) NOT NULL,
  NOM VARCHAR(255) NOT NULL,
  PRENOM VARCHAR(255) NOT NULL,
  TEL VARCHAR(255) NOT NULL,
  EMAIL VARCHAR(255) NOT NULL,
  STATUT VARCHAR(255) NOT NULL,
  AGE INT(10)
);

--insertion cars
INSERT INTO `cars` 
(`id`, `marque`, `modele`, `serie`, `fabricant`, `couleur`, `contenance`, `chaises`, `matricule`, `vitesse_max`, `transmission`, `acceleration`, `puissance_moteur`, `disponible`, `price`)
VALUES 
('3', 'renault', 'clio', '45DDFEB', 'renault', 'noir', '200 Litres', '5', '12345/a/40', '180 km/h', 'manuel', '100', '100', 'oui', 4000000 ),
 ('4', 'fiat', 'tipo', '78ASCV', 'fiat', 'noir', '350 Litres', '6', '124598/a/40', '250 km/h', 'manuel', '150', '300', 'oui', 45000000),
 ('5', 'renault', 'mega', '602QCD22', 'renault', 'noir', '205 Litres', '4', '12223/a/40', '180 km/h', 'manuel', '100', '100', 'oui', 7000000),
 ('6', 'volkswagen', 'golf 7', '885EET22D', 'volkswagen', 'noir', '240 Litres', '4', '77885/a/40', '280 km/h', 'manuel', '100', '100', 'oui', 3000000),
 ('7', 'renault', 'capture', '420QSS0', 'renault', 'noir', '200 Litres', '5', '169557/a/40', '330 km/h', 'manuel', '100', '100', 'oui', 6500000 ),
 ('8', 'seat', 'leon', '4966DEB', 'renault', 'noir', '200 Litres', '5', '12958/a/40', '310 km/h', 'manuel', '100', '300', 'oui', 4590000),
 ('9', 'renault', 'clio', '45S6S66', 'renault', 'blanche', '200 Litres', '4', '12980/a/40', '190 km/h', 'manuel', '100', '190', 'oui',8900000),
 ('10', 'volkswagen', 'glof 7', '457AQDDX8', 'volkswagen', 'blanche', '270 Litres', '6', '12555/a/40', '280 km/h', 'manuel', '100', '100', 'oui',7990000);
 
 --insertion reservation
 INSERT INTO `reservations` 
 (`ID`, `CAR_ID`, `DATE_DEBUT`, `DATE_FIN`, `VILLE_DEBUT`, `VILLE_FIN`, `NOM`, `PRENOM`, `TEL`, `EMAIL`, `STATUT`, `AGE`)
 VALUES 
 ('1', '3', SYSDATE(), SYSDATE(), 'TANGER', 'TANGER', 'DAHCHAR', 'MOHAMMED SAID', '0612345678', 'said@gmail.com', '.', '23'),
 ('2', '5', '2020-09-01 00:00:00', '2020-10-01 00:00:00', 'CASABLANCA', 'CASABLANCA', 'MALAWI', 'IMANE', '0612378945', 'imane@gmail.com', '.', '20');
--insertion users
INSERT INTO `users` (`ID`, `NOM`, `PRENOM`, `EMAIL`, `TEL`, `RANK`) VALUES ('1', 'admin', 'admin', 'admin@gmail.com', '0698765432', '1');
