---------------------------------------------------------------------
-- INSERT
INSERT INTO table ( col1, col2 ) VALUES ('val1', 'val2');
-- SELECT
SELECT * FROM table WHERE col1 = 'val1' AND col2 = 'val2';
-- UPDATE
UPDATE table SET col1 = 'val1', col2 = 'val2' WHERE col3 = 'val1';
-- DELETE
DELETE FROM table WHERE col1 = 'val1';

--CREATE DATABASE care_guide;
--USE care_guide

-- Criando a tabela users
CREATE TABLE `user` (
  `id` integer AUTO_INCREMENT primary key NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
);

-- Criando a tabela users adm
CREATE TABLE `user_adm` (
  `id_adm` integer AUTO_INCREMENT primary key NOT NULL,
  `email_adm` varchar(40) DEFAULT NULL,
  `password_adm` varchar(32) DEFAULT NULL,
  `access_code` varchar(32) DEFAULT NULL
);

-- Criando tabela de posts
CREATE TABLE `posts` (
  `id` integer PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` TEXT,
  `whatsapp` integer NULL,
  `user` integer DEFAULT NULL,
  FOREIGN KEY (user) REFERENCES user(id)
);

INSERT INTO user_adm (email_adm, password_adm, access_code) VALUES ("alex@gmail.com", "123", "123");

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
);

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

DROP TABLE IF EXISTS `instprog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `instprog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

-- Criando a tabela users
CREATE TABLE `user` (
  `id` integer AUTO_INCREMENT primary key NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
);

-------------------------------------------

CREATE DATABASE guia_de_cuidados;

CREATE TABLE IF NOT EXISTS `program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `program` (`id`, `description`) VALUES
(1, 'Amor Exigente'),
(2, 'Igreja São Batista');

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(220) NOT NULL,
  `name_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `address` (`id`, `description`, `name_id`) VALUES
(1, 'Rua do Amor Azul, nº 55', 1),
(2, 'Rua do Samba, nº 55', 1),
(3, 'Rua Macuaba, nº 54', 2),
(4, 'Rua Jorge, nº 54', 2);

--------------------------------------------------------------------
