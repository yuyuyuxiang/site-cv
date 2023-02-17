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
-- Base de données : `cv-admin-cn`
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
(0, '+33 699427731', 'yuxiang.zhang@yuxiangzhang123.com', '6 rue de Rome, 67000 Strasbourg,<br>法国');

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
(2, 'aki', '网站开发学徒', '作为一名IT学徒，我的任务包括帮助公司创建网站，管理社交网络和处理客户交流沟通。', '这个勤工俭学计划是在Aki公司开展的， 从2020年9月21日至2021年9月10日。', 'https://www.aki2010.com/', '我在实习期间的任务是创建、维护和更新该餐厅的网站。同时，我还负责客户服务。我必须回答客户的问题，帮助他们解决问题，并记下他们的订单，合理地规划这些订单的时间。我还管理Aki的社交网络，如Facebook、TripAdvisor等。对于餐厅未来的扩张和发展，我必须与曾女士讨论安琪的发展道路，以找到一个更合适和正确的方向。<br><br>得益于勤工俭学计划，我主要从事网站的创建工作。首先，这是一个我非常感兴趣的领域。而这项工作丰富了我的知识。我还学习了公司如何运作，我发现公司是如何组织的。我还了解到，要做好一项工作，不仅仅是一个部门的运作，公司不同部门之间的沟通是不可避免的。对于公司来说，有效的沟通是非常重要的。此外，在工作实习期间，我有机会获得一些新技能，如沟通技巧、网页设计和网站布局、视频制作等等。', 'HTML, CSS, JavaScript, Wix, Adobe PS, Adobe Pr, Google analytics', 'assets/png/aki.png'),
(1, 'toweb', '设计开发To Web Or Not To Web公司的网站', '网站重建', '重新设计To Web Or Not To Web公司的网站。', 'https://www.towebornottoweb.com/', '我的任务是使用Wordpress重新完全设计公司的整个网站。任务持续了一个月。', 'WordPress', 'assets/png/logo-toweb.png'),
(3, 'arn', 'ARN (Alsace Réseau Neutre)实习', '重新设计网站和翻译文章。', '从2022年1月15日至2022年6月15日，网站重新设计。阿尔萨斯中立网络协会（ARN）于2012年在斯特拉斯堡成立，是一个协会性的互联网服务提供商（ISP）。', 'https://arn-fai.net/', 'ARN希望有一个网站，简要介绍该组织及其价值观，同时突出计划中的活动和维基中最重要的文章。它还希望提供非网络专家容易理解的简短文本内容。用户还应该能够轻易地找到协会不同服务的登录页面。就视觉方面而言，ARN希望给其网站一个更现代的设计。新的网站应该与协会的价值观相一致。这意味着它将不包含任何跟踪器。<br><br>目前的网站arn-fai.net包含了相当多的信息，但它的组织性很差，而且在各网页上的分布不均匀，使其难以访问。例如，联系页面在菜单中没有一个专门的位置，可以从 \"关于 \"菜单中访问。网站的图形方面需要进行现代化改造。事实上，自九年前协会成立以来，它一直没有改变过，而在CMS上却出现了许多新的（可修改的）主题。至于响应性的问题，目前的网站并不是为了从小屏幕或手机上查阅而设计的。例如，如果菜单在屏幕上没有足够的空间来展开，它就根本不会出现。最后，由于该网站只有法语版本，它的覆盖面较窄，只能接触到讲这种语言的人，因此排除了可能对协会服务感兴趣的非法语社区。', 'HTML, CSS, JavaScript, Grav, Docker, Git, PHP, Trados', 'assets/png/arn.png'),
(4, 'opinaka', 'Opinaka实习', '创建并将视觉动画组件整合到平台中。', '实习时间为25 / 05 / 2020至25 / 07 / 2020。位于蒙彼利埃的Opinaka，创建于5年前。该公司在先进的数据分析领域工作，如重复检测、数据清理、预测等。', 'https://opinaka.com/', '我的任务是创建和整合视觉动画组件到该公司的WordPress平台。', 'HTML, CSS, JavaScript, WordPress, Kibana, GSAP', 'assets/png/opinaka.png'),
(5, 'snow', '一个用HTML、CSS和JS<br>创建的网站', '一个包含几个功能的网站在8小时内创建。纯粹用HTML、CSS和JS。', '一个在8小时内建成的多功能网站。<br>纯粹用HTML、CSS和JS。', 'https://github.com/yuyuyuxiang/simplePage-snow', '这是一个网站动画课程的项目。', 'HTML, CSS, JavaScript, JQuery, VS Code', 'assets/png/snow.png'),
(6, 'demineur', 'Python实现的扫雷游戏', '扫雷是一个益智游戏，目标是找到隐藏在虚拟领域中的地雷，仅以相邻区域的地雷数量作为指示。', '扫雷是一个益智游戏，目标是找到隐藏在虚拟领域中的地雷，仅以相邻区域的地雷数量作为指示。', 'https://github.com/yuyuyuxiang/jeu-demineur', '在这个项目中，我正在实施排雷者游戏。玩家要扮演负责确保雷区安全的排雷队的特工。我实现了以下一些功能。<br>\r\n- 不同的困难等级<br>\r\n- 时间<br>\r\n- 被发掘的方块数量<br>\r\n- 分数<br>\r\n- 挖掘方块<br>\r\n- 放置旗帜<br>\r\n- 移走旗帜<br>\r\n- 等等...<br>\r\n我项目的目的是学习一种新的程序语言（Python），并掌握PyCharm，以丰富我的计算机知识。我的个人工作量为60小时。', 'Python, PyCharm', 'assets/png/demineur.png');

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
