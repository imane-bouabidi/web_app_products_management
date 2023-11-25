create database if not EXISTS electro_nacer_app;
use electro_nacer_app;
create table if not EXISTS `user`(
	email varchar(20),
    password varchar(20),
    login varchar(20),
    active_account boolean
);


create table if not EXISTS `admin`(
	email varchar(20),
    password varchar(20),
    login varchar(20)
);

create table if not EXISTS `products`(
	  reference varchar(20),
    ettiquette varchar(20),
    code_barre int(20),
    prix_achat float(20),
    prix_final float(20),
    description varchar(20),
    quantité_min float(20),
    quantité_stock int(20),
    offre_prix int(20),
    categorie varchar(20),
    image varchar(20)
);

create table if not EXISTS `categorie`(
	nom varchar(20),
    description varchar(20),
    image varchar(20)
);


ALTER TABLE `products`
  ADD PRIMARY KEY (`reference`),
  ADD UNIQUE KEY `ref_unique` (`reference`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email_unique` (`email`);

  ALTER TABLE `categorie`
  ADD PRIMARY KEY (`nom`),
  ADD UNIQUE KEY `nom_cat` (`nom`);
  
  
ALTER TABLE products
ADD CONSTRAINT fk_categorie_name
FOREIGN KEY (categorie)
REFERENCES categorie(nom);

alter table products 
MODIFY COLUMN reference int(30) AUTO_INCREMENT;