


--
-- Dumping data for table `Beers`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `Beers`
--
ALTER TABLE `Beers`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Beers`
--
ALTER TABLE `Beers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;


<?php
    require_once("db.php");

    query_database("CREATE TABLE `Beers` (
                    `id` int(11) NOT NULL,
                    `Brand` varchar(255) NOT NULL,
                    `Product` varchar(255) NOT NULL,
                    `Price` double NOT NULL DEFAULT '0',
                    `Volume` double NOT NULL DEFAULT '0',
                    `Proof` double NOT NULL DEFAULT '0',
                    `Color` varchar(255) NOT NULL,
                    `Picture_path` varchar(255) NOT NULL,
                    `Country` varchar(255) NOT NULL,
                    `Type` varchar(255) NOT NULL,
                    `Website` varchar(255) NOT NULL,
                    `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    query_database("INSERT INTO `Beers` (`id`, `Brand`, `Product`, `Price`, `Volume`, `Proof`, `Color`, `Picture_path`, `Country`, `Type`, `Website`, `Date`) VALUES
(23, 'Grimbergen', 'Blonde', 2.5, 0.33, 4, 'Blond', 'Grim_blonde.png', 'Belgium', '', 'www.grimbergen.fr', '2016-10-26 17:41:14'),
(24, 'Grimbergen', 'Blanche', 2.5, 0.33, 3, 'White', 'Grim_blanche.png', 'Belgium', '', 'www.grimbergen.fr', '2016-10-26 17:57:57'),
(25, 'Grimbergen', 'Brune', 2.5, 0.33, 6, 'Red', 'Grim_brune.png', 'Belgium', '', 'www.grimbergen.fr', '2016-10-26 18:26:13'),
(26, 'Grimbergen', 'Prune', 5, 0.33, 4, 'Pear', 'Grim_poire.png', 'Belgium', '', 'www.grimbergen.fr', '2016-10-26 18:28:37'),
(27, 'Leffe', 'Tripel', 6, 0.33, 5, 'Blond', 'Leffe_triple.png', 'Belgium', '', 'www.leffe.com', '2016-10-26 23:20:17'),
(28, 'Leffe', 'Blonde', 2.5, 0.33, 5, 'Blond', 'Leffe_blonde.png', 'Belgium', '', 'www.leffe.com', '2016-10-26 23:21:18'),
(29, 'Leffe', 'Brune', 6, 0.33, 7, 'Brown', 'Leffe_brune.png', 'Belgium', '', 'www.leffe.com', '2016-10-26 23:22:27'),
(30, 'Żywiec', 'Blond', 2, 0.5, 6, 'Blond', 'Żywiec_blond.png', 'Poland', '', 'www.zywiec.com.pl', '2016-10-26 23:28:00'),
(31, 'Tyskie', 'Blond', 2, 0.5, 6, 'Blond', 'Tyskie_blond.jpg', 'Poland', '', 'Tyskie_blond.jpg', '2016-10-26 23:32:19');");

    query_database("ALTER TABLE `Beers`
  ADD PRIMARY KEY (`id`);");

    query_database("ALTER TABLE `Beers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;");

    query_database("CREATE TABLE `Users` (
                  `id` int(11) NOT NULL,
                  `user_name` varchar(255) NOT NULL,
                  `salt` varbinary(255) NOT NULL,
                  `hashcode` varbinary(255) NOT NULL,
                  `email` varchar(255) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
                ");

    query_database("INSERT INTO `Users` (`id`, `user_name`, `salt`, `hashcode`, `email`) VALUES
                    (19, 'admin', 0xa440ccc0db0085ea4cfc1235dcf39d44d1522653897eb845f4c2f391da33c521, 0xa4405472396256374162786559, 'test.concordia.webproject@gmail.com'),
                    (20, 'John', 0xbde3f91815a9bee44278c4dcd2d5ed078f90307dfbbe8c05e3085db587a08eb4, 0xbde365666470413143755a2f73, ''),
                    (21, 'user', 0x9a4328b0ad2a7739419d124b134e1f3f90ef0c45f128f05fb5abe99fd3b16cec, 0x9a43576d38654477466b373859, '');
                    ");
    query_database("ALTER TABLE `Users`
                      ADD PRIMARY KEY (`id`);");

?>