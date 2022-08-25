<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/style.css">
	<title></title>
</head>

<body>
	<?php
	session_name("log");
	session_start();
	$_SESSION["login"];
	$title = "Регистрация";
	if (!isset($_SESSION["login"])) {

		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$middlename = $_POST["middlename"];
		$position = $_POST["position"];
		$email = $_POST["email"];
		$login = $_POST["login"];
		$phonenumber = $_POST["phonenumber"];
		$password = $_POST["password"];
		$password2 = $_POST["password2"];
		$type = $_POST['type'];
		include("connect.php");
		error_reporting(E_ALL); // проверка ошибок
		ini_set('display_errors', 1); // проверка ошибок
		if ($type == 1) {
			if ($password != $password2) {
				$message = "<p class='error'> Поля пароля и повтора пароля не совападают!</p>";
			} else {
				$strSQL1 = "SELECT login FROM users WHERE login='" . $login . "'";
				$result1 = mysqli_query($db, $strSQL1)
					or die("Ошибка(1)");
				if (!preg_match("|^[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) {
					echo "Проверьте правильность введенного E-mail";
					exit;
				} else {
				}
				if ($row = mysqli_fetch_array($result1)) {
					$message = "<p id='error'> Пользователь с таким логином уже зарегистрирован!</p>";
				} else {
					$strSQL1 = "INSERT INTO users (lastname, firstname, middlename, position, email, phonenumber, login, password) VALUES ('$lastname','$firstname','$middlename','$position','$email','$phonenumber','$login','$password')";
					$result1 = mysqli_query($db, $strSQL1)
						or die("Ошибка");
					$message = "<p align='center' id='success_message'> Вы успешно зарегистрированы!</p>";
					$success = true;
					header("Location:authform.php");
				}
			}
		}
	?>
		<br>
		<div class='authform'>
			<h2>Регистрация</h2>
			<form action="reg.php" method=post>
				<table class="registration" align="center">
					<tr>
						<td>Логин:</td>
						<td><input type=text name="login" required> </td>
					</tr>
					<tr>
						<td>Фамилия:</td>
						<td><input type=text name="lastname" required> </td>
					</tr>
					<tr>
						<td>Имя:</td>
						<td><input type=text name="firstname" required> </td>
					</tr>
					<tr>
						<td>Отчество:</td>
						<td><input type=text name="middlename" required> </td>
					</tr>
					<tr>
						<td>Вы:</td>
						<td><select name='position' required>
								<option disabled selected>...</option>
								<option>Студент</option>
								<option>Школьник</option>
								<option>Организация</option>
							</select></td>
					</tr>
					<tr>
						<td>Телефон:</td>
						<td><input type="tel" name="phonenumber" required> </td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type=text name="email" required> </td>
					</tr>
					<tr>
						<td>Пароль:</td>
						<td><input type=password name="password" required> </td>
					</tr>
					<tr>
						<td>Повторите пароль:</td>
						<td><input type=password name="password2" required> </td>
					</tr>
					<br>
					<tr>
						<td colspan="2">
							<input type=submit value="Зарегистрироваться" id="button">
					</tr>
					</td>
					<tr>
						<td colspan="2"><a href='authform.php' id='button' class="backbutton">Вернуться назад</a></td>
					</tr>
				</table>
				<input type=hidden value=1 name="type">
		</div>
	<?php mysqli_close($db);
	} ?>

</body>

</html>