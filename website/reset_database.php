<?php
    require_once("db.php");

    query_database("CREATE TABLE `Beers` (`id` int(11) NOT NULL,
                    `Brand` varchar(255) NOT NULL,
                    `Product` varchar(255) NOT NULL,
                    `Price` decimal(10,0) NOT NULL DEFAULT '0',
                    `Volume` decimal(10,0) NOT NULL DEFAULT '0',
                    `Proof` decimal(10,0) NOT NULL DEFAULT '0',
                    `Color` varchar(255) NOT NULL,
                    `Picture_path` varchar(255) NOT NULL,
                    `Country` varchar(255) NOT NULL,
                    `Type` varchar(255) NOT NULL,
                    `Website` varchar(255) NOT NULL,
                    `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    query_database("INSERT INTO `Beers` (`id`, `Brand`, `Product`, `Price`, `Volume`, `Proof`, `Color`, `Picture_path`, `Country`, `Type`, `Website`, `Date`) VALUES
(23, 'Grimbergen', 'Blonde', '5', '0', '3', 'Blond', 'Grim_blonde.png', 'Belgium', '', 'www.grimbergen.fr', '2016-10-26 13:41:14'),
(24, 'Grimbergen', 'Blanche', '3', '0', '87', 'White', 'Grim_blanche.png', 'Belgium', '', 'www.grimbergen.fr', '2016-10-26 13:57:57'),
(25, 'Grimbergen', 'Brune', '3', '0', '3', 'Red', 'Grim_brune.png', 'Belgium', '', 'www.grimbergen.fr', '2016-10-26 14:26:13'),
(26, 'Grimbergen', 'Prune', '3', '0', '3', 'Pear', 'Grim_poire.png', 'Belgium', '', 'www.grimbergen.fr', '2016-10-26 14:28:37'),
(27, 'Leffe', 'Tripel', '5', '0', '9', 'Blond', 'Leffe_triple.png', 'Belgium', '', 'www.leffe.com', '2016-10-26 19:20:17'),
(28, 'Leffe', 'Blonde', '3', '0', '7', 'Blond', 'Leffe_blonde.png', 'Belgium', '', 'www.leffe.com', '2016-10-26 19:21:18'),
(29, 'Leffe', 'Brune', '6', '0', '7', 'Brown', 'Leffe_brune.png', 'Belgium', '', 'www.leffe.com', '2016-10-26 19:22:27'),
(30, 'Żywiec', 'Blonde', '3', '0', '6', 'Blond', 'Żywiec_blond.png', 'Poland', '', 'www.zywiec.com.pl', '2016-10-26 19:28:00'),
(31, 'Tyskie', 'Blonde', '3', '0', '6', 'Blond', 'Tyskie_blond.jpg', 'Poland', '', 'www.tyskie.pl', '2016-10-26 19:32:19');");



    query_database("CREATE TABLE `test` (
`id` int(11) NOT NULL,
`name` varchar(255) NOT NULL,
`surname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");


    query_database("INSERT INTO `test` (`id`, `name`, `surname`) VALUES
(1, 'test', 'test'),
(2, 'test1', 'test1');");

    query_database("CREATE TABLE `Users` (
`id` int(11) NOT NULL,
`user_name` varchar(255) NOT NULL,
`salt` varbinary(255) NOT NULL,
`hashcode` varbinary(255) NOT NULL,
`email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

    query_database("INSERT INTO `Users` (`id`, `user_name`, `salt`, `hashcode`, `email`) VALUES
    (19, 'admin', 0xa440ccc0db0085ea4cfc1235dcf39d44d1522653897eb845f4c2f391da33c521, 0xa4405472396256374162786559, 'test.concordia.webproject@gmail.com'),
    (20, 'John', 0xbde3f91815a9bee44278c4dcd2d5ed078f90307dfbbe8c05e3085db587a08eb4, 0xbde365666470413143755a2f73, '');");


    query_database("ALTER TABLE `Beers`
    ADD PRIMARY KEY (`id`);");


    query_database("ALTER TABLE `test`
    ADD PRIMARY KEY (`id`);");


    query_database("ALTER TABLE `Users`
    ADD PRIMARY KEY (`id`);");

    query_database("ALTER TABLE `Beers`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;");

    query_database("ALTER TABLE `test`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;");

    query_database("ALTER TABLE `Users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;");





?>