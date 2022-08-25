<?PHP
include("connect.php");
error_reporting(E_ALL); // проверка ошибок
ini_set('display_errors', 1); // проверка ошибок

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/bootstrap-grid.min.css">

	<SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
	<SCRIPT type="text/javascript" src="js/popup.js"></SCRIPT>

	<title>Центр цифровых технологий</title>
</head>

<body>
	<div class="header" style=" background: linear-gradient(90deg, rgba(47, 32, 102, 0.95), rgba(34, 101, 163, .5)), url(/images/<?PHP print $backgroundimg; ?>); background-size: cover;
">
		<div class="topheader">
			<div class="row">
				<div class="col-sm-4">
					<div class="dropdown">
						<button onclick="myFunction()" class="dropbtn">≡</button>
						<div id="myDropdown" class="dropdown-content">
							<?PHP
							$strSQL1 = "SELECT * FROM titles";
							$result1 = mysqli_query($db, $strSQL1)
								or die("Ошибка");
							while ($row = mysqli_fetch_array($result1)) {
							?>
								<a href="<?PHP print $row['link']; ?>"><?PHP print $row['menutitle']; ?></a>
							<?PHP } ?>
						</div>
					</div>
				</div>
				<?PHP
				$strSQL1 = "SELECT * FROM contacts";
				$result1 = mysqli_query($db, $strSQL1)
					or die("Ошибка");
				$row = mysqli_fetch_array($result1);
				?>
				<div class="col-sm-2">
					<p><?PHP print $row['phonenumber']; ?></p>
				</div>
				<div class="col-sm-2">
					<p><?PHP print $row['address']; ?></p>
				</div>
				<div class="col-sm-1">
					<img src="/images/gerb.png" width="110px" height="110px" id="gerbimg">
				</div>
				<div class="col-sm-1">
					<a href="index.php"><img src="/images/logo.png" width="290px" height="125px"></a>
				</div>
			</div>
		</div>
		<div class="mainheader">
			<div class="row">
				<div class="col-sm-5">
					<h1><?PHP print $title; ?></h1>
					<h5><?PHP print $description; ?></h5>
					<div class='requestform'>
						<a href="authform.php">Войдите или зарегистрируйтесь, чтобы записаться в лабораторию</a>
					</div>
				<div class="col-sm-7">
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="js/dropdown.js"></script>

</body>

</html>