<?php
session_name("log");
session_start();
$title = "Личный кабинет";
$login = $_SESSION["login"];
$username = $login;
if (!isset($login)) {
	$success = false;
	$message = "<p id='error'>Вы не авторизованы!</p>";
} else
	$success = true;
include("userheader.php");
print $message;

if ($success) {
	include("connect.php");
	$strSQL = "SELECT * FROM users WHERE login='" . $login . "'";
	$result = mysqli_query($db, $strSQL)
		or die("Ошибка(1)");
	if ($row = mysqli_fetch_array($result)) {
?>
		<br><br><br><br>
		<div class="profileform">
			<h2 align="center">Ваши личные данные</h2>
			<form action="" method="post">

				<table class="menureg" align="center">
					<tr>
						<td><br></td>
					</tr>
					<tr>
						<td>Фамилия</td>
						<td><input type=text name="lastname" value="<?php print $row["lastname"] ?>" required> </td>
					</tr>
					<tr>
						<td>Имя</td>
						<td><input type=text name="firstname" value="<?php print $row["firstname"] ?>" required> </td>
					</tr>
					<tr>
						<td>Отчество</td>
						<td><input type=text name="middlename" value="<?php print $row["middlename"] ?>" required> </td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type=text name="email" value="<?php print $row["email"] ?>" required></td>
					</tr>
					<tr>
						<td>Номер телефона</td>
						<td><input type=text name="phonenumber" value="<?php print $row["phonenumber"] ?>" required> </td>
					</tr>
				</table>
				</br></br>
				<center><input type=submit id="button" name="save" value="Сохранить изменения"></center>
			</form>
		</div>
<?php
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$middlename = $_POST["middlename"];
		$email = $_POST["email"];
		$phonenumber = $_POST["phonenumber"];
		$title = "Регистрация";
		if (isset($_POST['save'])) {
			$strSQL1 = "UPDATE users SET  lastname='" . $lastname . "', firstname='" . $firstname . "', middlename='" . $middlename . "', phonenumber='" . $phonenumber . "', email='" . $email . "' where login='" . $login . "'";
			$result1 = mysqli_query($db, $strSQL1)
				or die("Ошибка");
			echo ("<meta http-equiv='refresh' content='0'>");
		}
	}
	mysqli_close($db);
}
?>