--CREATE DATABASE care_guide;
--USE care_guide

-- Criando a tabela users
CREATE TABLE `user` (
  `id` integer AUTO_INCREMENT primary key NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
)

-- Criando a tabela users adm
CREATE TABLE `user_adm` (
  `id_adm` integer AUTO_INCREMENT primary key NOT NULL,
  `email_adm` varchar(40) DEFAULT NULL,
  `password_adm` varchar(32) DEFAULT NULL,
  `access_code` varchar(32) DEFAULT NULL
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

INSERT INTO care_guide.user_adm ("email_adm", "password_adm", "access_code") VALUES ("alex@gmail.com", "123", "123");

-- Criando a tabela reference
CREATE TABLE reference (
  `id_ref` integer PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `position` varchar(40) DEFAULT NULL,
  `about` TEXT,
  `facebook` varchar(40) DEFAULT NULL,
  `instagram` varchar(40) DEFAULT NULL,
  `youtube` varchar(40) DEFAULT NULL,
  `site` varchar(40) DEFAULT NULL,
  `user_adm` integer DEFAULT NULL,
  FOREIGN KEY (user_adm) REFERENCES user_adm(id_adm)
)
