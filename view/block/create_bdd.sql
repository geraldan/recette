CREATE DATABASE IF NOT EXISTS `cuisine`;

USE `cuisine`;

CREATE TABLE `recettes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `plate_name` VARCHAR(255),
  `recette` TEXT,
  `ingredient` TEXT,
  `requirement` TEXT,
  PRIMARY KEY (`id`)
);

CREATE TABLE `verifs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `plate_name` VARCHAR(255),
  `recette` TEXT,
  `ingredient` TEXT,
  `requirement` TEXT,
  PRIMARY KEY (`id`)
);