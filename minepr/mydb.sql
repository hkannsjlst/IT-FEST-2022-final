-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 10 2022 г., 17:10
-- Версия сервера: 5.5.62
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `infa`
--

CREATE TABLE `infa` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `infa`
--

INSERT INTO `infa` (`id`, `lastname`, `firstname`, `gender`, `email`) VALUES
(1, 'Над сервером  уже идёт и будет идти активная работа. Релиз состоится в следующем году. Это будет самый уникальный Minecraft сервер', 'Разработка', 'Юзер ', 'feature-support.jpg'),
(2, 'Игровые модификации значительно изменят ваше представление об игре. Они позволят добывать новые типы ресурсов для развития важных отраслей жизни', 'Модификации', 'Админ', 'feature-gamepad.jpg'),
(3, 'Каждый регион обладает уникальными ресурсами. Участники будут выстраивать торговые отношения для взаимной выгоды', 'Кооператив', 'Админ', 'feature-community.jpg'),
(4, 'Вы можете не бояться, что сервер упадёт в один момент. Потому что сервер открывается в рамках Всероссийского Фестиваля киберспорта', 'Защита от Ddos', 'Админ', 'feature-protect.jpg'),
(5, 'Скучать не придётся! Команда организаторов проводит развлекательные события - командные головоломки, королевские битвы, jumping-пазлы', 'Мини игры', 'Админ', 'feature-ranking.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `mods`
--

CREATE TABLE `mods` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `age` varchar(100) NOT NULL,
  `ker` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `mods`
--

INSERT INTO `mods` (`id`, `firstname`, `lastname`, `email`, `age`, `ker`, `gender`) VALUES
(5, 'Plus the End', 'Мод изменит энд мир, сделав его значительно более разнообразным да и просто красивым. В таком биоме хочется жить теперь, ибо выглядит он очень уютно', 'Если в обычный версии это просто измерение для босса, нежели для игры и эксплоринга, то тут это уже интересный, а самое главное - красивый биом со своими мобами. В него теперь стоит сходить только лишь ради его внешнего вида, ибо выглядеть он стал сказочно.', 'https://ru-minecraft.ru/mody-minecraft/72257-plus-the-end.html', 'end.jpg', 'Админ'),
(6, 'Druidcraft', 'Мод сделан на тему друидов, на данный момент он не добавляет кучу всего, но уже есть кое-что интересное. К примеру, из костей можно будет сделать себе сет брони', 'Из новой травы можно сделать верёвки. Помимо вещей, мод добавит в игру один новый биом - тёмные лес с высокими деревьями. В подземельях можно будет найти новые руды, но из них пока что ничего нельзя будет скрафтить, но за них дают много опыта, что уже плюс. Ну и, наконец, новые декоративные блоки из дерева.', 'https://ru-minecraft.ru/mody-minecraft/page/2/', 'mod3.jpg', 'Админ');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `age` varchar(100) NOT NULL,
  `ker` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `firstname`, `lastname`, `email`, `age`, `ker`, `gender`) VALUES
(2, 'Моды', 'Установка модификаций ', 'Наш сервер предлагает на выбор различные модификации, которые по своему уникальны и значительно меняют представление об игровом процессе. О том, как установить модификации на различные платформы мы расскажем в этой статье', '-', 'FNNGPhjpg.jpg', 'Админ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`) VALUES
(47, 'end.jpg', '\0\0\0X\0\0\0Y\0\0\0Z\0\0\0 \0\0\01\0\0\04\0\0\06\0\0\05\0\0\0.\0\0\02\0\0\09\0\0\07\0\0\0 \0\0\0/\0\0\06\0\0\0.\0\0\00\0\0\00\0\0\00\0\0\0 \0\0\0/\0\0\0-\0\0\01\0\0\02\0\0\03\0\0\0.\0\0\05\0\0\00', 'Админ'),
(48, 'donate-banner.jpg', '\0\0\0X\0\0\0Y\0\0\0Z', 'Админ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `infa`
--
ALTER TABLE `infa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mods`
--
ALTER TABLE `mods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `infa`
--
ALTER TABLE `infa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `mods`
--
ALTER TABLE `mods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
