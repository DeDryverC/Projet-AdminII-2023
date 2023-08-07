CREATE TABLE `articles` (
  `id` INT NOT NULL,
  `name` VARCHAR(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` VARCHAR(255) DEFAULT NULL,
  `price` FLOAT DEFAULT NULL,
);


INSERT INTO `woodytoys`.`articles`
(`id`, `name`, `brand`, `price`)
VALUES
(1, 'Tracteur', 'Playmebil', 50.00),(2, 'Voiture Police', 'Playmebil', 44.99),(3, 'Camion Pompier', 'Playmebil', 25.99),(4, 'Maison Fleuriste', 'Lago', 50.00),(5, 'Falcon Millenium', 'Lago', 249.99);
