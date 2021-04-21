<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/registration.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Авторизация</title>
</head>
<body>
	<div class="container">
		<form class="form-signin" action="/login/log" method="POST">
			@csrf
			<h2>Вход</h2>
			<input type="text" name="username" class="form-control" placeholder="Логин" required><br>
			<input type="password" name="password" class="form-control" placeholder="Пароль" required> <br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
			<a href="/registration" class="btn btn-primary btn-block">Вернуться к регистрации</a>
		</form>
	</div>
</body>
</html>