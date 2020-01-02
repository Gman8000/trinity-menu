
CREATE DATABASE `trinity` 
USE `trinity`;

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `product` (`id`, `name`, `description`, `price`) VALUES
(1,	'ESPRESSO',	'Our recipe varies with each single origin to bring out the most flavourful expresso possible',	22),
(2,	'AFRICANO',	'Hot water with a double shot of our available single origin espresso',	23),
(3,	'ESPRESSO MACCHIATO',	'Double shot of our available single origin espresso with a stain of steamed milk',	24),
(4,	'Cortado',	'A stronger double shot of our available single origin espresso with equal partsteamed milk',	24),
(5,	'Flat White',	'A stronger double shot of our available single origin espresso with more steamed milk than foam',	27),
(6,	'Cappuccino',	'A double shot of our available single origin espresso with a third steamed milk topped with a third milk foam',	27),
(7,	'Latte',	'A double shot of our available single origin espresso with more steamed milk and less milk foam',	28),
(8,	'Mocha',	'A double shot of our available single origin espresso poured over chocolate topped with steam milk',	32);
