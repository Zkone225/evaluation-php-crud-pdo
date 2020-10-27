-- creation de la base de données

CREATE DATABASE if not EXISTS dawm-asnieres;

-- creation table employés
create table employes (
	id 	int(5) AUTO_INCREMENT  PRIMARY KEY,
	prenom      varchar(30) not null,
    date_de_naissance       date not null,
    fonction		varchar(30) not null,
    email  varchar(45) not null,
    salaire int (7)
)ENGINE=InnoDB;

-- insertion de données dans la table employes

insert into employes (prenom, date_de_naissance, fonction, email, salaire) values
('John','2000-09-27','Ag Adm','john@yahoo.com','38000'),
('Elija','1960-12-30','PDG','elija@yahoo.com','300000'),
('Marco','1969-04-12','Dir Fn','marco@yahoo.com','108000'),
('Julia','2000-05-25','Ag Com','julia@yahoo.com','58000'),
('Eric','1988-11-23','Ag Adm','eric@yahoo.com','40000'),
('Zack','1989-07-27','Inf','zack@yahoo.com','78000'),
('Enock','1980-10-09','DRH','enock@yahoo.com','38000'),
('Sabina','1991-12-02','dir com','sabina@yahoo.com','100000'),
('Amy','1994-16-02','comp','amy@yahoo.com','88000'),
('Ibra','1993-10-25','ouv','ibra@yahoo.com','38000'),
('Emmanuel','1998','ag fin','emmanuel@yahoo.com','78000'),
('Aziz','1985-11-22','chauf','aziz@yahoo.com','30000'),
('Benis','1999-05-05','secr','benis@yahoo.com','32000');




