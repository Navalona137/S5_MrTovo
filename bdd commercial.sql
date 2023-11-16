CREATE DATABASE commercial;


CREATE TABLE service (
  id VARCHAR(10) PRIMARY KEY,
  nom VARCHAR(20) DEFAULT NULL
);

CREATE TABLE nature (
  id VARCHAR(10) PRIMARY KEY,
  nom VARCHAR(100) DEFAULT NULL
);

CREATE TABLE personne (
  id VARCHAR(10) PRIMARY KEY,
  nom VARCHAR(50) DEFAULT NULL,
  prenom VARCHAR(50) DEFAULT NULL,
  dtn DATE DEFAULT NULL,
  genre INT DEFAULT NULL --Homme(1) Femme(2)
);

CREATE TABLE membre (
  id VARCHAR(10) PRIMARY KEY,
  idPersonne VARCHAR(10) NOT NULL,
  idService VARCHAR(10) NOT NULL,
  email VARCHAR(70) DEFAULT NULL,
  mdp VARCHAR(50) DEFAULT NULL,
  FOREIGN KEY (idPersonne) REFERENCES personne(id),
  FOREIGN KEY (idService) REFERENCES service(id)
);

CREATE TABLE article (
  id VARCHAR(10) PRIMARY KEY,
  idNature VARCHAR(10) NOT NULL,
  nom VARCHAR(70) DEFAULT NULL,
  FOREIGN KEY (idNature) REFERENCES nature(id)
);

CREATE TABLE besoinAchat (
  id VARCHAR(10) PRIMARY KEY,
  idService VARCHAR(10) NOT NULL,
  idMembre VARCHAR(10) NOT NULL, --ilay nanao an'ilay demande ana besoin
  idArticle VARCHAR(10) NOT NULL,
  quantite INT DEFAULT NULL,
  dates DATE DEFAULT NULL,
  etat INT DEFAULT NULL, -- attente(1) accepté(2) refusé(3) 
  FOREIGN KEY (idService) REFERENCES service(id),
  FOREIGN KEY (idMembre) REFERENCES membre(id),
  FOREIGN KEY (idArticle) REFERENCES article(id)
);

INSERT INTO service (id, nom) VALUES
('S00001', 'informatique'),
('S00002', 'finance');

INSERT INTO nature (id, nom) VALUES
('N00001', 'Materiel bureautique'),
('N00002', 'Equipement informatique'),
('N00003', 'Fournitures de nettoyage'),
('N00004', 'Mobiliers de bureau');

INSERT INTO personne (id, nom, prenom, dtn, genre) VALUES
('PERS00001', 'Rakoto', 'Jean', '1999-02-15', 1),
('PERS00002', 'Andria', 'Malala', '2000-11-22', 2);

INSERT INTO membre (id, idPersonne, idService, email, mdp) VALUES
('MBR00001', 'PERS00001', 'S00002', 'rakoto@gmail.com', '0000'),
('MBR00002', 'PERS00002', 'S00001', 'andria@gmail.com', '0000');

INSERT INTO article (id, idNature, nom) VALUES
('A00001', 'N00001', 'Stylo'),
('A00002', 'N00001', 'Papier'),
('A00003', 'N00002', 'Ordinateur'),
('A00004', 'N00003', 'Bac a ordure');

INSERT INTO besoinAchat (id, idService, idMembre, idArticle, quantite, dates, etat) VALUES
('BA00001', 'S00001', 'MBR00001', 'A00001', 10, '2023-11-14', 1),
('BA00002', 'S00001', 'MBR00001', 'A00003', 1, '2023-11-14', 1);
