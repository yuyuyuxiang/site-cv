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
-- Base de données : `cv-admin-fr`
--

-- --------------------------------------------------------

--
-- Structure de la table `coordonnee`
--

CREATE TABLE `coordonnee` (
  `id` int(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coordonnee`
--

INSERT INTO `coordonnee` (`id`, `tel`, `mail`, `adress`) VALUES
(0, '+33 666666666', 'yuxiang.zhang@yuxiangzhang123.com', 'XXXX, 67000 Strasbourg');

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
(2, 'aki', 'ALTERNANCE CRÉATION WEB', 'En tant qu’alternant en informatique, mes tâches consistent à aider l’entreprise à créer un site web, à gérer les réseaux sociaux et à m’occuper de la communication avec les clients.', 'Cette alternance se développe dans l’entreprise Aki à compter du 21/09/2020 au 10/09/2021.', 'https://www.aki2010.com/', 'Mes tâches pendant mon alternance étaient de créer, maintenir et mettre à jour le site web pour le restaurant. En parallèle, je suis également responsable du service client. Je dois répondre aux questions des clients, les aider à résoudre le problème et prendre note de leurs commandes, et planifier le temps de ces commandes de manière raisonnable. Je m’occupe aussi de gérer les réseaux sociaux d’Aki tels que Facebook, TripAdvisor, etc. Je dois, pour l’expansion et le développement futurs du restaurant, discuter du chemin de développement de l’Aki avec Mme ZENG afin de trouver une direction plus appropriée et plus correcte.<br><br>Grâce à l’alternance, j’ai principalement travaillé sur la création du site Web. Tout d’abord c’est un domaine qui m’intéresse fortement. Et ce travail me fait enrichir mes connaissances. J’ai aussi appris le fonctionnement d’une entreprise, et j’ai découvert comment elle était organisée. J’ai également appris que pour faire un travail, ce n’est pas seulement le fonctionnement d’un seul service, la communication parmi les différents services de l’entreprise est inévitable. Pour l’entreprise, une communication efficace est très importante. De plus, pendant mon alternance, j’ai pu avoir l’occasion d’acquérir plusieurs nouvelles compétences telles que les techniques de communication, le web design et la mise en page du site Web, la production de la vidéo, etc.', 'HTML, CSS, JavaScript, Wix, Adobe PS, Adobe Pr, Google analytics', 'assets/png/aki.png'),
(1, 'toweb', 'CREATION DU SITE', 'Refonte du site', 'Refonte du site chez To Web Or Not To Web.', 'https://www.towebornottoweb.com/', 'Ma tâche consistait à refaire entièrement le site Web de l’entreprise en utilisant Wordpress. La tâche a duré un mois.', 'WordPress', 'assets/png/logo-toweb.png'),
(3, 'arn', 'ARN (ALSACE RÉSEAU NEUTRE) STAGE', 'Création et intégration des composantes visuelles d’animation dans le plateforme.', 'Refonte du site à compter du 15/01/2022 au 15/06/2022. L’association Alsace réseau neutre (ARN) a été créée en 2012 à Strasbourg en tant que fournisseur d’accès à Internet (FAI) associatif.', 'https://arn-fai.net/', 'L’association ARN désire obtenir un site qui présenterait brièvement l’organisme et ses valeurs, tout en mettant en avant les événements planifiés et les articles les plus importants du wiki. Elle souhaite également proposer un contenu textuel court et simple à comprendre par des non-spécialistes dans le domaine du Web. Les utilisateurs devront aussi être capables de trouver facilement les pages de connexion aux différents services de l’association. En ce qui concerne l’aspect visuel, ARN souhaite doter son site d’un design plus moderne. Le nouveau site devra être conforme aux valeurs de l’association. Cela implique notamment qu’il ne contiendra aucun traqueur.<br><br>Le site actuel, arn-fai.net, contient une quantité d’information considérable, mais mal hiérarchisée et inégalement répartie sur les pages, ce qui la rend difficile d’accès. Par exemple, la page contact ne possède pas de place dédiée dans le menu, et est accessible depuis le menu « à propos ». L’aspect graphique du site doit être modernisé. Effectivement, il n’a connu aucun changement depuis la création de l’association il y a neuf ans, alors que beaucoup de nouveaux thèmes (modifiables) ont vu le jour sur les CMS. Quant à la question de la responsivité, le site actuel n’a pas été pensé pour être consulté depuis de petits écrans ou des téléphones portables. À titre d’illustration, si le menu n’a pas la place nécessaire sur l’écran pour se dérouler, il ne s’affichera simplement pas. Enfin, comme le site est uniquement disponible en français, il a une portée plus réduite et ne touchera que les personnes parlant cette langue, ce qui exclut la communauté non-francophone pouvant potentiellement être intéressée par les services de l’association.', 'HTML, CSS, JavaScript, Grav, Docker, Git, PHP, Trados', 'assets/png/arn.png'),
(4, 'opinaka', 'OPINAKA STAGE', 'Création et intégration des composantes visuelles d’animation dans le plateforme.', 'Stage à compter du 25 / 05 / 2020 au 25/07/2020. Opinaka, située à Montpellier, a été créé il y a 5 ans. L’entreprise fonctionne dans le domaine d’analyse avancée de données telle que détection de doublons, nettoyage de données, prédiction, etc.', 'https://opinaka.com/', 'Mes tâches étaient de créer et intégrer des composantes visuelles d’animation dans la plateforme WordPress de l’entreprise.', 'HTML, CSS, JavaScript, WordPress, Kibana, GSAP', 'assets/png/opinaka.png'),
(5, 'snow', 'UN SITE CRÉÉ AVEC<br>HTML, CSS ET JS', 'Un site contenant plusieurs fonctions réalisé en 8 heures. Purement en HTML, CSS et JS.', 'Un site contenant plusieurs fonctions réalisé en 8 heures.<br>Purement en HTML, CSS et JS.', 'https://github.com/yuyuyuxiang/simplePage-snow', 'Il s’agit d’un projet pour le cours d’animation de site web.', 'HTML, CSS, JavaScript, JQuery, VS Code', 'assets/png/snow.png'),
(6, 'demineur', 'JEU DU DÉMINEUR EN PYTHON', 'Le démineur est un jeu de réflexion dont le but est de localiser des mines cachées dans un champ virtuel avec pour seule indication le nombre de mines dans les zones adjacentes.', 'Le démineur est un jeu de réflexion dont le but est de localiser des mines cachées dans un champ virtuel avec pour seule indication le nombre de mines dans les zones adjacentes.', 'https://github.com/yuyuyuxiang/jeu-demineur', 'Dans ce projet j’implémente le jeu du démineur. Il s’agit pour le joueur d’incarner un agent de l’équipe de déminage chargé de sécuriser un champ de mines. J’ai réalisé certaines fonctions ci-dessous :<br>\r\n- Différentes difficultés<br>\r\n- Le temps<br>\r\n- Le nombre de cases découvertes<br>\r\n- Le score<br>\r\n- Creuser la case<br>\r\n- Poser un drapeau<br>\r\n- Lever un drapeau<br>\r\n- Etc...<br>\r\nL’objectifs de mon projet est de me permettre d’apprendre un nouveau langage de programme (Python) et de maîtriser PyCharm afin d’enrichir mes connaissances informatiques. J’assure un volume horaire de travail personnel de 60 heures.', 'Python, PyCharm', 'assets/png/demineur.png');

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
