CREATE DATABASE takalo;
USE takalo;


CREATE TABLE Administrateur(
    idAdministrateur INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    email VARCHAR(40),
    mdp VARCHAR(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Utilisateur(
    idUtilisateur INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    email VARCHAR(40),
    mdp VARCHAR(30)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Categorie(
    idCategorie INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    categorie VARCHAR(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Objet(
    idObjet INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    idCategorie INTEGER,
    descriptions VARCHAR(25),
    photo VARCHAR(25),
    prix DECIMAL(9, 2) DEFAULT 0,
    FOREIGN KEY(idCategorie) REFERENCES Categorie(idCategorie)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Proprietaire(
    idUtilisateur INTEGER NOT NULL,
    idObjet INTEGER NOT NULL,
    FOREIGN KEY(idUtilisateur) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY(idObjet) REFERENCES Objet(idObjet)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Demande(
    idDemande  INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    idUtilisateur1 INTEGER NOT NULL,
    idUtilisateur2 INTEGER NOT NULL,
    idObjet1 INTEGER NOT NULL,
    idObjet2 INTEGER NOT NULL,
    FOREIGN KEY(idUtilisateur1) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY(idUtilisateur2) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY(idObjet1) REFERENCES Objet(idObjet),
    FOREIGN KEY(idObjet2) REFERENCES Objet(idObjet)
    on delete cascade
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE ACCEPTATION(
    idDemande  INTEGER NOT NULL,
    idUtilisateur1 INTEGER NOT NULL,
    idUtilisateur2 INTEGER NOT NULL,
    idObjet1 INTEGER NOT NULL,
    idObjet2 INTEGER NOT NULL,
    FOREIGN KEY(idUtilisateur1) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY(idUtilisateur2) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY(idObjet1) REFERENCES Objet(idObjet),
    FOREIGN KEY(idObjet2) REFERENCES Objet(idObjet),
    FOREIGN KEY(idDemande) REFERENCES Demande(idDemande)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Refus(
    idUtilisateur1 INTEGER NOT NULL,
    idUtilisateur2 INTEGER NOT NULL,
    idObjet1 INTEGER NOT NULL,
    idObjet2 INTEGER NOT NULL,
    FOREIGN KEY(idUtilisateur1) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY(idUtilisateur2) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY(idObjet1) REFERENCES Objet(idObjet),
    FOREIGN KEY(idObjet2) REFERENCES Objet(idObjet)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO Administrateur VALUES(NULL, 'Rabenanahary', 'Rojo', 'rojo@gmail.com', 'takalo');
INSERT INTO Utilisateur VALUES(NULL, 'koloina', 'M', 'koloina.mihajatiana@gmail.com', 'koloina');
INSERT INTO Utilisateur VALUES(NULL, 'angoty', 'A', 'angoty@gmail.com', 'angoty');
INSERT INTO Categorie VALUES(NULL, 'Vetements');
INSERT INTO Categorie VALUES(NULL, 'Livres');
INSERT INTO Categorie VALUES(NULL, 'Chaussures');

insert into objet values(null,3,'nike','PHOTO',10.00);
insert into objet values(null,3,'converse','PHOTO',15.00);
insert into objet values(null,1,'robes','PHOTO',100.00);
insert into objet values(null,1,'jupe','PHOTO',20.00);
insert into objet values(null,2,'magasine','PHOTO',60.00);
insert into objet values(null,2,'roman','PHOTO',80.00);
insert into objet values(null,2,'bd','PHOTO',47.00);
insert into objet values(null,1,'pantalon','PHOTO',70.00);


insert into Proprietaire values(1,1);
insert into Proprietaire values(1,2);
insert into Proprietaire values(2,3);
insert into Proprietaire values(2,4);
insert into Proprietaire values(2,5);
insert into Proprietaire values(2,6);
insert into Proprietaire values(2,7);
insert into Proprietaire values(2,8);





