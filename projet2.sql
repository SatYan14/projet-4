-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 28 fév. 2019 à 13:00
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet2`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `reported` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `author`, `comment`, `post_id`, `reported`) VALUES
(1, 'Yan', 'Super cet article !', 1, ''),
(19, 'Frank', 'Premier article super !', 1, ''),
(3, 'Nico', 'En un seul mot : WOW !', 2, ''),
(8, 'Dylan', 'Finir sur un chapitre aussi beau... Il semblerait que ma vie n\'ait plus de sens à présent...', 6, ''),
(9, 'Critique littéraire', 'Après de nombreuses années, j\'ai enfin pu redécouvrir la plume de Jean Forteroche à travers ce blog et cette aventure au fin fond de l\'Alaska.\r\n', 6, ''),
(10, 'Brutus', 'Un délice pour les yeux !', 4, ''),
(14, 'Yan', 'Ce chapitre aussi est super cool !', 4, ''),
(15, 'Jean-Luc', 'Mais que va t-il se passer dans le dernier chapitre ?!', 5, ''),
(18, 'Dylan', 'Super troisième article j\'ai adoré c\'était vraiment super !', 3, ''),
(25, 'Dylan', 'WOW', 13, ''),
(29, 'Dylan', 'C\'est magnifique, j\'en pleure... Saloperies de ninjas qui coupent des oignons', 23, '');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `date_added`) VALUES
(1, 'Le premier chapitre de mon livre', '<p>Voici mon premier chapitre modifi&eacute; directement via le tableau de bord</p>', '2019-01-02 09:18:06'),
(13, 'Mon 7ème chapitre déjà !', '<p>C\'est mon 7&egrave;me chapitre mais vu que ce n\'est pas r&eacute;ellement le 7&egrave;me chapitre que je publie, il devrait avoir un id bien sup&eacute;rieur &agrave; 7 mais il devrait s\'afficher chapitre 7 sur la page d\'accueil quand m&ecirc;me gr&acirc;ce &agrave; la technique que je viens de trouver !</p>', '2019-02-25 17:50:56'),
(2, 'Mon second post', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi labore eligendi numquam laboriosam provident at assumenda, quam aliquid saepe minus iste sint qui doloremque sed? Quas reprehenderit dolores facere! Quo doloremque dicta ducimus nobis ratione? Suscipit et a pariatur! Corrupti, ducimus rem inventore atque aliquid accusamus ipsam numquam ullam accusantium! Dolores doloremque sit quaerat reprehenderit vero pariatur provident dolorum animi beatae voluptatem! Dolorem assumenda, iste accusantium doloribus veritatis, sapiente, ea accusamus incidunt aperiam non eaque dolor odit distinctio adipisci reiciendis nisi quia ducimus libero ipsa modi porro tempore? Quisquam laudantium molestias dolorum tempore fugiat expedita placeat labore temporibus. Officia quod nobis, error non dolores, itaque et modi voluptatum similique tempora quae architecto fugiat repudiandae dolor, consequatur cumque hic veniam quia delectus quasi. Perspiciatis ipsa iure facilis vero culpa quis, dolore, inventore amet sit voluptates ex aliquam quae, quod eum quibusdam neque sed praesentium porro saepe esse modi animi? Ex, voluptas nam voluptates aliquid quaerat accusamus. Qui vero, numquam atque velit sit iste harum fuga delectus dignissimos quis culpa possimus nesciunt adipisci quam veritatis illo assumenda laudantium quod beatae dicta ex amet eaque? Asperiores delectus distinctio, sint voluptates reprehenderit aperiam amet minus possimus perferendis suscipit dolores similique quae labore ducimus ipsa facere a? Rerum, iusto totam. Vero tempora laudantium facilis doloremque sed dignissimos perspiciatis iusto, repellendus id recusandae repellat inventore, praesentium error nobis eum nam mollitia optio nostrum suscipit ullam commodi. Excepturi, deleniti! Quibusdam accusamus amet odio ducimus, repellat at. Dolorum omnis sunt nihil ipsa repellat! Illum cupiditate incidunt reprehenderit dolor ratione eos quaerat eaque optio ullam facilis? Qui accusantium nisi quis, velit modi voluptate neque reiciendis repellendus. Ipsa inventore tempora modi iste quasi blanditiis eius, ipsum eos minus natus dolorum magnam, distinctio illum libero, quidem dolores? Culpa quae, corporis laborum reiciendis modi provident est ratione ut odit in voluptates qui vero neque! Harum sed, temporibus vel nulla repellendus blanditiis nam optio quibusdam omnis officiis mollitia aut quam rem inventore voluptatum, cum tenetur numquam perspiciatis iste, beatae aliquid sint illum minus. Ea, fugit aspernatur. Molestiae repellat error pariatur ab molestias atque? In libero nemo odio dolore voluptatibus sapiente deserunt quas perferendis!', '2019-01-04 16:32:00'),
(3, 'Mon 3ème titre test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi labore eligendi numquam laboriosam provident at assumenda, quam aliquid saepe minus iste sint qui doloremque sed? Quas reprehenderit dolores facere! Quo doloremque dicta ducimus nobis ratione? Suscipit et a pariatur! Corrupti, ducimus rem inventore atque aliquid accusamus ipsam numquam ullam accusantium! Dolores doloremque sit quaerat reprehenderit vero pariatur provident dolorum animi beatae voluptatem! Dolorem assumenda, iste accusantium doloribus veritatis, sapiente, ea accusamus incidunt aperiam non eaque dolor odit distinctio adipisci reiciendis nisi quia ducimus libero ipsa modi porro tempore? Quisquam laudantium molestias dolorum tempore fugiat expedita placeat labore temporibus. Officia quod nobis, error non dolores, itaque et modi voluptatum similique tempora quae architecto fugiat repudiandae dolor, consequatur cumque hic veniam quia delectus quasi. Perspiciatis ipsa iure facilis vero culpa quis, dolore, inventore amet sit voluptates ex aliquam quae, quod eum quibusdam neque sed praesentium porro saepe esse modi animi? Ex, voluptas nam voluptates aliquid quaerat accusamus. Qui vero, numquam atque velit sit iste harum fuga delectus dignissimos quis culpa possimus nesciunt adipisci quam veritatis illo assumenda laudantium quod beatae dicta ex amet eaque? Asperiores delectus distinctio, sint voluptates reprehenderit aperiam amet minus possimus perferendis suscipit dolores similique quae labore ducimus ipsa facere a? Rerum, iusto totam. Vero tempora laudantium facilis doloremque sed dignissimos perspiciatis iusto, repellendus id recusandae repellat inventore, praesentium error nobis eum nam mollitia optio nostrum suscipit ullam commodi. Excepturi, deleniti! Quibusdam accusamus amet odio ducimus, repellat at. Dolorum omnis sunt nihil ipsa repellat! Illum cupiditate incidunt reprehenderit dolor ratione eos quaerat eaque optio ullam facilis? Qui accusantium nisi quis, velit modi voluptate neque reiciendis repelulla repellendus blanditiis nam optio quibusdam omnis officiis mollitia aut quam rem inventore voluptatum, cum tenetur numquam perspiciatis iste, beatae aliquid sint illum minus. Ea, fugit aspernatur. Molestiae repellat error pariatur ab molestias atque? In libero nemo odio dolore voluptatibus sapiente deserunt quas perferendis!', '2019-01-05 04:24:12'),
(4, 'Quatrième chapitre si je me souviens bien', 'Latius iam disseminata licentia onerosus bonis omnibus Caesar nullum post haec adhibens modum orientis latera cuncta vexabat nec honoratis parcens nec urbium primatibus nec plebeiis.\r\n\r\nUltima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum aemulas: Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas.\r\n\r\nNec minus feminae quoque calamitatum participes fuere similium. nam ex hoc quoque sexu peremptae sunt originis altae conplures, adulteriorum flagitiis obnoxiae vel stuprorum. inter quas notiores fuere Claritas et Flaviana, quarum altera cum duceretur ad mortem, indumento, quo vestita erat, abrepto, ne velemen quidem secreto membrorum sufficiens retinere permissa est. ideoque carnifex nefas admisisse convictus inmane, vivus exustus est.\r\n\r\nAccedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.\r\n\r\nInter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.\r\n\r\nUnde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.\r\n\r\nCum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.\r\n\r\nSaraceni tamen nec amici nobis umquam nec hostes optandi, ultro citroque discursantes quicquid inveniri poterat momento temporis parvi vastabant milvorum rapacium similes, qui si praedam dispexerint celsius, volatu rapiunt celeri, aut nisi impetraverint, non inmorantur.\r\n\r\nSed fruatur sane hoc solacio atque hanc insignem ignominiam, quoniam uni praeter se inusta sit, putet esse leviorem, dum modo, cuius exemplo se consolatur, eius exitum expectet, praesertim cum in Albucio nec Pisonis libidines nec audacia Gabini fuerit ac tamen hac una plaga conciderit, ignominia senatus.\r\n\r\nHacque adfabilitate confisus cum eadem postridie feceris, ut incognitus haerebis et repentinus, hortatore illo hesterno clientes numerando, qui sis vel unde venias diutius ambigente agnitus vero tandem et adscitus in amicitiam si te salutandi adsiduitati dederis triennio indiscretus et per tot dierum defueris tempus, reverteris ad paria perferenda, nec ubi esses interrogatus et quo tandem miser discesseris, aetatem omnem frustra in stipite conteres summittendo.', '2019-02-01 13:06:00'),
(5, 'Cinquième chapitre, après celui-là j\'en ferais un dernier', 'Latius iam disseminata licentia onerosus bonis omnibus Caesar nullum post haec adhibens modum orientis latera cuncta vexabat nec honoratis parcens nec urbium primatibus nec plebeiis.\r\n\r\nUltima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum aemulas: Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas.\r\n\r\nNec minus feminae quoque calamitatum participes fuere similium. nam ex hoc quoque sexu peremptae sunt originis altae conplures, adulteriorum flagitiis obnoxiae vel stuprorum. inter quas notiores fuere Claritas et Flaviana, quarum altera cum duceretur ad mortem, indumento, quo vestita erat, abrepto, ne velemen quidem secreto membrorum sufficiens retinere permissa est. ideoque carnifex nefas admisisse convictus inmane, vivus exustus est.\r\n\r\nAccedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.\r\n\r\nInter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.\r\n\r\nUnde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita.\r\n\r\nCum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.\r\n\r\nHacque adfabilitate confisus cum eadem postridie feceris, ut incognitus haerebis et repentinus, hortatore illo hesterno clientes numerando, qui sis vel unde venias diutius ambigente agnitus vero tandem et adscitus in amicitiam si te salutandi adsiduitati dederis triennio indiscretus et per tot dierum defueris tempus, reverteris ad paria perferenda, nec ubi esses interrogatus et quo tandem miser discesseris, aetatem omnem frustra in stipite conteres summittendo.', '2019-02-02 09:42:12'),
(6, 'Nous y voilà, le dernier chapitre de mon bouquin', '<p>Latius iam disseminata licentia onerosus bonis omnibus Caesar nullum post haec adhibens modum orientis latera cuncta vexabat nec honoratis parcens nec urbium primatibus nec plebeiis. Ultima Syriarum est Palaestina per intervalla magna protenta, cultis abundans terris et nitidis et civitates habens quasdam egregias, nullam nulli cedentem sed sibi vicissim velut ad perpendiculum aemulas: Caesaream, quam ad honorem Octaviani principis exaedificavit Herodes, et Eleutheropolim et Neapolim itidemque Ascalonem Gazam aevo superiore exstructas. Nec minus feminae quoque calamitatum participes fuere similium. nam ex hoc quoque sexu peremptae sunt originis altae conplures, adulteriorum flagitiis obnoxiae vel stuprorum. inter quas notiores fuere Claritas et Flaviana, quarum altera cum duceretur ad mortem, indumento, quo vestita erat, abrepto, ne velemen quidem secreto membrorum sufficiens retinere permissa est. ideoque carnifex nefas admisisse convictus inmane, vivus exustus est. Accedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior. Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros. Unde Rufinus ea tempestate praefectus praetorio ad discrimen trusus est ultimum. ire enim ipse compellebatur ad militem, quem exagitabat inopia simul et feritas, et alioqui coalito more in ordinarias dignitates asperum semper et saevum, ut satisfaceret atque monstraret, quam ob causam annonae convectio sit impedita. Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur. Saraceni tamen nec amici nobis umquam nec hostes optandi, ultro citroque discursantes quicquid inveniri poterat momento temporis parvi vastabant milvorum rapacium similes, qui si praedam dispexerint celsius, volatu rapiunt celeri, aut nisi impetraverint, non inmorantur.</p>', '2019-02-15 06:28:16');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `type`) VALUES
(1, 'mysuperadmin', '$2y$10$BEeKtXmaipkb4jY9QkZrauehF8w.8LAZc7E6WWCoNqVF.W9qbsIZm', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
