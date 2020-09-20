--TABLE CARS
CREATE TABLE CARS(
  id int(10) UNSIGNED NOT NULL,
  marque varchar(255) NOT NULL,
  modele varchar(255) NOT NULL,
  serie varchar(255) NOT NULL,
  fabricant varchar(255) NOT NULL,
  couleur varchar(100) NOT NULL,
  contenance varchar(50) NOT NULL,
  chaises int(11) NOT NULL,
  matricule varchar(255) NOT NULL,
  vitesse_max varchar(10) NOT NULL,
  transmission varchar(50) NOT NULL,
  acceleration varchar(10) NOT NULL,
  puissance_moteur varchar(10) NOT NULL,
  disponible varchar(10) NOT NULL,
  price int(10) not null
);
