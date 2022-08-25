-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 31 2022 г., 03:29
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `science_center`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutcenter`
--

CREATE TABLE `aboutcenter` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aboutcenter`
--

INSERT INTO `aboutcenter` (`id`, `description`, `img`) VALUES
(1, 'Cкорость научно-технологического прогресса и исчезновение определенных видов деятельности, связанное с проникновением автоматизации во все сферы производственных и управленческих процессов, являются факторами возможного роста для предприятий будущего. Цифровая интеграция, объединяющая научные направления, кадры, процессы, пользователей и данные, будет создавать условия для научно-технических достижений и прорывов, обеспечивая научно-экономические сдвиги в смежных отраслях и, прежде всего, на глобальном минерально-сырьевом рынке. В этой связи в 2018 году с целью обучения, исследований и разработок в области цифровых технологий для предприятий минерально-сырьевого и топливно-энергетического комплексов в Горном университете создан «Учебно-научный центр цифровых технологий».', 'center.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `phonenumber` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `phonenumber`, `address`, `mail`, `map`) VALUES
(1, '+7(812) 328 84 75', '199106,\r\nСанкт-Петербург,\r\nВасильевский остров,\r\n21 линия д. 2 ауд. 3304', 'digital@spmi.ru', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3998.153770846404!2d30.260354767851723!3d59.93086636916382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469630dbfcf1c2f5%3A0x6d871cf59e5d15bc!2z0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LPRgdC60LjQuSDQk9C-0YDQvdGL0Lkg0KPQvdC40LLQtdGA0YHQuNGC0LXRgg!5e0!3m2!1sru!2sru!4v1653437580980!5m2!1sru!2sru\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Структура таблицы `directions`
--

CREATE TABLE `directions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `lab_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `directions`
--

INSERT INTO `directions` (`id`, `name`, `description`, `img`, `lab_id`) VALUES
(1, 'Цифровая трансформация в управлении объектами недропользования', 'В рамках устойчивого развития ТЭК и МСК на базе УНЦ ЦТ сформирован кластер для проведения исследований в области цифровой трансформации в управлении жизненным циклом энергетических и минерально-сырьевых ресурсов. Развитие передовых технологий в рамках данных направлений исследований ведется совместно с такими компаниями, как ГК «Цифра» (машиностроение, горное дело, автоматизация), Schneider Electric (энергетика, автоматизация), БЕЛАЗ (машиностроение, горное дело).', 'logodirection1.png', 1),
(2, 'Цифровой университет', 'Направление «Цифровой университет» позволяет развивать на основе цифровой инфраструктуры необходимые компетенции у нынешних и будущих специалистов ТЭК. Цифровые технологии и инфраструктура позволяют объединить студентов различных специальностей и направлений для решения прикладных кейсов. Процесс освоения междисциплинарных компетенций учитывает особенности и уровень подготовки, позволяя за счет разрабатываемых на основе научных исследований цифровых сервисов быстрее осваивать необходимый материал.', 'logodirection2.png', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `labs`
--

CREATE TABLE `labs` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `labname` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `labs`
--

INSERT INTO `labs` (`id`, `type`, `labname`, `img`) VALUES
(1, 'Учебно-тренажерный комплекс', 'По добыче нефти и газа на шельфе', 'lab1.png'),
(2, 'Учебно-тренажерный комплекс', 'Управления горнотранспортными \nпроцессами и техникой', 'lab2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `datecreate`, `description`, `img`, `link`) VALUES
(1, 'Студентам горного университета рассказали о новых технологиях в области энергосбережения', '2022-05-24 21:52:13', 'Компания организовала для студентов и сотрудников Горного университета виртуальную эксрурсию по своей лаборатории интеллектуальной энергетики в Индии.', 'https://forpost-sz.ru/sites/default/files/styles/wide169/public/doc/2020/05/29/dol_4763.jpg?h=c44fcfa1&itok=gm89ei8v', 'https://forpost-sz.ru/spmi/2020-05-29/studentam-gornogo-universiteta-rasskazali-o-novykh-tekhnologiyakh-v-oblasti'),
(2, 'Представители Горного университета стали призёрами кейс-чемпионата', '2022-05-19 12:30:44', 'В Санкт-Петербургском горном университете прошёл кейс-чемпионат, в котором приняли участие около 200 делегатов XVIII Международного форума-конкурса студентов и молодых учёных из российских и зарубежных вузов. Они соревновались в шести номинациях, задание для каждой из них было сформулировано экспертами энергетических, горных или IT-компаний.', 'https://forpost-sz.ru/sites/default/files/styles/wide169/public/doc/2022/05/19/img_7542.jpg?h=d1cb525d&itok=7nlLyYdv', 'https://forpost-sz.ru/spmi/2022-05-19/predstaviteli-gornogo-universiteta-stali-prizyorami-kejs-chempionata'),
(3, 'В Горном университете отметили День Победы', '2022-05-24 21:57:43', 'В стенах первого технического вуза России в рамках мероприятий, приуроченных к годовщине Победы в Великой Отечественной войне, прошел праздничный концерт и церемония возложения цветов у мемориала во внутреннем дворе университета.\r\n\r\nВетеранов поздравили творческие коллективы высшего учебного заведения, в частности, хор Montem, секция бальных танцев и другие талантливые студенты, выступившие с тематическими стихами и песенными композициями.', 'https://forpost-sz.ru/sites/default/files/styles/wide169/public/doc/2022/05/12/img_61571.jpg?h=9c8da6a4&itok=ztLOuYxH', 'https://forpost-sz.ru/a/2022-05-12/v-gornom-universitete-otmetili-den-pobedy'),
(4, 'Горный университет стал триумфатором выставки инноваций «HI TECH»', '2022-05-10 00:57:47', 'Все шесть проектов, представленных учёными вуза, получили медали и дипломы этой престижной экспозиции.\r\nВ среду, 4 мая стало известно, что Санкт-Петербургский горный университет был удостоен трёх золотых и трёх серебряных медалей XXVIII Международной выставки инноваций «HI‑TECH», которая состоялась в Санкт-Петербурге. Основными критериями оценки проектов были новизна, научно-техническая значимость, правовая защищённость объектов интеллектуальной собственности и перспективы внедрения в конкретное производство.', 'https://forpost-sz.ru/sites/default/files/styles/wide169/public/doc/2019/07/17/suek25.jpg?h=06ac0d8c&itok=ZVmUnXzF', 'https://forpost-sz.ru/spmi/2022-05-04/gornyj-universitet-stal-triumfatorom-vystavki-innovacij-hi-tech'),
(5, 'Сборная Горного университета стала призёром Чемпионата вузов Петербурга по дзюдо', '2022-04-28 10:00:00', 'В соревнованиях приняли участие более 150 спортсменов из 25 высших учебных заведений города.\r\nВ Горном университете состоялся Чемпионат вузов Санкт-Петербурга по дзюдо имени Владимира Богачёва, который проводится уже в 49 раз. Его победителем в общекомандном зачёте стали представители университета имени Лесгафта. Хозяева татами заняли второе место, на третьем - ИТМО', 'https://forpost-sz.ru/sites/default/files/styles/wide169/public/doc/2022/04/28/img_5534.jpg?h=d1cb525d&itok=IcF4yrSW', 'https://forpost-sz.ru/spmi/2022-04-28/sbornaya-gornogo-universiteta-stala-prizyorom-chempionata-vuzov-peterburga-po-dzyudo');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `ntrue` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `name`, `img`, `ntrue`) VALUES
(1, 'Caterpillar', 'CAT.png', 1),
(2, 'Фосагро', 'phosagro.png', 1),
(4, 'Русская медная компания', 'rmc.png', 1),
(5, 'Schneider Electric', 'schneider.jpeg', 1),
(6, 'Новатэк', 'novatek.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `receptions`
--

CREATE TABLE `receptions` (
  `id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `namelab` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `maxcountofvisitors` int(11) NOT NULL,
  `countofvisitors` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `receptions`
--

INSERT INTO `receptions` (`id`, `lab_id`, `namelab`, `datetime`, `maxcountofvisitors`, `countofvisitors`) VALUES
(1, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', 3, 1),
(2, 1, 'Управления горнотранспортными \nпроцессами и техникой', '2022-06-02 12:00:00', 2, 0),
(5, 2, 'Управления горнотранспортными \nпроцессами и техникой', '2022-05-30 10:00:00', 3, 0),
(6, 2, 'Управления горнотранспортными \r\nпроцессами и техникой', '2022-06-02 12:00:00', 6, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `lab` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `lab_id`, `lab`, `date`, `created`, `status`) VALUES
(1, 2, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-29 13:36:32', 0),
(2, 2, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-29 13:47:46', 0),
(3, 2, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-29 13:49:02', 0),
(4, 7, 1, 'По добыче нефти и газа на шельфе', '2022-06-02 12:00:00', '2022-05-29 13:52:11', 1),
(5, 2, 2, 'Управления горнотранспортными процессами и техникой', '2022-06-02 12:00:00', '2022-05-29 13:53:43', 0),
(6, 2, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-29 13:53:52', 0),
(7, 7, 2, 'Управления горнотранспортными процессами и техникой', '2022-06-02 12:00:00', '2022-05-29 13:54:25', 1),
(8, 4, 2, 'Управления горнотранспортными процессами и техникой', '2022-06-02 12:00:00', '2022-05-29 14:08:52', 1),
(9, 4, 2, 'Управления горнотранспортными процессами и техникой', '2022-06-02 12:00:00', '2022-05-29 14:20:56', 0),
(10, 2, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-30 23:24:38', 0),
(11, 2, 2, 'Управления горнотранспортными процессами и техникой', '2022-05-30 10:00:00', '2022-05-30 23:28:09', 0),
(12, 6, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-30 23:28:40', 0),
(13, 6, 1, 'По добыче нефти и газа на шельфе', '2022-06-02 12:00:00', '2022-05-30 23:30:11', 0),
(14, 6, 2, 'Управления горнотранспортными процессами и техникой', '2022-05-30 10:00:00', '2022-05-30 23:30:25', 0),
(15, 6, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-30 23:33:16', 0),
(16, 6, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-30 23:33:52', 0),
(17, 7, 2, 'Управления горнотранспортными процессами и техникой', '2022-05-30 10:00:00', '2022-05-30 23:37:05', 0),
(18, 7, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-30 23:38:31', 0),
(19, 7, 1, 'По добыче нефти и газа на шельфе', '2022-05-30 10:00:00', '2022-05-30 23:43:34', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `titles`
--

CREATE TABLE `titles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `menutitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `ntrue` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `titles`
--

INSERT INTO `titles` (`id`, `title`, `menutitle`, `description`, `img`, `link`, `ntrue`) VALUES
(1, 'Центр цифровых технологий горного университета', 'Главная', 'Реализуем цифровые проекты в разных отраслях промышленности ', 'stars.jpg', 'index.php', 1),
(2, 'Направления', 'Направления', '', 'direction2.jpg', 'directions.php', 1),
(3, 'Новости', 'Новости', '', 'center.jpg', 'news.php', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` text NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `user_group_id` varchar(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `middlename`, `position`, `email`, `phonenumber`, `login`, `password`, `user_group_id`) VALUES
(1, 'Анастаси', 'Морозова', 'Сергеевна', 'Студент', '180005@stud.spmi.ru', '8921428150', 'admin', 'admin', '1'),
(2, 'Екатеринa', 'Катеринова', 'Катериновна', 'Школьник', 'katerina@mail.ru', '89223334468', 'hellansty', '0212', '2'),
(3, 'Алексей', 'Иванов', 'Иванов', 'Организация', 'alex@mail.ru', '88855567733', 'gwr', '0000', '2'),
(4, 'Ольга', 'Ольгова', 'Ольговна', 'Студент', 'olga@mail.ru', '22224445522', 'qwerty', '0000', '2'),
(5, 'Мария', 'Мариева', 'Мариевна', 'Школьник', 'maria@mail.ru', '89214281288', 'nan', '0000', '2'),
(6, 'Владимиp', 'Владимиров', 'Владимирович', 'Организация', 'vladimir@mail.ru', '6464629375', 'nani', '1212', '2'),
(7, 'София', 'Софиева', 'Софиевна', 'Организация', 'sofi@mail.ru', '3388447582', 'organiz', '2222', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_groups`
--

INSERT INTO `user_groups` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aboutcenter`
--
ALTER TABLE `aboutcenter`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `directions`
--
ALTER TABLE `directions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `receptions`
--
ALTER TABLE `receptions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aboutcenter`
--
ALTER TABLE `aboutcenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `directions`
--
ALTER TABLE `directions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `receptions`
--
ALTER TABLE `receptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
