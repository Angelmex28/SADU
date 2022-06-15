/*{------------------------------------------------------------------------
|  MySQL Database Backup DumpDB
|
|  Host: localhost    Database: compartir_documentos    CreateAt: 2022-06-14 19:34:33
|
|  Server: version 10.4.24-MariaDB
|
|  Author of DumpDB: < gil_yeung@outlook.com > Gilberto Villarreal Rodriguez 
*-------------------------------------------------------------------------}*/
 

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;


-- ================================== BEGIN DATABASE compartir_documentos =======================================
-- DROP DATABASE IF EXISTS `compartir_documentos`;
-- CREATE DATABASE `compartir_documentos`;
-- USE `compartir_documentos`;

-- DROP TABLE tablename1, tablename2, tablename3, tablename4;


-- ----------------------------
-- Table structure for documents
-- ----------------------------
 
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `file_json` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
 
-- ----------------------------
-- Records for table documents
-- ----------------------------
 
INSERT INTO `documents` (`id`,`title`,`description`,`file_json`,`user_id`,`date_created`) VALUES
('3','Este es un super documento de prueba','Se puede escribir y adjunta como si fuera un correo sin problema.','[\"1632264840_1.pdf\",\"1632264840_3.pdf\",\"1632264840_2.pdf\"]','1','2021-09-21 17:55:03'),
('4','Prueba 1','n1','[\"1655249340_Lineamientos Uptntms.pdf\"]','3','2022-06-14 19:29:40');

-- ----------------------------
-- Table structure for users
-- ----------------------------
 
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Admin,2= users',
  `avatar` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
 
-- ----------------------------
-- Records for table users
-- ----------------------------
 
INSERT INTO `users` (`id`,`firstname`,`lastname`,`middlename`,`contact`,`address`,`email`,`password`,`type`,`avatar`,`date_created`) VALUES
('3','Administrador','','','04268274205','8331','juanacosta@gmail.com','81dc9bdb52d04dc20036dbd8313ed055','1','1655246340_logo sadu.jpg','0000-00-00 00:00:00'),
('11','qwwe','eeeqwe','wewqewqewq','12131312','weqweqe','123@123.com','202cb962ac59075b964b07152d234b70','2','1','0000-00-00 00:00:00'),
('34','juan','acosta','jose','04268274205','calle 13 luis herrera','juan@juan.com','81dc9bdb52d04dc20036dbd8313ed055','2','0','2016-05-22 00:00:00');
/*{}*/
-- ================================== END DATABASE compartir_documentos ========================================

 
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
