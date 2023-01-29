-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 09:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `genre` varchar(9) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `price`, `count`, `year`) VALUES
(1, 'Limuzins Janu nakts krasa', 'Imogene Stickings', 'advanture', 2819, 10, 1932),
(2, 'Last Movie, The', 'Adelaida Blackston', 'clasics', 1595, 10, 2019),
(3, 'Cocoanuts, The', 'Philipa Skidmore', 'clasics', 2457, 17, 1910),
(4, 'Paying the Price: Killing the Children of Iraq', 'Hartley Piwall', 'clasics', 1281, 3, 1973),
(5, 'Woman That Dreamed About a Man, The (Kvinden der d', 'Care Creany', 'children', 2889, 50, 1921),
(6, 'Susan Slept Here', 'Cherrita Overill', 'music', 1640, 13, 2015),
(7, 'Cabinet of Dr. Ramirez, The', 'Vida Frankish', 'history', 2278, 2, 1970),
(8, 'Danube Exodus, The', 'Alix Langham', 'history', 1984, 10, 1959),
(9, 'Blondie on a Budget', 'Christie Coolican', 'music', 570, 1, 2008),
(10, 'Hungarian Fairy Tale, A (Hol volt, hol nem volt)', 'Iris Wessel', 'advanture', 692, 16, 1950),
(11, 'Surviving the Game', 'Belle Peter', 'horor', 516, 11, 1994),
(12, 'Black Sunday', 'Emmye Rannald', 'history', 1235, 7, 2020),
(13, 'House on Sorority Row, The', 'Janeva Donaway', 'horor', 1694, 17, 1920),
(14, 'alaskaLand', 'Malanie Shovlar', 'fantasy', 429, 15, 1911),
(15, 'Man Who Sleeps, The (Un homme qui dort)', 'Suzanne Darbyshire', 'clasics', 2721, 2, 2007),
(16, 'Entitled, The', 'Tamqrah Chamberlaine', 'music', 2363, 15, 1906),
(17, 'Mei and the Kittenbus', 'Brooks Tellesson', 'clasics', 299, 8, 2014),
(18, 'Bajo la Sal (Under the Salt)', 'Karylin Jantot', 'horor', 2324, 18, 1907),
(19, 'Shepard & Dark', 'Demott Coker', 'horor', 1497, 19, 1958),
(20, 'The Cheat', 'Jemima Cockshut', 'fantasy', 2402, 6, 2013),
(21, 'Possession of Joel Delaney, The', 'Casper Le Grove', 'clasics', 1665, 10, 1994),
(22, 'Face in the Crowd, A', 'Sandor Hampshaw', 'history', 1814, 13, 1981),
(23, 'Wise Blood', 'Melisent Noon', 'clasics', 853, 15, 1985),
(24, 'Divorce of Lady X, The', 'Jan Unstead', 'music', 2785, 4, 1996),
(25, 'Silver City', 'Simone Ephgrave', 'advanture', 1886, 13, 1960),
(26, 'Conspiracy Theory', 'Franciskus Muneely', 'children', 707, 13, 1954),
(27, 'Adventures of Huckleberry Finn, The', 'Modesta Everil', 'clasics', 2113, 2, 1935),
(28, 'Alibi', 'Jermayne Frowd', 'horor', 1863, 8, 1951),
(29, 'Killing Season', 'Jacklin Phizackerly', 'horor', 2430, 19, 1963),
(30, 'Criminal Justice', 'Evangeline Stormonth', 'music', 1479, 8, 1984),
(31, 'Classe américaine, La (a.k.a. Le grand détournemen', 'Dotty Drake', 'clasics', 186, 6, 1915),
(32, 'Agnes Browne', 'Perri Darker', 'children', 1871, 12, 2010),
(33, 'Border Feud', 'Jenna Culter', 'clasics', 463, 20, 1976),
(34, 'Mystery of the Wax Museum', 'Bud Pontefract', 'horor', 2961, 11, 1987),
(35, 'Comedy of Innocence (Comédie de l\'innocence)', 'Wynnie Towll', 'children', 582, 16, 1990),
(36, 'Maze', 'Kora Capini', 'music', 2551, 19, 1936),
(37, 'Sympathy for Mr. Vengeance (Boksuneun naui geot)', 'Theobald Trussell', 'history', 736, 2, 1932),
(38, 'Tooth Fairy 2', 'Michelina Mauvin', 'children', 2902, 9, 1983),
(39, 'American Pop', 'Jacquie Standon', 'clasics', 1530, 11, 1949),
(40, 'Broadway Damage', 'Symon Crommett', 'clasics', 2494, 20, 1928),
(41, 'Woochi: The Demon Slayer', 'Trumann Axton', 'history', 1802, 8, 1933),
(42, 'White Shadows in the South Seas', 'Edmund Loughren', 'children', 412, 9, 1902),
(43, 'Basket Case', 'Delphinia Culleton', 'music', 1053, 16, 1934),
(44, 'Bourne Ultimatum, The', 'Brandie Sand', 'history', 903, 2, 2004),
(45, 'No Turning Back', 'Tiphanie Sibbald', 'horor', 1684, 3, 1926),
(46, 'Full Eclipse', 'Maynord Overell', 'horor', 1249, 2, 1904),
(47, 'My Best Fiend (Mein liebster Feind)', 'Carl Pashby', 'children', 2076, 5, 1970),
(48, 'Indian Runner, The', 'Marthena Grundy', 'advanture', 781, 17, 1966),
(49, 'You\'ll Find Out', 'Menard Lidell', 'history', 2008, 14, 2004),
(50, 'Five Angles on Murder', 'Armand Easman', 'music', 2172, 1, 1974),
(51, 'Unspeakable Acts ', 'Wenonah Whatsize', 'fantasy', 1660, 13, 2020),
(52, 'Big Wedding, The', 'Gwendolin Veasey', 'children', 2737, 7, 2006),
(53, 'Dying Gaul, The', 'Prudence Grimwade', 'fantasy', 447, 4, 2006),
(54, 'Jack Brooks: Monster Slayer', 'Stoddard Tritton', 'clasics', 1524, 5, 1985),
(55, 'Killing Us Softly 3', 'Hadleigh Dunne', 'fantasy', 288, 16, 1967),
(56, 'Scar', 'Freddie Wealleans', 'fantasy', 2856, 20, 1945),
(57, 'Bad Dreams', 'Lisha Jindrak', 'children', 264, 15, 1931),
(58, 'Halloween', 'Chad Minget', 'horor', 866, 5, 2006),
(59, 'Pearl Jam Twenty', 'Witty Piquard', 'history', 2491, 17, 1949),
(60, 'Lone Wolf and Cub: Baby Cart to Hades (Kozure Ôkam', 'Pippy Gowdy', 'clasics', 2550, 18, 2022),
(61, 'Dennis the Menace', 'Vicki Guitte', 'music', 1822, 11, 1922),
(62, 'Thin Man, The', 'Harwilll Pinwell', 'children', 1218, 2, 1963),
(63, 'Jumping the Broom', 'Roxana Pelfer', 'clasics', 1396, 9, 2014),
(64, 'Price Above Rubies, A', 'Louie Polack', 'music', 988, 16, 1921),
(65, 'Friday the 13th Part VI: Jason Lives', 'Ichabod Tomaskunas', 'horor', 538, 6, 1915),
(66, 'Road to El Dorado, The', 'Ethelbert McSporrin', 'fantasy', 1389, 5, 2004),
(67, 'Story of Qiu Ju, The (Qiu Ju da guan si)', 'Paulette Vanyushin', 'advanture', 565, 12, 1919),
(68, 'Day for Night (La Nuit Américaine)', 'Halimeda Edgley', 'advanture', 2559, 8, 1928),
(69, 'Young Frankenstein', 'Perceval Wyse', 'clasics', 204, 11, 1966),
(70, 'Just Friends?', 'Kore Laweles', 'children', 2884, 1, 1901),
(71, 'The Facility', 'Ellene Quayle', 'horor', 631, 12, 1954),
(72, 'Born to Be Bad', 'Arlana Bareham', 'horor', 439, 15, 2022),
(73, 'Modesty Blaise', 'Mar Bence', 'clasics', 1000, 11, 1956),
(74, 'Dear Jesse', 'Byram Solano', 'advanture', 2559, 5, 2001),
(75, 'Drei Stunden', 'Arabela Affleck', 'history', 873, 8, 1977),
(76, 'Chungking Express (Chung Hing sam lam)', 'Flory Hamberston', 'advanture', 1661, 18, 1924),
(77, 'Spiders Part 1: The Golden Lake, The (Die Spinnen,', 'Susan Rumford', 'advanture', 2179, 12, 1967),
(78, 'That\'s Entertainment! III', 'Valerye Wybrew', 'advanture', 1581, 20, 1907),
(79, 'Satan\'s Little Helper', 'Tandie Van Driel', 'history', 1657, 13, 1954),
(80, 'M. Butterfly', 'Jonis Fried', 'history', 488, 12, 1964),
(81, 'Fugitive, The', 'Raquela Quigg', 'horor', 2136, 7, 1936),
(82, 'The Dancer', 'Ebba Arguile', 'music', 1518, 15, 1948),
(83, 'Deuce Bigalow: European Gigolo', 'Alma Leedes', 'music', 1004, 1, 1960),
(84, 'And Now a Word from Our Sponsor', 'Faun Arghent', 'advanture', 1990, 6, 1900),
(85, 'Dots', 'Aile Klees', 'history', 2044, 19, 1959),
(86, 'Hard Rain', 'Franny Swapp', 'fantasy', 1780, 13, 1970),
(87, 'Jerry Springer: Ringmaster', 'Herbie Santora', 'music', 832, 16, 2003),
(88, 'Pulse (Kairo)', 'Emmerich Sebyer', 'history', 1873, 4, 2004),
(89, 'What Fault Is It of Ours?', 'Ruttger Phizakarley', 'children', 1538, 15, 1914),
(90, 'Lone Wolf and Cub: Sword of Vengeance (Kozure Ôkam', 'Ermanno Petrushkevich', 'music', 380, 10, 1948),
(91, 'Downeast', 'Tandi Vinton', 'horor', 1669, 1, 1910),
(92, 'Kai Po Che!', 'Elvera Ondrusek', 'history', 1255, 19, 1975),
(93, 'Hour of the Pig, The', 'Corabel Detoile', 'advanture', 2850, 5, 1997),
(94, 'Portrait of Maria (María Candelaria (Xochimilco))', 'Lin Nice', 'clasics', 1056, 17, 1992),
(95, 'Asylum', 'Lothario Jedrasik', 'music', 126, 12, 1995),
(96, 'American Son', 'Atalanta Blaby', 'children', 2088, 17, 1982),
(97, '20,000 Days on Earth', 'Hewitt Agirre', 'history', 2890, 5, 1918),
(98, 'Dr. Terror\'s House of Horrors', 'Alexei Murrill', 'fantasy', 839, 6, 2019),
(99, 'Christmas Toy, The', 'Madalena McCrachen', 'fantasy', 843, 14, 1999),
(100, 'Quantum of Solace', 'Sigismondo Lewcock', 'music', 2643, 5, 1924);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
