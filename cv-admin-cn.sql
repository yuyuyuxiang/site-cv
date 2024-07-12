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
(7, 'passionauto', '汽车网站开发', '创建一个介绍汽车和汽车信息的网站，并包含一个内容管理的后台。', '在我CAWEB硕士的学徒制工作期间，创建了一个介绍汽车和汽车信息的网站，并包含一个内容管理的后台。', 'https://passionautoprestige.fr/', 'Passion Auto是一家位于斯特拉斯堡的欧洲二手跑车供应商，是我们的客户之一。他们选择我们来创建该公司的官方网站。\r\n<br><br>\r\n客户需要一个网站的前端界面来展示销售的车辆、公司的服务和其他他们想展示给用户的信息。除了前端界面，客户还需要一个管理界面来管理和编辑网站上显示的内容，特别是公司所有销售车辆的描述和信息。此外，在管理后台，客户需要有能力添加和管理不同的管理账户。要做到这一点，在项目中必须使用诸如HTML、CSS、JavaScript、jQuery和PHP等工具。我没有使用其他框架，如Symfony，因为这不是一个大项目，代码量也不是很大，所以没有必要使用框架。\r\n<br><br>\r\n最后，项目交付后，客户希望我们为网站开发一个博客功能。然而，我决定不值得再使用纯代码来开发，所以我选择了WordPress来完成博客模块。当我使用WordPress开发博客网站时，我当然要创建一个子主题。最后，在博客创建完成后，我在网站服务器上创建了一个子域名来放置WordPress的文件夹，然后将子域名的URL整合到网站的主导航菜单中。\r\n<br><br>\r\n总之，Passion Auto的项目是成功的，其结果是为用户和管理员提供了一个高效和用户友好的网站。', 'HTML, CSS, JavaScript, PHP, Bootstrap, jQuery, 数据库, Git, WordPress', 'assets/png/passionauto.png'),
(2, 'aki', '网站开发学徒', '作为一名IT学徒，我的任务包括帮助公司创建网站，管理社交网络和处理客户交流沟通。', '该勤工俭学计划从2020年9月21日至2021年9月10日，在Aki公司开展。', 'https://www.aki2010.com/', '我在实习期间的任务是创建、维护和更新该餐厅的网站。同时，我还负责客户服务。我需要与客户协商交流，帮助他们解决问题，记下他们的订单，并合理地规划这些订单的时间。我还负责管理Aki的社交网络，如Facebook、TripAdvisor等。对于餐厅未来的扩张和发展，我需要与我的老板曾女士讨论Aki的市场营销策略，以找到一个更合适和正确的方向。<br><br>在勤工俭学计划中，我主要负责的网站的创建工作是我非常感兴趣的领域，这项工作丰富了我的专业知识，让我更加了解了餐饮企业的组织和运作。我还充分的认识到，除了单个部门的独立运作，公司不同部门之间的沟通也是帮助公司发展和强大的必经之路。对于公司来说，有效的沟通是非常重要的。此外，得益于工作实习的经历，我有机会获得一些新技能，如沟通技巧、网页设计和网站布局、视频制作等等。', 'HTML, CSS, JavaScript, Wix, Adobe PS, Adobe Pr, Google analytics', 'assets/png/aki.png'),
(1, 'toweb', '设计开发To Web Or Not To Web公司的网站', '网站重建', '重新设计To Web Or Not To Web公司的网站。', 'https://www.towebornottoweb.com/', '我的任务是使用Wordpress重新完全设计公司的整个网站。任务持续了一个月。', 'WordPress', 'assets/png/logo-toweb.png'),
(3, 'arn', 'ARN (Alsace Réseau Neutre)实习', '重新设计网站和翻译文章。', '从2022年1月15日至2022年6月15日，网站重新设计。阿尔萨斯中立网络协会（ARN）于2012年在斯特拉斯堡成立，是一个协会性的互联网服务提供商（ISP）。', 'https://arn-fai.net/', 'ARN希望有一个网站能够简要介绍该组织及其价值观，同时突出计划中的活动和维基中最重要的文章，它还希望该网站能提供非网络专家容易理解的简短文本内容，用户还应该能够轻易地找到协会不同服务的登录页面。就视觉方面而言，ARN希望给其网站一个更现代的设计。新的网站应该与协会的价值观相一致。这意味着它将不包含任何跟踪器。<br><br>目前的网站arn-fai.net包含了相当多的信息，但它的组织性很差，而且在各网页上的分布不均匀，使其难以访问。例如，联系页面在菜单中没有一个专门的位置，可以从 \"关于 \"菜单中访问。网站的图形方面需要进行现代化改造。事实上，自九年前协会成立以来，它一直没有改变过，而在CMS上却出现了许多新的（可修改的）主题。至于响应性的问题，目前的网站并不是为了从小屏幕或手机上查阅而设计的。例如，如果菜单在屏幕上没有足够的空间来展开，它就根本不会出现。最后，由于该网站只有法语版本，它的覆盖面较窄，只能接触到讲这种语言的人，因此排除了可能对协会服务感兴趣的非法语社区。', 'HTML, CSS, JavaScript, Grav, Docker, Git, PHP, Trados', 'assets/png/arn.png'),
(4, 'opinaka', 'Opinaka实习', '创建并将视觉动画组件整合到平台中。', '实习时间为25 / 05 / 2020至25 / 07 / 2020。位于蒙彼利埃的Opinaka，创建于5年前。该公司在先进的数据分析领域工作，如重复检测、数据清理、预测等。', 'https://opinaka.com/', '我的任务是创建和整合视觉动画组件到该公司的WordPress平台。', 'HTML, CSS, JavaScript, WordPress, Kibana, GSAP', 'assets/png/opinaka.png'),
(5, 'snow', '一个用HTML、CSS、JS和jQuery创建的网站', '一个包含几个功能的在8小时内创建的网站。使用纯粹的HTML、CSS和JS。', '一个在8小时内建成的多功能网站。<br>纯粹使用HTML、CSS和JS。', 'https://github.com/yuyuyuxiang/simplePage-snow', '这是一个网站动画课程的项目。', 'HTML, CSS, JavaScript, JQuery, VS Code', 'assets/png/snow.png'),
(6, 'demineur', 'Python实现的扫雷游戏', '扫雷是一个益智游戏，目标是找到隐藏在虚拟领域中的地雷，仅以相邻区域的地雷数量作为指示。', '扫雷是一个益智游戏，目标是找到隐藏在虚拟领域中的地雷，仅以相邻区域的地雷数量作为指示。', 'https://github.com/yuyuyuxiang/jeu-demineur', '在这个项目中，我完成了一个扫雷游戏。我实现了以下一些功能：<br>\r\n- 不同的困难等级<br>\r\n- 时间<br>\r\n- 被发掘的方块数量<br>\r\n- 分数<br>\r\n- 挖掘方块<br>\r\n- 放置旗帜<br>\r\n- 移走旗帜<br>\r\n- 等等...<br>\r\n该项目的目的是学习一种新的程序语言（Python），并掌握PyCharm，以丰富我的计算机知识。我的个人工作量为60小时。', 'Python, PyCharm', 'assets/png/demineur.png'),
(8, 'applipro', 'Applipro全栈开发工程师', '从2022年10月至今，担任全栈开发工程师一职，帮助公司开发自己的内容管理系统。', '从2022年10月至今，担任全栈开发工程师一职，帮助公司开发自己的内容管理系统。', '#', '• 负责公司内容管理系统的前端开发工作，使用React框架Next.JS。<br>\r\n• 将项目的起步阶段的React代码使用Next.JS重构，实现了项目前端部分的整体构建，并集成了个人信息，登录注册，用户 的不同平台切换，展示后端编辑的内容，消息提醒等模块。<br>\r\n• 涉及了大量数据接入，api以及库的使用。通过应用服务器渲染，使该系统的响应速度被显著提高。<br>\r\n• 使用AJAX解决了循环请求数据处理的问题，提升用户体验。<br>\r\n• 对于UI/UX的设计还原度达到了95%，并高度实现响应式布局。<br>\r\n• 参与Blog及文件上传管理模块的后端开发，使用Symfony。<br>\r\n• 使用Git进行版本控制，多人协同工作，实现了高效的团队开发。', 'React, Next.JS, Git, Symfony, MySQL', 'assets/png/applipro.png');

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
(5, 'JavaScript', '编程语言', 'prog_lang'),
(6, 'PHP', '编程语言', 'prog_lang'),
(11, 'WordPress', 'CMS', 'cms'),
(12, 'Drupal', 'CMS', 'cms'),
(13, 'Grav', 'CMS', 'cms'),
(14, 'Wix', 'CMS', 'cms'),
(16, 'MacOS', '工作环境', 'work_env'),
(17, 'Linux', '工作环境', 'work_env'),
(18, 'Windows', '工作环境', 'work_env'),
(19, 'SQL', '数据库', 'db'),
(20, 'MySQL', '数据库', 'db'),
(21, 'SQLDeveloper', '数据库', 'db'),
(22, 'Word', 'Microsoft office', 'microsoft'),
(23, 'Excel', 'Microsoft office', 'microsoft'),
(24, 'PowerPoint', 'Microsoft office', 'microsoft'),
(25, 'Photoshop', 'Adobe', 'adobe'),
(26, 'inDesign', 'Adobe', 'adobe'),
(27, '独立自主', '我的性格', 'personal_skill'),
(28, '求知欲', '我的性格', 'personal_skill'),
(29, '高效', '我的性格', 'personal_skill'),
(30, '团队精神', '我的性格', 'personal_skill'),
(32, 'HTML', '编程语言', 'prog_lang'),
(33, 'CSS', '编程语言', 'prog_lang'),
(34, 'React JS', '框架', 'framework'),
(35, 'Symfony', '框架', 'framework'),
(36, 'Next.js', '框架', 'framework'),
(37, 'jQuery', '框架', 'framework'),
(39, 'Git', '工具', 'tool'),
(40, 'Google Analytics', '工具', 'tool'),
(41, 'Bootstrap', '框架', 'framework');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
