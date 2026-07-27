-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2026 at 07:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`order_id`, `customer_id`, `product_id`, `product`, `quantity`, `price`) VALUES
(1, 121, 1, 'Squid - Tubes / Tenticles 10/20', 800, 159),
(2, 169, 2, 'Energy Drink - Franks Original', 200, 107),
(3, 85, 3, 'Truffle Cups - White Paper', 1800, 130),
(4, 138, 4, 'Carbonated Water - Blackberry', 1600, 189),
(5, 93, 5, 'Table Cloth 81x81 Colour', 300, 199),
(6, 193, 6, 'Water - San Pellegrino', 1900, 123),
(7, 82, 7, 'Yogurt - Plain', 200, 103),
(8, 10, 8, 'Doilies - 12, Paper', 1700, 167),
(9, 30, 9, 'Beans - Fava Fresh', 800, 105),
(10, 118, 10, 'Pastry - Carrot Muffin - Mini', 200, 136),
(11, 156, 11, 'Marsala - Sperone, Fine, D.o.c.', 1700, 102),
(12, 158, 12, 'Pop - Club Soda Can', 300, 182),
(13, 67, 13, 'Wine - Magnotta - Cab Sauv', 900, 161),
(14, 170, 14, 'Syrup - Monin, Irish Cream', 1400, 173),
(15, 74, 15, 'Croissant, Raw - Mini', 400, 181),
(16, 102, 16, 'Ecolab - Hand Soap Form Antibac', 1700, 168),
(17, 129, 17, 'Beef - Baby, Liver', 1600, 200),
(18, 67, 18, 'Appetizer - Sausage Rolls', 1100, 192),
(19, 198, 19, 'Wiberg Cure', 1200, 106),
(20, 61, 20, 'Ecolab - Hobart Upr Prewash Arm', 1900, 153),
(21, 111, 21, 'Lentils - Red, Dry', 1800, 140),
(22, 111, 22, 'Vodka - Hot, Lnferno', 1700, 200),
(23, 15, 23, 'Durian Fruit', 200, 120),
(24, 88, 24, 'Soup - Clam Chowder, Dry Mix', 100, 199),
(25, 149, 25, 'Orange Roughy 6/8 Oz', 1600, 111),
(26, 102, 26, 'Plums - Red', 400, 172),
(27, 73, 27, 'Potatoes - Idaho 100 Count', 500, 154),
(28, 67, 28, 'Pate - Cognac', 400, 149),
(29, 8, 29, 'Momiji Oroshi Chili Sauce', 1900, 130),
(30, 29, 30, 'Appetizer - Southwestern', 1100, 120),
(31, 30, 31, 'Noodles - Steamed Chow Mein', 1600, 159),
(32, 66, 32, 'Godiva White Chocolate', 1700, 106),
(33, 118, 33, 'Island Oasis - Ice Cream Mix', 400, 110),
(34, 191, 34, 'V8 - Berry Blend', 900, 152),
(35, 160, 35, 'Tea - Camomele', 200, 106),
(36, 186, 36, 'Truffle Cups - Red', 1100, 149),
(37, 96, 37, 'Mushroom - Trumpet, Dry', 1200, 115),
(38, 50, 38, 'Wine - Beaujolais Villages', 1300, 197),
(39, 14, 39, 'Syrup - Monin - Blue Curacao', 1200, 187),
(40, 62, 40, 'Lid Tray - 16in Dome', 900, 114),
(41, 187, 41, 'Cheese Cheddar Processed', 1800, 140),
(42, 43, 42, 'Pepper - Roasted Red', 600, 175),
(43, 200, 43, 'Cheese - Parmesan Grated', 600, 156),
(44, 49, 44, 'Grenadine', 800, 137),
(45, 1, 45, 'Cinnamon - Stick', 400, 181),
(46, 120, 46, 'Wine - White, Pelee Island', 800, 180),
(47, 154, 47, 'Wine - Casablanca Valley', 800, 141),
(48, 43, 48, 'Oil - Truffle, Black', 2000, 140),
(49, 55, 49, 'Wine - Magnotta - Cab Franc', 200, 114),
(50, 136, 50, 'Apricots - Dried', 800, 184),
(51, 111, 51, 'Red Currants', 1000, 119),
(52, 108, 52, 'Bread Base - Italian', 600, 160),
(53, 144, 53, 'Flour - Teff', 1300, 136),
(54, 103, 54, 'Beef - Texas Style Burger', 500, 123),
(55, 139, 55, 'Water - Evian 355 Ml', 2000, 126),
(56, 10, 56, 'Nantucket Cranberry Juice', 800, 146),
(57, 60, 57, 'Cookie Dough - Peanut Butter', 200, 139),
(58, 200, 58, 'Truffle Shells - Semi - Sweet', 1800, 168),
(59, 173, 59, 'Pork - Chop, Frenched', 1900, 164),
(60, 118, 60, 'Neckerchief Blck', 1100, 108),
(61, 89, 61, 'Salmon - Smoked, Sliced', 1500, 170),
(62, 189, 62, 'Chips - Doritos', 1900, 181),
(63, 55, 63, 'Dried Peach', 1400, 168),
(64, 194, 9, 'Beans - Fava Fresh', 300, 100),
(65, 197, 65, 'Wine - Red, Cabernet Merlot', 600, 172),
(66, 103, 66, 'Crackers - Soda / Saltins', 1300, 109),
(67, 49, 67, 'Five Alive Citrus', 400, 128),
(68, 8, 68, 'Cheese - Havarti, Roasted Garlic', 1800, 196),
(69, 22, 69, 'Pepper - Paprika, Hungarian', 900, 108),
(70, 76, 70, 'Berry Brulee', 1100, 142),
(71, 152, 71, 'Lamb - Shanks', 1900, 118),
(72, 88, 72, 'Apricots - Halves', 1000, 173),
(73, 186, 73, 'Coriander - Ground', 900, 165),
(74, 73, 74, 'Yukon Jack', 1700, 123),
(75, 46, 75, 'Pastry - Chocolate Marble Tea', 100, 122),
(76, 126, 76, 'Sloe Gin - Mcguinness', 1400, 141),
(77, 116, 77, 'Squid U5 - Thailand', 2000, 168),
(78, 34, 78, 'Wine - Sicilia Igt Nero Avola', 1100, 180),
(79, 67, 79, 'Potatoes - Fingerling 4 Oz', 1700, 144),
(80, 87, 80, 'Aromat Spice / Seasoning', 1500, 131),
(81, 97, 81, 'Sparkling Wine - Rose, Freixenet', 500, 113),
(82, 22, 82, 'Iced Tea Concentrate', 1900, 129),
(83, 159, 83, 'Garam Masala Powder', 1200, 141),
(84, 65, 84, 'Cheese - Brie, Cups 125g', 500, 200),
(85, 195, 85, 'Quail - Jumbo', 1600, 190),
(86, 75, 86, 'V8 Splash Strawberry Kiwi', 2000, 121),
(87, 178, 87, 'Beans - Fava, Canned', 500, 137),
(88, 79, 88, 'Corn Syrup', 1400, 173),
(89, 175, 89, 'Macaroons - Two Bite Choc', 500, 117),
(90, 36, 90, 'Sugar - Brown', 1600, 181),
(91, 124, 80, 'Aromat Spice / Seasoning', 1100, 170),
(92, 83, 92, 'Milk 2% 500 Ml', 1900, 135),
(93, 11, 93, 'Pastry - Butterscotch Baked', 1200, 184),
(94, 150, 94, 'Chilli Paste, Ginger Garlic', 1800, 114),
(95, 41, 95, 'Soup - Knorr, Classic Can. Chili', 700, 133),
(96, 153, 96, 'Juice Peach Nectar', 1000, 171),
(97, 133, 97, 'Dates', 1100, 130),
(98, 106, 98, 'Sour Puss Raspberry', 2000, 130),
(99, 141, 99, 'Bread - French Baquette', 200, 173),
(100, 181, 100, 'Puree - Blackcurrant', 1000, 173),
(101, 105, 101, 'Orange - Canned, Mandarin', 1900, 139),
(102, 118, 30, 'Appetizer - Southwestern', 1300, 102),
(103, 118, 103, 'Salmon - Sockeye Raw', 500, 128),
(104, 22, 104, 'Tobasco Sauce', 1200, 184),
(105, 56, 105, 'Potatoes - Peeled', 2000, 195),
(106, 46, 106, 'Isomalt', 1600, 149),
(107, 41, 107, 'Wine - Rosso Del Veronese Igt', 700, 153),
(108, 140, 108, 'Mayonnaise', 1100, 184),
(109, 114, 109, 'Broom - Corn', 1100, 135),
(110, 142, 110, 'Apples - Spartan', 900, 162),
(111, 61, 111, 'Leeks - Large', 1300, 100),
(112, 59, 112, 'Cup - Paper 10oz 92959', 200, 118),
(113, 32, 113, 'Coffee - Dark Roast', 900, 178),
(114, 198, 114, 'Crab - Blue, Frozen', 700, 181),
(115, 105, 88, 'Corn Syrup', 500, 137),
(116, 197, 25, 'Orange Roughy 6/8 Oz', 1000, 191),
(117, 58, 117, 'Goulash Seasoning', 1500, 196),
(118, 27, 118, 'Appetiser - Bought', 1700, 152),
(119, 153, 119, 'Ostrich - Prime Cut', 700, 195),
(120, 146, 120, 'Banana - Leaves', 1500, 122),
(121, 103, 121, 'Sprouts - Brussel', 1500, 148),
(122, 146, 122, 'Baking Powder', 300, 146),
(123, 72, 123, 'Parsley - Fresh', 300, 147),
(124, 47, 124, 'Carrots - Mini, Stem On', 800, 134),
(125, 133, 125, 'Soup - Campbells, Butternut', 900, 114),
(126, 65, 126, 'Veal - Striploin', 1700, 117),
(127, 78, 127, 'Steel Wool S.o.s', 800, 129),
(128, 5, 128, 'Bacardi Breezer - Strawberry', 1600, 174),
(129, 89, 129, 'Salt And Pepper Mix - White', 1900, 147),
(130, 138, 130, 'Yoplait Drink', 1600, 145),
(131, 3, 131, 'Yeast Dry - Fermipan', 100, 186),
(132, 83, 79, 'Potatoes - Fingerling 4 Oz', 700, 132),
(133, 45, 133, 'Bar Nature Valley', 1400, 158),
(134, 19, 134, 'Turkey - Oven Roast Breast', 900, 107),
(135, 49, 135, 'Cardamon Ground', 700, 154),
(136, 196, 136, 'Schnappes Peppermint - Walker', 1300, 175),
(137, 48, 137, 'Fireball Whisky', 300, 113),
(138, 124, 138, 'Hersey Shakes', 1000, 164),
(139, 154, 139, 'Sobe - Lizard Fuel', 1500, 124),
(140, 158, 140, 'Water - Spring 1.5lit', 1200, 116),
(141, 123, 141, 'Foam Cup 6 Oz', 700, 117),
(142, 161, 142, 'Soup - Campbells Mac N Cheese', 1300, 155),
(143, 182, 143, 'Mushroom - Chanterelle Frozen', 1600, 174),
(144, 70, 144, 'Bread - Raisin Walnut Pull', 2000, 119),
(145, 87, 145, 'Cheese - Provolone', 1500, 116),
(146, 51, 146, 'Cake Sheet Combo Party Pack', 1300, 117),
(147, 92, 147, 'Sauce - Rosee', 800, 107),
(148, 33, 148, 'Garbage Bag - Clear', 700, 173),
(149, 52, 149, 'Muffin - Carrot Individual Wrap', 1600, 191),
(150, 166, 150, 'Wine - Harrow Estates, Vidal', 500, 193),
(151, 140, 151, 'Napkin White - Starched', 1100, 108),
(152, 112, 152, 'Bread - Rolls, Rye', 1900, 196),
(153, 159, 153, 'Squash - Butternut', 400, 194),
(154, 103, 154, 'Juice - Mango', 1400, 140),
(155, 139, 155, 'Oil - Shortening,liqud, Fry', 900, 196),
(156, 172, 22, 'Vodka - Hot, Lnferno', 800, 130),
(157, 108, 157, 'Pepper - Red Chili', 200, 198),
(158, 178, 158, 'Sugar Thermometer', 300, 112),
(159, 37, 159, 'Cheese - Stilton', 200, 121),
(160, 189, 160, 'Bar Mix - Lime', 1800, 116),
(161, 50, 161, 'Wine - Saint Emilion Calvet', 200, 122),
(162, 155, 162, 'Cucumber - English', 1600, 145),
(163, 188, 163, 'Cheese - Cottage Cheese', 300, 197),
(164, 123, 164, 'Muffin - Banana Nut Individual', 1000, 106),
(165, 36, 165, 'Lamb - Whole, Frozen', 600, 177),
(166, 163, 166, 'Potatoes - Yukon Gold, 80 Ct', 300, 147),
(167, 46, 167, 'Wine - Magnotta - Belpaese', 1900, 134),
(168, 94, 168, 'Pernod', 700, 158),
(169, 29, 44, 'Grenadine', 1200, 153),
(170, 140, 170, 'Shrimp - Prawn', 100, 174),
(171, 97, 171, 'Sauce - Demi Glace', 1700, 167),
(172, 24, 40, 'Lid Tray - 16in Dome', 700, 111),
(173, 15, 173, 'Lobak', 1700, 152),
(174, 149, 174, 'Glycerine', 200, 172),
(175, 2, 175, 'Lamb Tenderloin Nz Fr', 1300, 170),
(176, 46, 23, 'Durian Fruit', 1100, 155),
(177, 11, 152, 'Bread - Rolls, Rye', 1800, 185),
(178, 13, 178, 'Soup - French Can Pea', 300, 166),
(179, 141, 179, 'Pork - Smoked Kassler', 200, 146),
(180, 162, 180, 'Cardamon Seed / Pod', 800, 199),
(181, 49, 181, 'Cognac - Courvaisier', 1700, 152),
(182, 149, 182, 'Assorted Desserts', 1500, 152),
(183, 55, 183, 'Lumpfish Black', 1700, 143),
(184, 75, 184, 'Pork - Caul Fat', 1500, 184),
(185, 168, 185, 'Nantuket Peach Orange', 700, 121),
(186, 138, 186, 'Bread - Wheat Baguette', 400, 166),
(187, 182, 187, 'Cookies - Englishbay Wht', 300, 150),
(188, 84, 188, 'Toothpick Frilled', 1400, 169),
(189, 115, 189, 'Wine - Cave Springs Dry Riesling', 500, 119),
(190, 146, 190, 'Chips Potato Swt Chilli Sour', 1900, 178),
(191, 60, 191, 'Cheese - Romano, Grated', 500, 170),
(192, 131, 192, 'Coffee Cup 8oz 5338cd', 400, 170),
(193, 135, 193, 'Tea - Mint', 1000, 186),
(194, 7, 194, 'Sugar - Brown, Individual', 1700, 181),
(195, 194, 195, 'Apple - Fuji', 1000, 144),
(196, 4, 196, 'Beer - Camerons Cream Ale', 600, 149),
(197, 168, 197, 'Cheese - Le Cru Du Clocher', 1800, 136),
(198, 54, 198, 'Vinegar - Champagne', 500, 173),
(199, 2, 199, 'Cookies - Fortune', 2000, 187),
(200, 149, 200, 'Liquid Aminios Acid - Braggs', 800, 110);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
