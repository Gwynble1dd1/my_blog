-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 01 2024 г., 22:19
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(12) NOT NULL,
  `name` varchar(120) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(13, 'Travel', 'how to fly in paris'),
(15, 'PHP', 'test'),
(16, 'JabaScript', 'Kva kva'),
(19, 'Top posts', 'Contain most popular posts');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(12) NOT NULL,
  `id_author` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `category_id` int(12) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `id_author`, `title`, `img`, `content`, `status`, `category_id`, `created_date`) VALUES
(28, 51, 'My first post', '1722530010_night-sky-colorful-beautiful-clouds-mountain-valley.jpg', 'Hahahahahahah Look this l=cool', 1, 16, '2024-08-01 19:33:30'),
(29, 51, 'Lorem Ipsum has been the', '1722532957_Picture1.jpg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, 15, '2024-08-01 20:22:37'),
(30, 51, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour', '1722530010_night-sky-colorful-beautiful-clouds-mountain-valley.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget sem ut enim volutpat hendrerit quis eget leo. In pharetra sapien non felis tempor, in feugiat erat ullamcorper. Suspendisse luctus maximus pellentesque. Nunc eu neque ipsum. Phasellus bibendum mauris a urna rhoncus cursus. Nam finibus nisl a nisi commodo, in hendrerit nisl rhoncus. Etiam lorem ex, ullamcorper in ex in, aliquet mollis urna. Aliquam ut enim dolor. Pellentesque eu turpis a sapien sagittis mattis sit amet sit amet sem. Nunc rutrum a dolor lacinia porta. Etiam ullamcorper tortor sed ante imperdiet, ac facilisis mauris hendrerit.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur molestie nisi ut dapibus commodo. Sed varius elit sit amet lorem luctus, quis ornare diam aliquam. Fusce vehicula imperdiet pellentesque. Donec eget placerat lectus, id feugiat nibh. Vivamus accumsan gravida feugiat. Nam vestibulum ut magna ut commodo. Donec ante enim, placerat et mollis id, dapibus at tellus.\r\n\r\nCurabitur et euismod quam. Duis ac dui at turpis dignissim laoreet. In vel justo lacus. Vestibulum tristique leo ut felis tincidunt, nec ultricies magna varius. Aenean eget hendrerit magna. Nam vitae nunc ut lectus euismod aliquet. Etiam tempor quam id metus semper aliquam. Quisque convallis enim sed nisi vulputate tempor. Proin maximus eros arcu, sed varius quam vulputate vel. Ut tellus lacus, bibendum sed mattis a, pretium et sapien. Donec purus tellus, ornare quis varius eu, fermentum in elit. Fusce sed lacus vel enim pulvinar lobortis. Nulla et quam imperdiet, scelerisque ex id, semper turpis. Proin ac semper nunc. Morbi vel metus et mauris pellentesque pretium at in tortor.\r\n\r\nVestibulum sit amet eleifend nisi. Ut malesuada augue nulla, vitae elementum purus eleifend a. Duis in quam pulvinar, scelerisque mauris non, mattis elit. Donec efficitur luctus ante imperdiet interdum. Pellentesque nibh lacus, pulvinar vitae magna eget, vehicula tempus nunc. Aenean at erat ut dui ullamcorper pellentesque sit amet nec justo. Nunc sodales sit amet mauris ut aliquam. Vestibulum sit amet ipsum suscipit, maximus eros sit amet, congue justo. Donec vehicula rutrum magna vitae vehicula. Ut gravida enim est, eu tincidunt risus tempor vitae. Morbi volutpat lectus vitae est rutrum porta. Aliquam sodales libero nec tristique venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempus orci sed sapien imperdiet ultricies. Quisque fermentum sollicitudin posuere. Sed nec fermentum dui.\r\n\r\nIn at dignissim tortor. Phasellus condimentum dolor vel lorem congue efficitur. Sed tempus turpis vel posuere feugiat. Nulla facilisi. Proin tristique est eget semper placerat. Maecenas mollis lobortis ex sit amet maximus. Proin dignissim diam fringilla enim malesuada, eget gravida eros suscipit.', 1, 13, '2024-08-01 20:33:08'),
(31, 51, 'Interdum et malesuada fames ac ante ipsum primis in faucibus', '1722530010_night-sky-colorful-beautiful-clouds-mountain-valley.jpg', 'Curabitur et euismod quam. Duis ac dui at turpis dignissim laoreet. In vel justo lacus. Vestibulum tristique leo ut felis tincidunt, nec ultricies magna varius. Aenean eget hendrerit magna. Nam vitae nunc ut lectus euismod aliquet. Etiam tempor quam id metus semper aliquam. Quisque convallis enim sed nisi vulputate tempor. Proin maximus eros arcu, sed varius quam vulputate vel. Ut tellus lacus, bibendum sed mattis a, pretium et sapien. Donec purus tellus, ornare quis varius eu, fermentum in elit. Fusce sed lacus vel enim pulvinar lobortis. Nulla et quam imperdiet, scelerisque ex id, semper turpis. Proin ac semper nunc. Morbi vel metus et mauris pellentesque pretium at in tortor.\r\n\r\nVestibulum sit amet eleifend nisi. Ut malesuada augue nulla, vitae elementum purus eleifend a. Duis in quam pulvinar, scelerisque mauris non, mattis elit. Donec efficitur luctus ante imperdiet interdum. Pellentesque nibh lacus, pulvinar vitae magna eget, vehicula tempus nunc. Aenean at erat ut dui ullamcorper pellentesque sit amet nec justo. Nunc sodales sit amet mauris ut aliquam. Vestibulum sit amet ipsum suscipit, maximus eros sit amet, congue justo. Donec vehicula rutrum magna vitae vehicula. Ut gravida enim est, eu tincidunt risus tempor vitae. Morbi volutpat lectus vitae est rutrum porta. Aliquam sodales libero nec tristique venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempus orci sed sapien imperdiet ultricies. Quisque fermentum sollicitudin posuere. Sed nec fermentum dui.', 1, 19, '2024-08-01 21:39:07'),
(32, 51, 'Donec ante enim, placerat et mollis id, dapibus at tellus.', '1722530010_night-sky-colorful-beautiful-clouds-mountain-valley.jpg', 'Curabitur et euismod quam. Duis ac dui at turpis dignissim laoreet. In vel justo lacus. Vestibulum tristique leo ut felis tincidunt, nec ultricies magna varius. Aenean eget hendrerit magna. Nam vitae nunc ut lectus euismod aliquet. Etiam tempor quam id metus semper aliquam. Quisque convallis enim sed nisi vulputate tempor. Proin maximus eros arcu, sed varius quam vulputate vel. Ut tellus lacus, bibendum sed mattis a, pretium et sapien. Donec purus tellus, ornare quis varius eu, fermentum in elit. Fusce sed lacus vel enim pulvinar lobortis. Nulla et quam imperdiet, scelerisque ex id, semper turpis. Proin ac semper nunc. Morbi vel metus et mauris pellentesque pretium at in tortor.\r\n\r\nVestibulum sit amet eleifend nisi. Ut malesuada augue nulla, vitae elementum purus eleifend a. Duis in quam pulvinar, scelerisque mauris non, mattis elit. Donec efficitur luctus ante imperdiet interdum. Pellentesque nibh lacus, pulvinar vitae magna eget, vehicula tempus nunc. Aenean at erat ut dui ullamcorper pellentesque sit amet nec justo. Nunc sodales sit amet mauris ut aliquam. Vestibulum sit amet ipsum suscipit, maximus eros sit amet, congue justo. Donec vehicula rutrum magna vitae vehicula. Ut gravida enim est, eu tincidunt risus tempor vitae. Morbi volutpat lectus vitae est rutrum porta. Aliquam sodales libero nec tristique venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempus orci sed sapien imperdiet ultricies. Quisque fermentum sollicitudin posuere. Sed nec fermentum dui.', 1, 19, '2024-08-01 21:39:33');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created`) VALUES
(43, 1, 'admin', 'admin@gmail.com', '$2y$10$uOlOHwrq7yVv6.sZzGgTkubyTcsDsgI5F8jUgBT8W8adCL3wYJ/6y', '2024-07-21 19:24:22'),
(45, 0, 'qwer', 'qwer@w', '$2y$10$ex8yVEVh7tezVw6CNt1yYuT25a91wYzJ88AXup/Qhigh0w1PGbG0W', '2024-08-01 10:33:05'),
(46, 0, 'admin', 'q@w', '$2y$10$Rd9eehyN0f6ANKhBtY.AMOHE.kTLzCl9zKB6b3LuVNSbH1CSln8PS', '2024-08-01 10:40:19'),
(47, 0, 'qwer', 'qwer@qwer', '$2y$10$pl.QzhehqtXuWGmdt/SoY.p02mMeaj0NMJ1tGem7PnkTtHuxAtHe6', '2024-08-01 10:42:51'),
(48, 1, 'qwer', 'qwerr@qwer', '$2y$10$98dAxM9z4E4ngEvuXN/O3egcp.p7Jy6FRZoqUB4pS.RuMWJb3.8Wy', '2024-08-01 10:43:52'),
(50, 0, 'Alex228', 'Alex@poster', '$2y$10$Xi8oxMRF65WoeOON7cOqzeDKYHmZIFNkbqUwfpjuc6lZuWbsffJ8q', '2024-08-01 14:38:00'),
(51, 1, 'Alexa', 'Alexa@ad', '$2y$10$NcPUZqcDuibAfe6quf6N9eVxajZtpbAmm07.WW2M/F3AtLUzMbbiK', '2024-08-01 15:27:32');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
