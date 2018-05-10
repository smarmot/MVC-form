<html lang="ru">
	<head>
		<title>Форма</title>
        <meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/form/css/style.css">
	</head>
	<body>
		<div class="main">
			<ul class="menu">
				<li class="menu_item"><a class="menu_link" href="/form/">Главная</a></li>
				<li class="menu_item"><a class="menu_link" href="/form/about">О нас</a>
					<ul class="submenu">
						<li class="submenu_item"><a class="submenu_link" href="/form/about/gallery">Галерея</a></li>
						<li class="submenu_item"><a class="submenu_link" href="/form/about/history">История</a></li>
					</ul>
				</li>
				<li class="menu_item"><a class="menu_link" href="/form/contacts">Контакты</a></li>

<? 	if(isset($_SESSION['user_id']) && $_SESSION['user_id']) { ?>
				<li class="menu_item"><a class="menu_link" href="/form/login/logout">Выход</a></li>

<? 	} else { ?>
				<li class="menu_item"><a class="menu_link" href="/form/login">Вход</a></li>
<? 	} ?>
			</ul>

<!--			<h1>--><?//=$row['title']?><!--</h1>-->
			<div class="content">
                <?php include 'app/views/'.$content_view; ?>
            </div>
        </div>
    </body>
</html>