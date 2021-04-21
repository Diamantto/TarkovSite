<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TarkovHub</title>
	<link rel="stylesheet" href="css/layout.css">
	@yield('css-file')
</head>
<body>
	<header>
		<div class="container">
			<div class="nav">
				<a href="/">
					<img src="img/logo_desktop.png" alt="Tarkov Hub" class="logo">
				</a>
				<ul class="menu">
					<li>
						<a href="/traders">Торговцы</a>
					</li>
					<li>
						<a href="/maps">Карты</a>
					</li>
					<li>
						<a href="#">Ключи</a>
					</li>
				</ul>
				@if(request()->cookie('name') === null)
				<ul class="menu_login">
					<li>
						<a href="/login">Вход</a>
					</li>
					<li>
						<a href="/registration">Регистрация</a>
					</li>
				</ul>
				@else
				<ul class="authorized">
					<li>
						<a href="/logout"><img src="img/logo_exit.png" alt=""></a>
					</li>
					<li>
						<a href="#">Привет, {{request()->cookie('name')}}</a>
					</li>
				</ul>
				@endif
			</div>
		</header>
		@yield('content')
		<footer>
			<div class="fresh_news">
				<h3>СВЕЖИЕ ЗАПИСИ</h3>
				<div class="allnews">
					<div>
						Путь виживальщика. Торчок                           
					</div>
					<div>
						Сотрудник Terragroup                            
					</div>
					<div>
						Текстиль. Часть 2                       
					</div>
					<div>
						Текстиль. Часть 1                       
					</div>
					<div>
						Кабинет химии                       
					</div>
				</div>
			</div>
			<div class="articles">
				<h3>Интересные статьи</h3>
				<div class="all_articles">
					<div>
						Обновление 0.12                 
					</div>
					<div>
						Гайд по оптике                  
					</div>
					<div>
						Квестовые предметы                  
					</div>
				</div>
			</div>
			<div class="about_us">
				<h3>О нас</h3>
				<div>
					Email: <span>artur.grishko.2002@gmail.com</span>                    
				</div>
				<div>
					Телефон:    <span>+380-96-44-77-528</span>      
				</div>
			</div>
		</footer>
	</body>
	</html>