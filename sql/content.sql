--CREATE DATABASE care_guide;
--USE care_guide

-- Criando a tabela users
CREATE TABLE `user` (
  `id` integer AUTO_INCREMENT primary key NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
)

-- Criando tabela de posts
CREATE TABLE `posts` (
  `id` integer PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` TEXT,
  `whatsapp` integer NULL,
  `user` integer DEFAULT NULL,
  FOREIGN KEY (user) REFERENCES user(id)
)

-- Criando a tabela reference
/*CREATE TABLE referencias (
  id_ref integer AUTO_INCREMENT primary key,
  cargo varchar(30),
  sobre varchar(50),
  facebook varchar(50),
  instagram varchar(50),
  youtube varchar(50),
  site varchar(50),
  autor integer,
  FOREIGN KEY (autor) REFERENCES usuarios(id_usuario)
)*/
