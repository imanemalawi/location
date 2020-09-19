
-- TABLE CARS-----...............................................................................................................................................
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
