-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2025 at 08:44 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int NOT NULL,
  `id_livre` int NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_livre`, `pseudo`, `message`, `dateAjout`, `active`) VALUES
(1, 1, '$rodibrian', 'Un commentaire !!!', '2021-06-29 15:11:37', 1),
(2, 1, '$rodibrian', 'Un commentaire !!!', '2021-06-29 15:13:03', 1),
(3, 1, '$Walter Obrian', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2021-06-29 15:15:06', 1),
(4, 13, '$Rakoto Sedson', 'Un petit commentaire!!!', '2021-06-29 15:27:45', 1),
(5, 13, '$Rakoto Sedson', 'Mon second, Un petit commentaire!!!', '2021-06-29 15:28:38', 1),
(6, 1, '$test', 'c\'est là!', '2021-06-29 15:32:23', 1),
(7, 1, '$Walter O\'brian', 'Me voici maintenant! \r\nJe suis là!', '2021-06-29 15:32:56', 1),
(8, 1, '$et\'partout', 'D\'un coté à l\'autre.', '2021-06-29 15:33:43', 1),
(9, 14, '$\'(\'(\'(-\'(\'è\"-\'_\"', '                        è-è(è\"-(\"\'(è\"\'(è\"_-\'ç-t', '2021-06-29 15:34:35', 1),
(10, 3, 'baia officiel', 'fdbghyèr\"-é\'è\"_\'èéèy\"zrgzeetzgqee)éçàiçé\'ir\'z', '2021-06-29 16:43:18', 1),
(11, 2, 'RakotoArisoa Jean Frèd', '_\'\"è\'à\")éà)\'\")é\'(\"\'-[~#{#|#[|è', '2021-06-30 06:28:53', 1),
(12, 9, 'hgsdghrstfr', 'd(y_\"\'_(ç\'àé\"', '2021-06-30 07:28:09', 1),
(13, 1, 'unknown', 'no comment!', '2021-06-30 07:45:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `pseudo`, `email`, `message`, `dateAjout`, `active`) VALUES
(1, 'Walter O\'brian', 'rodibrian.expert@gmail.com', 'J\'apprecis beaucoup votre site web.Merci!', '2021-06-29 15:46:46', 0),
(2, 'rakoto', 'valopof299@sejkt.com', 'Un mesage de souhait! Bonne chance\r\nMerci!', '2021-06-30 06:46:59', 0),
(3, 'test', 'test@gmail.com', 'un petit message de bienvenu!', '2021-06-30 07:28:42', 0),
(4, '', '', '', '2025-04-14 20:15:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

CREATE TABLE `livre` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `src` text NOT NULL,
  `description` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `livre`
--

INSERT INTO `livre` (`id`, `titre`, `auteur`, `src`, `description`, `dateAjout`, `active`) VALUES
(1, 'Apprendre les frameworks Android et plus', 'Honoré de Balzac', 'androidFramework', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:09', 1),
(2, 'Android Studio Learning', 'Stendhal', 'androidStudio', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:09', 1),
(3, 'Prennez en main Bootstrap', 'Albert Camus', 'bootstrap', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:09', 1),
(4, 'C# For Beginners', 'Gustave Flaubert', 'CSharp', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:09', 1),
(5, 'Frameworks CakePHP', 'Victor Hugo', 'cakePhp', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:09', 1),
(6, 'Débuter avec Html & CSS', 'Gillame Appolinaire', 'htmlCss', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(7, 'Apprenez les bases de JAVA', 'Marcel Proust', 'java', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(8, 'Learn Javascript & Jquery', 'Guy de Maupassant', 'JavascriptJquery', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(9, 'Découverte de Laravel', 'Emile Zola', 'laravel', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(10, 'A la maitrise d\'Oracle', 'Michel de Montaigne', 'oracle', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(11, 'Learn PhP & MySql', 'Jules Verne', 'phpMysql', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(12, 'PostgreSql SGBD Learning', 'Jean Jacques Rousseaun', 'postgreSql', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(13, 'Pratique de C++ à Qt', 'Alfred de Musset', 'qt', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(14, 'React Native framework', 'Molière', 'reactNative', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:10', 1),
(15, 'Conception Objet avec UML', 'Jean-Paul Sartre', 'uml', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:11', 1),
(16, 'Apprendre le Framework Vue JS', 'Voltaire', 'vue', 'Un livre de programmation très pratiques pour les dénutants, de mêmes pour les avancés..Ca apporte beaucoup de connaissance dans la pratique.', '2021-06-29 14:15:11', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
