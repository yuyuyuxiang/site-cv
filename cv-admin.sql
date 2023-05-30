-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 17 fév. 2023 à 15:17
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cv-admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `coordonnee`
--

CREATE TABLE `coordonnee` (
  `id` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coordonnee`
--

INSERT INTO `coordonnee` (`id`, `tel`, `mail`, `adress`) VALUES
(0, '+33 666666666', 'yuxiang.zhang@yuxiangzhang123.com', 'XXXX, 67000 Strasbourg, France');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(255) NOT NULL,
  `initial` varchar(100) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `sousTitre` varchar(255) NOT NULL,
  `shortDesc` text NOT NULL,
  `lien` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `tool` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `initial`, `titre`, `sousTitre`, `shortDesc`, `lien`, `description`, `tool`, `img`) VALUES
(2, 'aki', 'WORK-STUDY WEB CREATION', 'As a computer science intern, my tasks are to help the company create a website, manage social networks and handle communication with customers.', 'This work-study develops in the company Akifrom 21/09/2020 to 10/09/2021.', 'https://www.aki2010.com/', 'My tasks during my internship were to create, maintain and update the website for the restaurant. At the same time, I am also responsible for customer service. I have to answer customers’ questions, help them solve the problem and take note of their orders, and plan the time of these orders in a reasonable way. I also manage Aki’s social networks such as Facebook, TripAdvisor, etc. For the future expansion and development of the restaurant, I have to discuss the development path of Aki with Ms. ZENG to find a more appropriate and correct direction.<br><br>Thanks to the work-study program, I mainly worked on the creation of the website. First of all, it’s a field that interests me a lot. And this work made me enrich my knowledge. I also learned how a company works, and I discovered how it was organized. I also learned that to do a job, it is not only the functioning of one department, communication among different departments of the company is inevitable. For the company, effective communication is very important. Moreover, during my internship, I had the opportunity to acquire several new skills such as communication techniques, web design and website layout, video production, etc.', 'HTML, CSS, JavaScript, Wix, Adobe PS, Adobe Pr, Google analytics', 'assets/png/aki.png'),
(1, 'toweb', 'WEBSITE CREATION', 'Redesign of the website', 'Redesign of the website at To Web Or Not To Web.', 'https://www.towebornottoweb.com/', 'My task was to completely redesign the company’s website using Wordpress. The task lasted one month.', 'WordPress', 'assets/png/logo-toweb.png'),
(3, 'arn', 'ARN (ALSACE NEUTRAL NETWORK) INTERNSHIP', 'Creation and integration of visual animation components into the platform.', 'Website redesign from 15/01/2022 to 15/06/2022. The association Alsace réseau neutre (ARN) was created in 2012 in Strasbourg as an associative Internet service provider (ISP).', 'https://arn-fai.net/', 'The ARN association wants a website that would briefly introduce the organization and its values, while highlighting planned events and the most important articles in the wiki. It also wants to provide short textual content that is easy to understand by non web specialists. Users should also be able to easily find the connection pages to the different services of the association. As far as the visual aspect is concerned, ARN wishes to give its website a more modern design. The new website will have to be consistent with the values of the association. This implies in particular that it will not contain any tracker.<br><br>The current website, arn-fai.net, contains a considerable amount of information, but it is poorly organized and unevenly distributed on the pages, which makes it difficult to access. For example, the contact page does not have a dedicated place in the menu, and is accessible from the ', 'HTML, CSS, JavaScript, Grav, Docker, Git, PHP, Trados', 'assets/png/arn.png'),
(4, 'opinaka', 'OPINAKA INTERNSHIP', 'Creation and integration of visual animation components into the platform.', 'Internship from 25 / 05 / 2020 to 25/07/2020. Opinaka, located in Montpellier, was created 5 years ago. The company works in the field of advanced data analysis such as duplicate detection, data cleaning, prediction, etc.', 'https://opinaka.com/', 'My tasks were to create and integrate visual animation components into the company’s WordPress platform.', 'HTML, CSS, JavaScript, WordPress, Kibana, GSAP', 'assets/png/opinaka.png'),
(5, 'snow', 'A WEBSITE CREATED WITH<br>HTML, CSS AND JS', 'A website containing several functions realized in 8 hours. Purely in HTML, CSS and JS.', 'A website containing several features completed in 8 hours.\r\nPurely in HTML, CSS and JS.', 'https://github.com/yuyuyuxiang/simplePage-snow', 'This is a project for the website animation course.', 'HTML, CSS, JavaScript, JQuery, VS Code', 'assets/png/snow.png'),
(6, 'demineur', 'DEMINER GAME IN PYTHON', 'Minesweeper is a puzzle game where the goal is to locate mines hidden in a virtual field with only the number of mines in the adjacent areas.', 'Minesweeper is a puzzle game where the goal is to locate mines hidden in a virtual field with only the number of mines in the adjacent areas.', 'https://github.com/yuyuyuxiang/jeu-demineur', 'In this project, I implement the game of minesweeper. It is for the player to embody an agent of the demining team responsible for protecting a minefield. I have achieved some functions below:<br>\r\n- Different difficulties<br>\r\n- Time<br>\r\n- The number of squares uncovered<br>\r\n- The score<br>\r\n- Digging the box<br>\r\n- Laying a flag<br>\r\n- Raising a flag<br>\r\n- Etc...<br>\r\nThe objectives of my project is to allow me to learn a new programming language (Python) and to master PyCharm in order to enrich my computer knowledge. I provide a personal work schedule of 60 hours.', 'Python, PyCharm', 'assets/png/demineur.png');

-- --------------------------------------------------------

--
-- Structure de la table `webmaster`
--

CREATE TABLE `webmaster` (
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `webmaster`
--

INSERT INTO `webmaster` (`admin_name`, `admin_password`) VALUES
('root', 'root');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
