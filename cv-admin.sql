-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 12 juil. 2024 à 15:08
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

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
(0, '+33 699427731', 'yuxiang.zhang@yuxiangzhang123.com', '6 rue de Rome, 67000 Strasbourg,<br>France');

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
(7, 'passionauto', 'CREATION OF THE PASSION AUTO PRESTIGE WEBSITE', 'Creation of a website that presents cars and car infos and contains a back-office for content management.', 'Creation of a website that presents cars and car infos and contains a back-office for content management, during my work-study of CAWEB master.', 'https://passionautoprestige.fr/', 'Passion Auto, a European supplier of used sports cars based in Strasbourg, is one of our clients. They chose us to create the official website of the company. \r\n<br><br>\r\nThe client needed a front-end interface for the website to present the vehicles for sale, the company’s services and other information they wanted to present to the user. Along with the front-end interface, the client needed an administrative interface to manage and edit the content displayed on the website, specifically the description and information of all the company’s vehicles for sale. In addition, in the administration back office, the client needed the ability to add and manage different administration accounts. To do this, the use of tools such as HTML, CSS, JavaScript, jQuery and PHP was necessary in the project. I didn’t use other frameworks such as Symfony, as it wasn’t a big project and the amount of code wasn’t huge, so there was no need to use a framework.\r\n<br><br>\r\nFinally, after the project was delivered, our client wanted us to develop a blog feature for the website. However, I decided that it was not worth using pure code to develop it again, so I chose WordPress to accomplish the blog module. When I developed the blog site using WordPress, I of course created a child theme. Finally, after the blog was created, I created a sub-domain on the website server to place the WordPress folders, and then integrated the sub-domain URL into the main website navigation menu.\r\n<br><br>\r\nIn conclusion, the project done for Passion Auto was a success and the result is an efficient and user-friendly website for users and administrators.', 'HTML, CSS, JavaScript, PHP, Bootstrap, jQuery, Database, Git, WordPress', 'assets/png/passionauto.png'),
(2, 'aki', 'WORK-STUDY WEB CREATION', 'As a computer science intern, my tasks are to help the company create a website, manage social networks and handle communication with customers.', 'This work-study develops in the company Akifrom 21/09/2020 to 10/09/2021.', 'https://www.aki2010.com/', 'My tasks during my internship were to create, maintain and update the website for the restaurant. At the same time, I am also responsible for customer service. I have to answer customers’ questions, help them solve the problem and take note of their orders, and plan the time of these orders in a reasonable way. I also manage Aki’s social networks such as Facebook, TripAdvisor, etc. For the future expansion and development of the restaurant, I have to discuss the development path of Aki with Ms. ZENG to find a more appropriate and correct direction.<br><br>Thanks to the work-study program, I mainly worked on the creation of the website. First of all, it’s a field that interests me a lot. And this work made me enrich my knowledge. I also learned how a company works, and I discovered how it was organized. I also learned that to do a job, it is not only the functioning of one department, communication among different departments of the company is inevitable. For the company, effective communication is very important. Moreover, during my internship, I had the opportunity to acquire several new skills such as communication techniques, web design and website layout, video production, etc.', 'HTML, CSS, JavaScript, Wix, Adobe PS, Adobe Pr, Google analytics', 'assets/png/aki.png'),
(1, 'toweb', 'WEBSITE CREATION', 'Redesign of the website', 'Redesign of the website at To Web Or Not To Web.', 'https://www.towebornottoweb.com/', 'My task was to completely redesign the company’s website using Wordpress. The task lasted one month.', 'WordPress', 'assets/png/logo-toweb.png'),
(3, 'arn', 'ARN (ALSACE NEUTRAL NETWORK) INTERNSHIP', 'Total redesign of the website of the association and traduction of the website.', 'Website redesign from 15/01/2022 to 15/06/2022. The association Alsace réseau neutre (ARN) was created in 2012 in Strasbourg as an associative Internet service provider (ISP).', 'https://arn-fai.net/', 'The ARN association wants a website that would briefly introduce the organization and its values, while highlighting planned events and the most important articles in the wiki. It also wants to provide short textual content that is easy to understand by non web specialists. Users should also be able to easily find the connection pages to the different services of the association. As far as the visual aspect is concerned, ARN wishes to give its website a more modern design. The new website will have to be consistent with the values of the association. This implies in particular that it will not contain any tracker.<br><br>The current website, arn-fai.net, contains a considerable amount of information, but it is poorly organized and unevenly distributed on the pages, which makes it difficult to access. For example, the contact page does not have a dedicated place in the menu, and is accessible from the ', 'HTML, CSS, JavaScript, Grav, Docker, Git, PHP, Trados', 'assets/png/arn.png'),
(4, 'opinaka', 'OPINAKA INTERNSHIP', 'Creation and integration of visual animation components into the platform.', 'Internship from 25 / 05 / 2020 to 25/07/2020. Opinaka, located in Montpellier, was created 5 years ago. The company works in the field of advanced data analysis such as duplicate detection, data cleaning, prediction, etc.', 'https://opinaka.com/', 'My tasks were to create and integrate visual animation components into the company’s WordPress platform.', 'HTML, CSS, JavaScript, WordPress, Kibana, GSAP', 'assets/png/opinaka.png'),
(5, 'snow', 'A WEBSITE CREATED WITH<br>HTML, CSS AND JS', 'A website containing several functions realized in 8 hours. Purely in HTML, CSS and JS.', 'A website containing several features completed in 8 hours.\r\nPurely in HTML, CSS and JS.', 'https://github.com/yuyuyuxiang/simplePage-snow', 'This is a project for the website animation course.', 'HTML, CSS, JavaScript, JQuery, VS Code', 'assets/png/snow.png'),
(6, 'demineur', 'DEMINER GAME IN PYTHON', 'Minesweeper is a puzzle game where the goal is to locate mines hidden in a virtual field with only the number of mines in the adjacent areas.', 'Minesweeper is a puzzle game where the goal is to locate mines hidden in a virtual field with only the number of mines in the adjacent areas.', 'https://github.com/yuyuyuxiang/jeu-demineur', 'In this project, I implement the game of minesweeper. It is for the player to embody an agent of the demining team responsible for protecting a minefield. I have achieved some functions below:<br>\r\n- Different difficulties<br>\r\n- Time<br>\r\n- The number of squares uncovered<br>\r\n- The score<br>\r\n- Digging the box<br>\r\n- Laying a flag<br>\r\n- Raising a flag<br>\r\n- Etc...<br>\r\nThe objectives of my project is to allow me to learn a new programming language (Python) and to master PyCharm in order to enrich my computer knowledge. I provide a personal work schedule of 60 hours.', 'Python, PyCharm', 'assets/png/demineur.png'),
(8, 'applipro', 'APPLIPRO - development full-stack', 'From October 2022 to present, working as a full-stack development engineer, helping the company develop its own content management system.', 'From October 2022 to present, working as a full-stack development engineer, helping the company develop its own content management system.', '#', '- Responsible for the front-end development of the company’s content management system, using the React framework Next.JS.<br>\r\n- JS framework. Refactored the React code in the initial stage of the project using Next.JS, realized the overall construction of the front-end part of the project, and integrated personal information, login and registration, switching between different platforms for users, displaying edited content in the back-end, and message alerts and other modules.<br>\r\n- It involves a lot of data access, api and library usage. The response time of the system was significantly improved by application server rendering.<br>\r\n- The use of AJAX solves the problem of cyclic request data processing and improves user experience.<br>\r\n- Achieved 95% restoration of UI/UX design and highly responsive layout.<br>\r\n- Participated in the back-end development of Blog and file upload management module, using Symfony.<br>\r\n- Used Git for version control, and collaborated with multiple people to realize efficient team development.', 'React, Next.JS, Git, Symfony, MySQL', 'assets/png/applipro.png');

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `skill`
--

