-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 19 2018 г., 18:16
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `pagename` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `pagename`, `title`, `content`) VALUES
(1, 'about', 'О нас', '<div class=\"text\">Мы делаем сайты</div>'),
(2, 'gallery', 'Галерея', '<div class=\"text\">Здесь могут быть Ваши картинки</div>'),
(3, 'history', 'История', '<div class=\"text\">Наша история. Очень интересно.</div>'),
(4, 'contacts', 'Контакты', '<div class=\"text\">Вы можете связаться с нами.</div>'),
(5, 'registration', 'Регистрация', '			<form class=\"form\" action=\"index.php\" method=\"POST\" name=\"formReg\">\r\n				<div class=\"row\">\r\n					<div class=\"col-right\">\r\n						<label class=\"label\">Логин<span class=\"text-warning\">*</span></label>\r\n					</div>\r\n					<div class=\"col-left\">\r\n						<input type=\"text\" class=\"input input-text\" name=\"login\" required />\r\n					</div>\r\n				</div>\r\n\r\n				<div class=\"row\">\r\n					<div class=\"col-right\">\r\n						<label class=\"label\">Пароль<span class=\"text-warning\">*</span></label>\r\n					</div>\r\n					<div class=\"col-left\">\r\n						<input type=\"password\" class=\"input input-text\" name=\"pswd\" required />\r\n					</div>\r\n				</div>\r\n\r\n				<div class=\"row\">\r\n					<div class=\"col-right\">\r\n						<label class=\"label\">Подтвердите пароль<span class=\"text-warning\">*</span></label>\r\n					</div>\r\n					<div class=\"col-left\">\r\n						<input type=\"password\" class=\"input input-text\" name=\"confirmPswd\" required/>\r\n					</div>\r\n				</div>\r\n\r\n				<div class=\"row\">\r\n					<input type=\"submit\" class=\"btn-sbm\" name=\"reg\" value = \"Зарегистрироваться\" />\r\n				</div>\r\n			</form>'),
(6, 'login', 'Вход только для зарегистрированных пользователей', '			<form class=\"form\" action=\"login.php\" method=\"POST\" name=\"formReg\">\n				<div class=\"row\">\n					<div class=\"col-right\">\n						<label class=\"label\">Логин<span class=\"text-warning\">*</span></label>\n					</div>\n					<div class=\"col-left\">\n						<input type=\"text\" class=\"input input-text\" name=\"login\" required />\n					</div>\n				</div>\n\n				<div class=\"row\">\n					<div class=\"col-right\">\n						<label class=\"label\">Пароль<span class=\"text-warning\">*</span></label>\n					</div>\n					<div class=\"col-left\">\n						<input type=\"password\" class=\"input input-text\" name=\"pswd\" required />\n					</div>\n				</div>\n\n				<div class=\"row\">\n					<input type=\"submit\" class=\"btn-sbm\" name=\"auth\" value = \"Войти\" />\n				</div>\n			</form>\n<div class=\"text\">Если Вы еще не зарегистрированы, то <a href=\"http://localhost/form/?page=registration\">зарегистрируйтесь</a>, чтобы оставить отзыв.</div>'),
(7, 'index', 'Отзывы о нас', '			<form class=\"form\" method=\"POST\" action=\"index.php\" name=\"\">\r\n				<div class=\"row\">\r\n					<div class=\"col-right\">\r\n						<label class=\"label\">Имя<span class=\"text-warning\">*</span></label>\r\n					</div>\r\n					<div class=\"col-left\">\r\n						<input type=\"text\" class=\"input input-text\" name=\"name\" required />\r\n					</div>\r\n				</div>\r\n\r\n				<div class=\"row\">\r\n					<div class=\"col-right\">\r\n						<label class=\"label\">Email</label>\r\n					</div>			\r\n					<div class=\"col-left\">\r\n						<input type=\"email\" class=\"input input-text\" name=\"email\"/>\r\n					</div>\r\n				</div>\r\n\r\n				<div class=\"row\">\r\n					<div class=\"col-right\">\r\n						<label class=\"label\">Содержание<span class=\"text-warning\">*</span></label>\r\n					</div>		\r\n					<div class=\"col-left\">\r\n						<textarea name=\"message\" class=\"input input-area\" required></textarea>\r\n					</div>\r\n				</div>\r\n\r\n				<div class=\"row\">\r\n					<div class=\"col-right\">\r\n						<label class=\"label\">Подтверждение изображения<span class=\"text-warning\">*</span></label>\r\n					</div>\r\n					<div class=\"col-left\">\r\n						<img class=\"img-captcha\" id=\"captcha\" src=\"securimage/securimage_show.php\" alt=\"CAPTCHA Image\" />\r\n						<a href=\"#\" onclick=\"document.getElementById(\'captcha\').src = \'securimage/securimage_show.php?\' + Math.random(); return false\"><img class=\"img-refresh\" src=\"securimage/images/refresh.png\" alt=\"Обновить\" /></a>\r\n		  				<input class=\"input input-captcha\" type=\"text\" name=\"captcha_code\" maxlength=\"6\" />\r\n		  			</div>\r\n				</div>\r\n\r\n				<input type=\"hidden\" name=\"date\" value=\"<? echo date(\'c\');?>\" />\r\n\r\n				<div class=\"row\">\r\n					<input type=\"submit\" class=\"btn-sbm\" name=\"submit\" value = \"Оставить отзыв\" />\r\n				</div>\r\n			</form>');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `activity` varchar(10) NOT NULL,
  `checkOK` varchar(10) NOT NULL,
  `date_send` date NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `activity`, `checkOK`, `date_send`, `user`) VALUES
(1, 'Марина', 'surokmar@gmail.com', 'Плохой сервис. Много букв многобукв много букв много букв. Многобукв много букв, букв много. Получилось мало букв.', 'rest', 'on', '2018-01-01', 0),
(2, 'Елена', 'surokmar@gmail.com', 'dhd', 'work', 'on', '2018-01-02', 0),
(3, 'Владимир', 'surokmar@gmail.com', 'Ниток нет.', 'rest', 'on', '2018-01-03', 0),
(4, 'Николай', 'surokmar@gmail.com', 'аыв', 'rest', 'on', '2018-01-04', 0),
(5, 'Валентина Петровна', 'surokmar@gmail.com', 'Тест', 'rest', 'on', '2018-01-05', 0),
(6, 'Альберт', 'surokmar@gmail.com', 'Тест2', 'rest', 'on', '2018-01-06', 0),
(7, 'Иван', 'surokmar@gmail.com', 'Отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв.', 'rest', 'on', '2018-01-07', 0),
(8, 'Илон Маск', 'surokmar@gmail.com', 'Я запустил свою Теслу в космос, а ты нет.', '', '', '2018-01-29', 0),
(9, 'Екатерина Викторовна', 'surokmar@gmail.com', 'Securimage requires no configuration after downloading. All you need to do is display the captcha image somewhere in your form, and validate the code submitted from within your form processor. Customising the image is also very easy. This guide explains the process of adding Securimage to an existing form.', '', '', '2018-01-29', 0),
(10, 'Маргарита', 'surokmar@gmail.com', 'Огонь!', '', '', '2018-02-01', 0),
(11, 'Элина', 'surokmar@gmail.com', 'Так себе.', '', '', '2018-02-10', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `email`) VALUES
(3, 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
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
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
