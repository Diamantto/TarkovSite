<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/registration.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Регистрация</title>
</head>
<body>
	<div class="container">
		<form class="form-signin" action="/registration/reg" method="POST">
			@csrf
			<h2>Регистрация</h2>
			<input type="text" name="username" class="form-control" placeholder="Имя пользователя" required><br>
			<input type="email" name="email" class="form-control" placeholder="Email" required><br>
			<input type="password" name="password" class="form-control" placeholder="Пароль" required><br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
			<a href="/login" class="btn btn-primary btn-block">Уже есть аккаунт?</a>
		</form>
	</div>
</body>
</html>