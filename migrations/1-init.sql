
CREATE DATABASE `trinity`;
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
(8,	'Mocha',	'A double shot of our available single origin espresso poured over chocolate topped with steam milk',	32),
(9, 'Coffee Tasting', 'More information about our available single origin coffee: Includes one Africano ana one Espresso. Coffee will be black to briing out the coffee character.', 50),
(10, 'Basic coffee education', 'Perfect introduction to the complex world of coffee. Brief history of coffee. Taste two different brweing methods: Choose between chemex, areopress or por over.',90),
(11, 'Tea',	'Please ask us about our available',	28),
(12, 'Ice tea',	'Please ask us about our available selection of home-brewed ice teas',	30),
(13, 'Chai Latte',	'Home brewed chai mixed with steam milk',	30),
(14, 'Matcha Latte',	'An organic matcha powder that is a fine green tea that we mix with steamed milk',	30),
(15, 'Chai Latte',	'Home brewed chai concentrate poured over ice cubes and miced with cold milk',	32),
(16, 'Chai Frappuccino',	'Home brewed chai concentrate blended with vanilla gelato and ice cubes topped with whipped cream',	38),
(17, 'Trinity iced espresso',	'A double shot of our available single origin coffee blended with ice',	25),
(18, 'Trinity cold brew',	'Cold brews coffee that has been brewing for 12-24 hours, full of complex flavours',	29),
(19, 'Mexican Coffee',	'Black Africano spiced with cinnamon and brown sugar topped with whipped cream',	31),
(20, 'Toffee Chocolate Latte',	'A single shot of our available single origin espresso,toffee, Lindt chocolate mixed in with steamed milk and topped with whipped cream',	31),
(21, 'Honey Almond Latte',	'A single shot of our available single origin espresso, mixed with honey, almond and steamed milk',	31),
(22, 'Iced Coconut Latte',	'A single shot of our available single origin espresso, poured over ice cubes mixed with coconut and cold milk',	31),
(23, 'Chocolate Frappuccino',	'A double shot of our available single origin espresso, blended with chocolate and ice cubes',	32),
(24, 'Vanila Frappuccino',	'Vanilla gelato blended with cold milk, ice cubes and topped with whipped cream',	32),
(25, 'Affogato',	'A double shot of our available single espresso poured over vanilla gelato',	32),
(26, 'Knysnas Iced Coffee',	'A double shot of our available single espresso blended in with condensed milk ice cubes and vanilla gelato',	35),
(27, 'Dirty Chai Latte',	'A double shot of our available single espresso with homemade chai concentrate mixed with steamed milk',	35);