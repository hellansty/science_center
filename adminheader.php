<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

	<a href="admin.php" class="tablink">Профиль <?php print $username; ?></a>
	<a href="editrequests.php" class="tablink">Заявки в лаборатории</a>

	<form action="exit.php" method="post"> <input type=submit class="tablink" value="Выйти из аккаунта"> </form>
</body>

</html>