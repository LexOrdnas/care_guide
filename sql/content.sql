---------------------------------------------------------------------
-- INSERT
INSERT INTO table ( col1, col2 ) VALUES ('val1', 'val2');
-- SELECT
SELECT * FROM table WHERE col1 = 'val1' AND col2 = 'val2';
-- UPDATE
UPDATE table SET col1 = 'val1', col2 = 'val2' WHERE col3 = 'val1';
-- DELETE
DELETE FROM table WHERE col1 = 'val1';
------------------------------------------------------------------------------------------------------------

CREATE DATABASE care_guide;
USE care_guide

-- Criando a tabela users
CREATE TABLE `user` (
  `id` integer AUTO_INCREMENT primary key NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Criando a tabela users adm
CREATE TABLE `user_adm` (
  `id_adm` integer AUTO_INCREMENT primary key NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `email_adm` varchar(40) DEFAULT NULL,
  `password_adm` varchar(32) DEFAULT NULL,
  `access_code` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Criando a tabela reference
CREATE TABLE `reference` (
  `id_ref` integer PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `position` varchar(40) DEFAULT NULL,
  `about` TEXT,
  `facebook` varchar(40) DEFAULT NULL,
  `instagram` varchar(40) DEFAULT NULL,
  `youtube` varchar(40) DEFAULT NULL,
  `site` varchar(40) DEFAULT NULL,
  `user_adm` integer DEFAULT NULL,
  FOREIGN KEY (user_adm) REFERENCES user_adm(id_adm)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `id_adm` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_users`),
  KEY `id` (`id`),
  KEY `id_adm` (`id_adm`),
  CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_adm` FOREIGN KEY (`id_adm`) REFERENCES `user_adm` (`id_adm`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-------------------------------------------

CREATE DATABASE guia_de_cuidados;

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `program` (`id`, `description`) VALUES
(1, 'Amor Exigente'),
(2, 'Igreja São Batista');

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(220) NOT NULL,
  `name_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `address` (`id`, `description`, `name_id`) VALUES
(1, 'Rua do Amor Azul, nº 55', 1),
(2, 'Rua do Samba, nº 55', 1),
(3, 'Rua Macuaba, nº 54', 2),
(4, 'Rua Jorge, nº 54', 2);

--------------------------------------------------------------------

-- Ainda não está em uso
-- Criando tabela de posts
CREATE TABLE `posts` (
  `id` integer PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` TEXT,
  `whatsapp` integer NULL,
  `user` integer DEFAULT NULL,
  FOREIGN KEY (user) REFERENCES user(id)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Criando tabela de posts
CREATE TABLE `data` (
  `id` integer PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
