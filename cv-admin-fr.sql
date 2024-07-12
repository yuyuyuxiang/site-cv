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
(0, '+33 699427731', 'yuxiang.zhang@yuxiangzhang123.com', '6 rue de Rome, 67000 Strasbourg');

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
(7, 'passionauto', 'CRÉATION DU SITE PASSION AUTO PRESTIGE', 'Création d’un site web qui présente des voitures et des informations sur les voitures et qui contient un back-office pour la gestion du contenu.', 'Création d’un site web qui présente des voitures et des informations sur les voitures et qui contient un back-office pour la gestion du contenu, dans le cadre de mon alternance de master CAWEB.', 'https://passionautoprestige.fr/', 'Passion Auto, un fournisseur européen de voitures de sport d’occasion basé à Strasbourg, est l’un de nos clients. Ils nous ont choisi pour créer le site web officiel de la société. \r\n<br><br>\r\nLe client avait besoin d’une interface frontale pour le site web afin de présenter les véhicules à vendre, les services de la société et d’autres informations qu’ils voulaient présenter à l’utilisateur. En plus de l’interface frontale, le client avait besoin d’une interface administrative pour gérer et éditer le contenu affiché sur le site web, en particulier la description et les informations de tous les véhicules à vendre de la société. En outre, dans le back-office d’administration, le client avait besoin de la possibilité d’ajouter et de gérer différents comptes d’administration. Pour ce faire, l’utilisation d’outils tels que HTML, CSS, JavaScript, jQuery et PHP était nécessaire dans le projet. Je n’ai pas utilisé d’autres frameworks tels que Symfony, car il ne s’agissait pas d’un grand projet et la quantité de code n’était pas énorme, il n’était donc pas nécessaire d’utiliser un framework.\r\n<br><br>\r\nEnfin, après la livraison du projet, notre client a souhaité que nous développions une fonctionnalité de blog pour le site web. Cependant, j’ai décidé que ce n’était pas la peine d’utiliser encore du code pur pour le développer, et j’ai donc choisi WordPress pour accomplir le module de blog. Lorsque j’ai développé le site du blog en utilisant WordPress, j’ai bien sûr créé un thème enfant. Finalement, après la création du blog, j’ai créé un sous-domaine sur le serveur du site web pour y placer les dossier WordPress, puis j’ai intégré l’URL du sous-domaine dans le menu de navigation du site web principal.\r\n<br><br>\r\nEn conclusion, le projet réalisé pour Passion Auto a été un succès et le résultat est un site web efficace et convivial pour les utilisateurs et les administrateurs.', 'HTML, CSS, JavaScript, PHP, Bootstrap, jQuery, Base de données, Git, WordPress', 'assets/png/passionauto.png'),
(2, 'aki', 'ALTERNANCE CRÉATION WEB', 'En tant qu’alternant en informatique, mes tâches consistent à aider l’entreprise à créer un site web, à gérer les réseaux sociaux et à m’occuper de la communication avec les clients.', 'Cette alternance se développe dans l’entreprise Aki à compter du 21/09/2020 au 10/09/2021.', 'https://www.aki2010.com/', 'Mes tâches pendant mon alternance étaient de créer, maintenir et mettre à jour le site web pour le restaurant. En parallèle, je suis également responsable du service client. Je dois répondre aux questions des clients, les aider à résoudre le problème et prendre note de leurs commandes, et planifier le temps de ces commandes de manière raisonnable. Je m’occupe aussi de gérer les réseaux sociaux d’Aki tels que Facebook, TripAdvisor, etc. Je dois, pour l’expansion et le développement futurs du restaurant, discuter du chemin de développement de l’Aki avec Mme ZENG afin de trouver une direction plus appropriée et plus correcte.<br><br>Grâce à l’alternance, j’ai principalement travaillé sur la création du site Web. Tout d’abord c’est un domaine qui m’intéresse fortement. Et ce travail me fait enrichir mes connaissances. J’ai aussi appris le fonctionnement d’une entreprise, et j’ai découvert comment elle était organisée. J’ai également appris que pour faire un travail, ce n’est pas seulement le fonctionnement d’un seul service, la communication parmi les différents services de l’entreprise est inévitable. Pour l’entreprise, une communication efficace est très importante. De plus, pendant mon alternance, j’ai pu avoir l’occasion d’acquérir plusieurs nouvelles compétences telles que les techniques de communication, le web design et la mise en page du site Web, la production de la vidéo, etc.', 'HTML, CSS, JavaScript, Wix, Adobe PS, Adobe Pr, Google analytics', 'assets/png/aki.png'),
(1, 'toweb', 'CREATION DU SITE', 'Refonte du site', 'Refonte du site chez To Web Or Not To Web.', 'https://www.towebornottoweb.com/', 'Ma tâche consistait à refaire entièrement le site Web de l’entreprise en utilisant Wordpress. La tâche a duré un mois.', 'WordPress', 'assets/png/logo-toweb.png'),
(3, 'arn', 'ARN (ALSACE RÉSEAU NEUTRE) STAGE', 'Refonte totale du site web de l’association et traduction du site web.', 'Refonte du site à compter du 15/01/2022 au 15/06/2022. L’association Alsace réseau neutre (ARN) a été créée en 2012 à Strasbourg en tant que fournisseur d’accès à Internet (FAI) associatif.', 'https://arn-fai.net/', 'L’association ARN désire obtenir un site qui présenterait brièvement l’organisme et ses valeurs, tout en mettant en avant les événements planifiés et les articles les plus importants du wiki. Elle souhaite également proposer un contenu textuel court et simple à comprendre par des non-spécialistes dans le domaine du Web. Les utilisateurs devront aussi être capables de trouver facilement les pages de connexion aux différents services de l’association. En ce qui concerne l’aspect visuel, ARN souhaite doter son site d’un design plus moderne. Le nouveau site devra être conforme aux valeurs de l’association. Cela implique notamment qu’il ne contiendra aucun traqueur.<br><br>Le site actuel, arn-fai.net, contient une quantité d’information considérable, mais mal hiérarchisée et inégalement répartie sur les pages, ce qui la rend difficile d’accès. Par exemple, la page contact ne possède pas de place dédiée dans le menu, et est accessible depuis le menu « à propos ». L’aspect graphique du site doit être modernisé. Effectivement, il n’a connu aucun changement depuis la création de l’association il y a neuf ans, alors que beaucoup de nouveaux thèmes (modifiables) ont vu le jour sur les CMS. Quant à la question de la responsivité, le site actuel n’a pas été pensé pour être consulté depuis de petits écrans ou des téléphones portables. À titre d’illustration, si le menu n’a pas la place nécessaire sur l’écran pour se dérouler, il ne s’affichera simplement pas. Enfin, comme le site est uniquement disponible en français, il a une portée plus réduite et ne touchera que les personnes parlant cette langue, ce qui exclut la communauté non-francophone pouvant potentiellement être intéressée par les services de l’association.', 'HTML, CSS, JavaScript, Grav, Docker, Git, PHP, Trados', 'assets/png/arn.png'),
(4, 'opinaka', 'OPINAKA STAGE', 'Création et intégration des composantes visuelles d’animation dans le plateforme.', 'Stage à compter du 25 / 05 / 2020 au 25/07/2020. Opinaka, située à Montpellier, a été créé il y a 5 ans. L’entreprise fonctionne dans le domaine d’analyse avancée de données telle que détection de doublons, nettoyage de données, prédiction, etc.', 'https://opinaka.com/', 'Mes tâches étaient de créer et intégrer des composantes visuelles d’animation dans la plateforme WordPress de l’entreprise.', 'HTML, CSS, JavaScript, WordPress, Kibana, GSAP', 'assets/png/opinaka.png'),
(5, 'snow', 'UN SITE CRÉÉ AVEC<br>HTML, CSS ET JS', 'Un site contenant plusieurs fonctions réalisé en 8 heures. Purement en HTML, CSS et JS.', 'Un site contenant plusieurs fonctions réalisé en 8 heures.<br>Purement en HTML, CSS et JS.', 'https://github.com/yuyuyuxiang/simplePage-snow', 'Il s’agit d’un projet individuel pour le cours d’animation de site web.', 'HTML, CSS, JavaScript, JQuery, VS Code', 'assets/png/snow.png'),
(6, 'demineur', 'JEU DU DÉMINEUR EN PYTHON', 'Le démineur est un jeu de réflexion dont le but est de localiser des mines cachées dans un champ virtuel avec pour seule indication le nombre de mines dans les zones adjacentes.', 'Le démineur est un jeu de réflexion dont le but est de localiser des mines cachées dans un champ virtuel avec pour seule indication le nombre de mines dans les zones adjacentes.', 'https://github.com/yuyuyuxiang/jeu-demineur', 'Dans ce projet j’implémente le jeu du démineur. Il s’agit pour le joueur d’incarner un agent de l’équipe de déminage chargé de sécuriser un champ de mines. J’ai réalisé certaines fonctions ci-dessous :<br>\r\n- Différentes difficultés<br>\r\n- Le temps<br>\r\n- Le nombre de cases découvertes<br>\r\n- Le score<br>\r\n- Creuser la case<br>\r\n- Poser un drapeau<br>\r\n- Lever un drapeau<br>\r\n- Etc...<br>\r\nL’objectifs de mon projet est de me permettre d’apprendre un nouveau langage de programme (Python) et de maîtriser PyCharm afin d’enrichir mes connaissances informatiques. J’assure un volume horaire de travail personnel de 60 heures.', 'Python, PyCharm', 'assets/png/demineur.png'),
(8, 'applipro', 'APPLIPRO - développement full-stack', 'Depuis octobre 2022, en tant qu’ingénieur en développement full-stack, j’aide l’entreprise à développer son propre système de gestion de contenu.', 'Depuis octobre 2022, en tant qu’ingénieur en développement full-stack, j’aide l’entreprise à développer son propre système de gestion de contenu.', '#', '- Responsable du développement frontal du système de gestion de contenu de l’entreprise, en utilisant le framework React Next.JS.<br>\r\n- JS. Refonte du code React dans la phase initiale du projet en utilisant Next.JS, réalisation de la construction globale de la partie front-end du projet, et intégration des informations personnelles, de la connexion et de l’enregistrement, de la commutation entre les différentes plateformes pour les utilisateurs, de l’affichage du contenu édité dans le back-end, et des messages d’alerte et autres modules.<br>\r\n- Implication de beaucoup d’accès aux données, d’utilisation d’api et de bibliothèques. Le temps de réponse du système a été considérablement amélioré par le rendu du serveur d’application.<br>\r\n- Utilisation d’AJAX résout le problème du traitement cyclique des données et améliore l’expérience de l’utilisateur.<br>\r\n- Restauration à 95 % de la conception de l’UI/UX et mise en page hautement réactive.<br>\r\n- Participation au développement du back-end du blog et du module de gestion des fichiers, en utilisant Symfony.<br>\r\n- Utilisation de Git pour le contrôle des versions et collaboration avec plusieurs personnes pour réaliser un développement efficace en équipe.', 'React, Next.JS, Git, Symfony, MySQL', 'assets/png/applipro.png');

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
(5, 'JavaScript', 'Langages de programmation', 'prog_lang'),
(6, 'PHP', 'Langages de programmation', 'prog_lang'),
(11, 'WordPress', 'CMS', 'cms'),
(12, 'Drupal', 'CMS', 'cms'),
(13, 'Grav', 'CMS', 'cms'),
(14, 'Wix', 'CMS', 'cms'),
(16, 'MacOS', 'Environnement de travail', 'work_env'),
(17, 'Linux', 'Environnement de travail', 'work_env'),
(18, 'Windows', 'Environnement de travail', 'work_env'),
(19, 'SQL', 'Base de données', 'db'),
(20, 'MySQL', 'Base de données', 'db'),
(21, 'SQLDeveloper', 'Base de données', 'db'),
(22, 'Word', 'Microsoft office', 'microsoft'),
(23, 'Excel', 'Microsoft office', 'microsoft'),
(24, 'PowerPoint', 'Microsoft office', 'microsoft'),
(25, 'Photoshop', 'Adobe', 'adobe'),
(26, 'inDesign', 'Adobe', 'adobe'),
(27, 'Autonomie', 'Savoirs-être', 'personal_skill'),
(28, 'Curiosité', 'Savoirs-être', 'personal_skill'),
(29, 'Efficacité', 'Savoirs-être', 'personal_skill'),
(30, 'Esprit d’équipe', 'Savoirs-être', 'personal_skill'),
(32, 'HTML', 'Langages de programmation', 'prog_lang'),
(36, 'CSS', 'Langages de programmation', 'prog_lang'),
(39, 'Next JS', 'Frameworks', 'framework'),
(40, 'jQuery', 'Frameworks', 'framework'),
(41, 'Symfony', 'Frameworks', 'framework'),
(42, 'React JS', 'Frameworks', 'framework'),
(44, 'Git', 'Outils', 'tool'),
(45, 'Google Analytics', 'Outils', 'tool'),
(46, 'Bootstrap', 'Frameworks', 'framework');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