INSERT INTO `skill` (`id`, `name`, `category`, `code`) VALUES
(5, 'JavaScript', 'Programming languages', 'prog_lang'),
(6, 'PHP', 'Programming languages', 'prog_lang'),
(11, 'WordPress', 'CMS', 'cms'),
(12, 'Drupal', 'CMS', 'cms'),
(13, 'Grav', 'CMS', 'cms'),
(14, 'Wix', 'CMS', 'cms'),
(16, 'MacOS', 'Work environment', 'work_env'),
(17, 'Linux', 'Work environment', 'work_env'),
(18, 'Windows', 'Work environment', 'work_env'),
(19, 'SQL', 'Database', 'db'),
(20, 'MySQL', 'Database', 'db'),
(21, 'SQLDeveloper', 'Database', 'db'),
(22, 'Word', 'Microsoft office', 'microsoft'),
(23, 'Excel', 'Microsoft office', 'microsoft'),
(24, 'PowerPoint', 'Microsoft office', 'microsoft'),
(25, 'Photoshop', 'Adobe', 'adobe'),
(26, 'inDesign', 'Adobe', 'adobe'),
(27, 'Autonomy', 'Life skills', 'personal_skill'),
(28, 'Curiosity', 'Life skills', 'personal_skill'),
(29, 'Efficiency', 'Life skills', 'personal_skill'),
(30, 'Team spirit', 'Life skills', 'personal_skill'),
(32, 'HTML', 'Programming languages', 'prog_lang'),
(36, 'CSS', 'Programming languages', 'prog_lang'),
(37, 'Symfony', 'Frameworks', 'framework'),
(38, 'React JS', 'Frameworks', 'framework'),
(39, 'Next JS', 'Frameworks', 'framework'),
(40, 'Next JS', 'Frameworks', 'framework'),
(41, 'Google Analytics', 'Tools', 'tool'),
(42, 'Git', 'Tools', 'tool'),
(43, 'Bootstrap', 'Frameworks', 'framework');

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

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
