-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `shots`;
CREATE TABLE `shots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url_code` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shot_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2019-03-03 16:26:10
