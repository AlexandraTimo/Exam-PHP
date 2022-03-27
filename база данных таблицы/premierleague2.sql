-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 27 2022 г., 15:54
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `premierleague2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(2, 'admin', '12345');

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int NOT NULL,
  `PlayersId` int NOT NULL,
  `MatchId` int NOT NULL,
  `CardId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `PlayersId`, `MatchId`, `CardId`) VALUES
(1, 5, 1, 2),
(2, 8, 1, 1),
(3, 17, 1, 2),
(4, 20, 2, 1),
(5, 27, 1, 1),
(6, 31, 1, 2),
(7, 38, 1, 1),
(8, 42, 1, 2),
(9, 45, 2, 1),
(10, 43, 2, 1),
(11, 48, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `goals`
--

CREATE TABLE `goals` (
  `id` int NOT NULL,
  `imageGoal` text NOT NULL,
  `PlayersId` int NOT NULL,
  `Time` timestamp NOT NULL,
  `MathesId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goals`
--

INSERT INTO `goals` (`id`, `imageGoal`, `PlayersId`, `Time`, `MathesId`) VALUES
(1, 'image/soccerball.png', 4, '2021-02-02 09:20:00', 1),
(2, 'image/soccerball.png', 6, '2021-02-02 09:20:00', 1),
(3, 'image/soccerball.png', 12, '2021-10-21 08:00:00', 2),
(4, 'image/soccerball.png', 10, '2021-10-21 08:00:00', 2),
(5, 'image/soccerball.png', 9, '2021-11-23 11:30:00', 2),
(17, 'image/soccerball.png', 21, '2022-02-14 09:22:56', 2),
(18, 'image/soccerball.png', 32, '2022-03-02 19:22:56', 2),
(19, 'image/soccerball.png', 20, '2021-11-17 08:27:57', 2),
(21, 'image/soccerball.png', 26, '2022-04-08 19:29:27', 2),
(23, 'image/soccerball.png', 21, '2021-11-17 08:27:57', 2),
(24, 'image/soccerball.png', 39, '2021-12-19 14:30:35', 1),
(25, 'image/soccerball.png', 46, '2022-02-06 09:13:35', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `mathes`
--

CREATE TABLE `mathes` (
  `id` int NOT NULL,
  `dateMatch` timestamp NOT NULL,
  `firstTimeId` int NOT NULL,
  `secondTimeId` int NOT NULL,
  `homeTimeId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `mathes`
--

INSERT INTO `mathes` (`id`, `dateMatch`, `firstTimeId`, `secondTimeId`, `homeTimeId`) VALUES
(1, '2022-03-01 08:00:00', 1, 2, 3),
(2, '2022-03-09 09:00:00', 3, 2, 3),
(5, '2022-05-01 11:00:00', 1, 3, 2),
(9, '2022-06-03 10:00:00', 1, 2, 3),
(10, '2022-06-17 20:03:00', 3, 1, 2),
(12, '2022-05-06 20:00:00', 2, 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `text` varchar(500) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `text`, `image`) VALUES
(1, 'Anthony Elanga has shared his appreciation for the experienced group of Manchester United players he can draw advice from - in particular Cristiano Ronaldo.\r\nSpeaking in an exclusive interview with MUTV, the young Sweden international said: “It’s really good [to have Ronaldo as a mentor] because I go to training quite early and see him there.', 'image/GettyImages-821704408.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `players`
--

CREATE TABLE `players` (
  `id` int NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `SquardNumber` int NOT NULL,
  `imageSquard` text NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `ClubId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `players`
--

INSERT INTO `players` (`id`, `photo`, `Name`, `Surname`, `SquardNumber`, `imageSquard`, `Position`, `Nationality`, `ClubId`) VALUES
(1, 'image/leno_12.jpg', 'Bernd', 'Leno', 1, 'image/FootballShirt.png', 'Goalkeeper', 'Germany', 1),
(2, 'image/18033454-0-image-a-52_1567547554477.jpg', 'Aaron', 'Ramsdale', 32, 'image/FootballShirt.png', 'Goalkeeper', 'England', 1),
(3, 'image/arsenal-goalkeeper-arthur-okonkwo.jpg', 'Arthur', 'Okonkwo', 33, 'image/FootballShirt.png', 'Goalkeeper', 'England', 1),
(4, 'image/tirni_kiran_0.jpg', 'Kieran', 'Tierney', 3, 'image/FootballShirt.png', 'Defender', 'Scotland', 1),
(5, 'image/ben-white.jpg', 'Benjamin', 'White', 4, 'image/FootballShirt.png', 'Defender', 'England', 1),
(6, 'image/gabriel.jpg', 'Gabriel', '', 6, 'image/FootballShirt.png', 'Defender', 'England', 1),
(7, 'image/rob-holding.jpg', 'Rob', 'Holding', 16, 'image/FootballShirt.png', 'Defender', 'Germany', 1),
(8, 'image/thomas.jpg', 'Thomas', 'Partey', 5, 'image/FootballShirt.png', 'Midfielders', 'Ghana', 1),
(9, 'image/smith-rowe.jpg', 'Emile Smith', 'Rowe', 10, 'image/FootballShirt.png', 'Midfielders', 'England', 1),
(10, 'image/mohamed-elneny.jpg', 'Mohamed', 'Elneny', 25, 'image/FootballShirt.png', 'Midfielders', 'Egypt', 1),
(11, 'image/bukayo-saka.jpg', 'Bukayo', 'Saka', 7, 'image/FootballShirt.png', 'Forward', 'England', 1),
(12, 'image/laca_77.jpg', 'Alexandre', 'Lacazette', 9, 'image/FootballShirt.png', 'Forward', 'France', 1),
(13, 'image/pepe.jpg', 'Nicolas', 'Pépé', 19, 'image/FootballShirt.png', 'Midfielders', 'Cote D\'Ivoire', 1),
(14, 'image/zhaka.jpg', 'Granit', 'Xhaka', 34, 'image/FootballShirt.png', 'Midfielders', 'Switzerland', 1),
(15, 'image/lokonga.jpg', 'Albert', 'Lokonga', 23, 'image/FootballShirt.png', 'Midfielders', 'Belgium', 1),
(16, 'image/eddie-nketiah.jpg', 'Eddie', 'Nketiah', 30, 'image/FootballShirt.png', 'Midfielders', 'England', 1),
(17, 'image/Alisson.jpg', 'Allison', 'Becker', 1, 'image/FootballShirt.png', 'Goalkeepers', 'Brazil', 2),
(18, 'image/adrian.jpg', 'Adrián', '', 13, 'image/FootballShirt.png', 'Goalkeepers', 'Spain', 2),
(19, 'image/scale_1200.jpg', 'Loris', 'Karius', 22, 'image/FootballShirt.png', 'Goalkeepers', 'Italy', 2),
(20, 'image/caoimhin.jpg', 'Caoimhín', 'Kelleher', 62, 'image/FootballShirt.png', 'Goalkeepers', 'Italy', 2),
(21, 'image/virgil-van-dijk.jpg', 'Virgil', 'van Dijk', 4, 'image/FootballShirt.png', 'Defender', 'Netherland', 2),
(22, 'image/ibrahima-konate.jpg', 'Ibrahima', 'Konaté', 5, 'image/FootballShirt.png', 'Defender', 'Netherland', 2),
(23, 'image/joe-gomez-liverpool_bxzfv5m4yj2310b2amedb377h.jpg', 'Joe', 'Gomez', 12, 'image/FootballShirt.png', 'Defender', 'England', 2),
(24, 'image/kostas.jpg', 'Kostas', 'Tsimikas', 21, 'image/FootballShirt.png', 'Defender', 'Cyprys', 2),
(25, 'image/andrew.jpg', 'Andrew', 'Robertson', 26, 'image/FootballShirt.png', 'Defender', 'Scotland', 2),
(26, 'image/Fabinho.jpg', 'Fabinho', '', 3, 'image/FootballShirt.png', 'Midlfielders', 'Brasil', 2),
(27, 'image/th.jpg', 'Thiago', '', 6, 'image/FootballShirt.png', 'Midfielders', 'Spain', 2),
(28, 'image/milner.jpg', 'James', 'Milner', 7, 'image/FootballShirt.png', 'Midfielders', 'England', 2),
(29, 'image/naby-keita.jpg', 'Naby', 'Keïta', 8, 'image/FootballShirt.png', 'Defender', 'Guinea', 2),
(30, 'image/rob.jpg', 'Roberto', 'Firmino', 3, 'image/FootballShirt.png', 'Forwards', 'Brasil', 2),
(31, 'image/virdzhil-van-deik.jpg', 'Virgil', 'van Dijk', 4, 'image/FootballShirt.png', 'Forwards', 'Senegal', 2),
(32, 'image/mohamed-salah.jpg', 'Mohamed', 'Salah', 11, 'image/FootballShirt.png', 'Forwards', 'Egypt', 2),
(33, 'image/takumi.jpg', 'Takumi', 'Minamino', 18, 'image/FootballShirt.png', 'Forwards', 'Japan', 2),
(34, 'image/jota.jpg', 'Diogo', 'Jota', 20, 'image/FootballShirt.png', 'Forwards', 'Forwards', 2),
(35, 'image/david-de-gea.jpg', 'David ', 'de Gea', 1, 'image/FootballShirt.png', 'Goalkeeper', 'Spain', 3),
(36, 'image/grant.jpg', 'Lee', 'Grant', 13, 'image/FootballShirt.png', 'Goalkeeper', 'England', 3),
(37, 'image/gary.jpg', 'Harry', 'Maguire', 5, 'image/FootballShirt.png', 'Defender', 'England', 3),
(38, 'image/aaron-wan-bissaka.jpg', 'Aaron', 'Wan-Bissaka', 29, 'image/FootballShirt.png', 'Defender', 'England', 3),
(39, 'image/rue7df1058ada.jpg', 'Luke', 'Shaw', 23, 'image/FootballShirt.png', 'Defender', 'England', 3),
(40, 'image/eric.jpg', 'Eric', 'Bailly', 3, 'image/FootballShirt.png', 'Defender', 'Republic of Ireland', 3),
(41, 'image/maxresdefault.jpg', 'Amad', '', 16, 'image/FootballShirt.png', 'Midfielders', 'Scotland', 3),
(42, 'image/76845960e32b4be5b2327c0c06b8daf5_xl.jpg', 'Paul ', 'Pogba', 6, 'image/FootballShirt.png', 'Midfielders', 'France', 3),
(43, 'image/mata.jpg', 'Juan ', 'Mata', 8, 'image/FootballShirt.png', 'Midfielders', 'Spain', 3),
(44, 'image/rue422f044a28.jpg', 'Fred', '', 17, 'image/FootballShirt.png', 'Midfielders', 'Brazil', 3),
(45, 'image/fernandes.jpg', 'Bruno ', 'Fernandes', 18, 'image/FootballShirt.png', 'Midfielders', 'Portugal', 3),
(46, 'image/w_57166896-1.jpg', 'Cristiano', 'Ronaldo', 7, 'image/FootballShirt.png', 'Forward', 'Portugal', 3),
(47, 'image/martial.jpg', 'Anthony', 'Martial', 9, 'image/FootballShirt.png', 'Forward', 'France', 3),
(48, 'image/marcus.jpg', 'Marcus', 'Rashford', 10, 'image/FootballShirt.png', 'Forward', 'England', 3),
(49, 'image/skysports-mason-greenwood-manchester-united_5026848.jpg', 'Mason', 'Greenwood', 11, 'image/FootballShirt.png', 'Forward', 'England', 3),
(50, 'image/2961037-60776668-2560-1440.jpg', 'Edinson', 'Cavani', 21, 'image/FootballShirt.png', 'Forward', 'd\'Ivoire', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `playersclub`
--

CREATE TABLE `playersclub` (
  `id` int NOT NULL,
  `Club` varchar(20) NOT NULL,
  `ImageClub` text NOT NULL,
  `Town` varchar(50) NOT NULL,
  `Stadium` varchar(50) NOT NULL,
  `Manager` varchar(20) NOT NULL,
  `description` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imageStadium` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `playersclub`
--

INSERT INTO `playersclub` (`id`, `Club`, `ImageClub`, `Town`, `Stadium`, `Manager`, `description`, `imageStadium`) VALUES
(1, 'Arsenal', 'image/pngegg (4).png', 'London', 'Emirates Stadium', 'Mikel Arteta', 'Arsenal Football Club is a professional football club based in Islington, London, England. Arsenal plays in the Premier League, the top flight of English football. The club has won 13 league titles (including one unbeaten title), a record 14 FA Cups, two League Cups, 16 FA Community Shields, the League Centenary Trophy, one European Cup Winners\' Cup, and one Inter-Cities Fairs Cup. In terms of trophies won, it is the third-most successful club in English football.', 'image/stadium_icon_135157.png'),
(2, 'Liverpool', 'image/pngegg (2).png', 'Liverpool', 'Anfield', 'Jurgen Clopp', 'Liverpool Football Club is a professional football club based in Liverpool, England, that competes in the Premier League, the top tier of English football. Domestically, the club has won nineteen League titles, seven FA Cups, a record nine League Cups and fifteen FA Community Shields. In international competitions, the club has won six European Cups, more than any other English club, three UEFA Cups, four UEFA Super Cups, and one FIFA Club World Cup. In terms of trophies won, it is the joint-most successful club in English football.In 1964 the team changed from red shirts and white shorts to an all-red home strip which has been used ever since. The club\'s anthem is \"You\'ll Never Walk Alone\"', 'image/stadium_icon_135157.png'),
(3, 'Manchester United', 'image/pngegg (1).png', 'Trafford', 'Old Trafford', 'Ralf Rangnick', 'Manchester United Football Club is a professional football club based in Old Trafford, Greater Manchester, England, that competes in the Premier League, the top flight of English football. Nicknamed the Red Devils, the club was founded as Newton Heath LYR Football Club in 1878, but changed its name to Manchester United in 1902. The club moved from Newton Heath to its current stadium, Old Trafford, in 1910.\r\nManchester United have won the joint-record number of trophies in English club football,[5][6] including a record 20 League titles, 12 FA Cups, five League Cups and a record 21 FA Community Shields. They have won the European Cup/UEFA Champions League three times, and the UEFA Europa League, the UEFA Cup Winners\' Cup, the UEFA Super Cup, the Intercontinental Cup and the FIFA Club World Cup once each.', 'image/stadium_icon_135157.png');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` varchar(20) NOT NULL,
  `price` int NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES
(1, 'banan', 33, 'sdgsdfbdfnbdnfd'),
(2, 'banan', 33, 'sdgsdfbdfnbdnfd'),
(3, 'banan', 33, 'sdgsdfbdfnbdnfd');

-- --------------------------------------------------------

--
-- Структура таблицы `typecards`
--

CREATE TABLE `typecards` (
  `id` int NOT NULL,
  `Card` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `typeCard` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `typecards`
--

INSERT INTO `typecards` (`id`, `Card`, `typeCard`) VALUES
(1, 'image/yellow.png', 'yellow'),
(2, 'image/red.png', 'red');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CardId` (`CardId`),
  ADD KEY `PlayersId` (`PlayersId`),
  ADD KEY `MatchId` (`MatchId`);

--
-- Индексы таблицы `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PlayersId` (`PlayersId`),
  ADD KEY `MathesId` (`MathesId`);

--
-- Индексы таблицы `mathes`
--
ALTER TABLE `mathes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstTimeId` (`firstTimeId`),
  ADD KEY `secondTimeId` (`secondTimeId`),
  ADD KEY `homeTimeId` (`homeTimeId`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ClubId` (`ClubId`);

--
-- Индексы таблицы `playersclub`
--
ALTER TABLE `playersclub`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `typecards`
--
ALTER TABLE `typecards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `mathes`
--
ALTER TABLE `mathes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `players`
--
ALTER TABLE `players`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `playersclub`
--
ALTER TABLE `playersclub`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `typecards`
--
ALTER TABLE `typecards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_ibfk_1` FOREIGN KEY (`CardId`) REFERENCES `typecards` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cards_ibfk_2` FOREIGN KEY (`MatchId`) REFERENCES `mathes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `cards_ibfk_3` FOREIGN KEY (`PlayersId`) REFERENCES `players` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `goals`
--
ALTER TABLE `goals`
  ADD CONSTRAINT `goals_ibfk_1` FOREIGN KEY (`MathesId`) REFERENCES `mathes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `goals_ibfk_2` FOREIGN KEY (`PlayersId`) REFERENCES `players` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `mathes`
--
ALTER TABLE `mathes`
  ADD CONSTRAINT `mathes_ibfk_1` FOREIGN KEY (`firstTimeId`) REFERENCES `playersclub` (`id`),
  ADD CONSTRAINT `mathes_ibfk_2` FOREIGN KEY (`secondTimeId`) REFERENCES `playersclub` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `mathes_ibfk_3` FOREIGN KEY (`homeTimeId`) REFERENCES `playersclub` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`ClubId`) REFERENCES `playersclub` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
