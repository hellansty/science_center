<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/style.css">
	<title></title>
</head>

<body>
	<?php
	$backgroundimg = "";
	$description = "";
	if (isset($_SESSION["login"])) {
		session_start();
		print "<a href='admin.php'><center>Личный кабинет</center></a>";
	}
	print $title;
	?>
	<div class="authform">
		<h2>Авторизация</h2>
		<form action='auth.php' method='post' name='authform'>
			<table align="center">
				<tr>
					<td align='left'>Логин:</td>
				</tr>
				<tr>
					<td align='left'>
						<input type='text' name='login'>
					</td>
				</tr>
				<tr>
					<td align='left'>Пароль:</td>
				</tr>
				<tr>
					<td align='left'>
						<input type='password' name='password'>
					</td>
				<tr>
					<td>
						<div class="buttons">
							<input type=submit id='button' value='Войти'>
							<a href='reg.php' id='button'> Зарегистрироваться</a><br>
						</div>
						<div class="backbutton"><a href='index.php' id='button'>Вернуться на главную</a></div>

					</td>
				</tr>
				<tr>
					<td colspan='2'>

					</td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>