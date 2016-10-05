-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 20 2016 г., 23:05
-- Версия сервера: 5.5.44-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `taskyii2_flexi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(200) NOT NULL,
  `alt` varchar(40) NOT NULL,
  `create` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Дамп данных таблицы `album`
--

INSERT INTO `album` (`id`, `src`, `alt`, `create`) VALUES
(1, '/uploads/fullimage1.jpg', 'The Last of us', '1466403039'),
(2, '/uploads/fullimage2.jpg', 'GTA Vice City', '1466065097'),
(3, '/uploads/fullimage3.jpg', 'Mirror Edge', '1266065497'),
(4, '/uploads/fullimage4.jpg', 'Best cider Europe', '1466065097'),
(5, '/uploads/fullimage5.jpg', 'Fallout-3 (Bethesda Game Studios)', '1466065097'),
(60, '/uploads/2.jpg', 'something out of a cartoon', '1466436437');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create` varchar(20) NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `create`, `role`) VALUES
(11, 'admin', 'admin@gmail.com', '$2y$13$SO/lw9ucPwFRvP.OZSG/MOfw9gRyOX5uqcZXE.c8VTjUPM74CyFMS', '1466063694', 1),
(12, 'littus', 'littus@i.ua', '$2y$13$xr1RYUjjVaLmgTFATqbGBuPFb98F6C3CkCJFJbVu09RFF5ycFn646', '1466065097', 0),
(35, 'homer', 'homer@gmail.com', '$2y$13$Jm4dF1czzwSw8qw23Bh.EuiHssKy6yltV4uplFth5arBGmoCYuqI6', '1466071661', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
