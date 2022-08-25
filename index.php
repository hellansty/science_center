<?PHP
include("connect.php");

$strSQL1 = "SELECT * FROM titles WHERE 	menutitle='Главная'";
$result1 = mysqli_query($db, $strSQL1)
	or die("Ошибка");
$row = mysqli_fetch_array($result1);

$title = $row['title'];
$description = $row['description'];
$backgroundimg = $row['img'];
include("header.php");
?>
<div class="statistics">
	<div class='container'>
		<div class="row">
			<div class="col-sm-4">
				<h1>8</h1>
				<p>8 современных оборудований</p>
			</div>
			<div class="col-sm-4">
				<h1>22</h1>
				<p>Более 22 проектов</p>
			</div>
			<div class="col-sm-4">
				<h1>39</h1>
				<p>Более 39 научных публикаций по различным направлениям</p>
			</div>
		</div>
	</div>
</div>

<div class="info">
	<div class='container'>
		<div class="row">
			<div class="col-sm-6">
				<?PHP
				$strSQL1 = "SELECT * FROM aboutcenter";
				$result1 = mysqli_query($db, $strSQL1)
					or die("Ошибка");
				$row = mysqli_fetch_array($result1)
				?>
				<img src="images/<?PHP print $row['img']; ?> " width="500px" height="300px">
			</div>
			<div class="col-sm-6">
				<p><?PHP print $row['description']; ?></p>
			</div>
		</div>
	</div>
</div>

<div class="directions">
	<div class="row">
		<h2>Направления научных исследований</h2>
	</div>
	<?PHP
	$strSQL1 = "SELECT * FROM directions";
	$result1 = mysqli_query($db, $strSQL1)
		or die("Ошибка");
	while ($row = mysqli_fetch_array($result1)) {
	?>
		<div class="row"><img src="images/<?PHP print $row['img']; ?>" width="80px" height="80px"></div>
		<div class="row">
			<h3><?PHP print $row['name']; ?></h3>
		</div>
		<div class="row">
			<p><?PHP print $row['description']; ?></p>
		</div>
	<?PHP } ?>
</div>

<div class="laboratories">
	<div class="row">
		<h2>Лаборатории</h2>
	</div>
	<div class="row">
		<?PHP
		$strSQL1 = "SELECT * FROM labs";
		$result1 = mysqli_query($db, $strSQL1)
			or die("Ошибка");
		while ($row = mysqli_fetch_array($result1)) {
		?>
			<figure class="labs">
				<img src="images/<?PHP print $row['img']; ?>" width="300px" height="200px">
				<fig><a href="#"><p><?PHP print $row['type']; ?></p><br />
				<p>«<?PHP print $row['labname']; ?>»</p></a>
			</figure>
		<?PHP } ?>
	</div>
</div>

<div class="news">
	<div class="row">
		<h2>Новости</h2>
	</div>
	<div class="slider">
		<div class="slider__wrapper">
			<?PHP
			include("connect.php");
			$strSQL1 = "SELECT * FROM news ORDER BY datecreate DESC LIMIT 4";
			$result1 = mysqli_query($db, $strSQL1)
				or die("Ошибка");
			while ($row = mysqli_fetch_array($result1)) {
			?>
				<div class="slider__item">
					<div class="item">
						<img src="<?PHP print $row['img']; ?>" width="480px" height="280px">
						<h3><?PHP print $row['title']; ?></h3>
						<p><?PHP print date("d.m.Y", strtotime($row['datecreate'])); ?></p>
						<p><?PHP print $row['description']; ?></p>
						<a href="<?PHP print $row['link']; ?>"><?PHP print $row['link']; ?></a>
					</div>
				</div>
			<?PHP } ?>
		</div>
		<a class="slider__control slider__control_left" href="#" role="button"></a>
		<a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
	</div>
</div>

<div class="partners">
	<div class="container">
		<div class="row">
			<h2>Партнеры</h2>
		</div>
		<div class="row">
			<?PHP
			$strSQL1 = "SELECT * FROM partners WHERE ntrue=1";
			$result1 = mysqli_query($db, $strSQL1)
				or die("Ошибка");
			while ($row = mysqli_fetch_array($result1)) {
			?>
				<div class="row"><img src="images/<?PHP print $row['img']; ?>" width="98px" height="90px"></div>
			<?PHP } ?>
		</div>
	</div>
</div>

<div class="contacts">
	<div class='container'>
		<div class="row">
			<div class="col-sm-8">
				<?PHP
				$strSQL1 = "SELECT * FROM contacts";
				$result1 = mysqli_query($db, $strSQL1)
					or die("Ошибка");
				$row = mysqli_fetch_array($result1)
				?>
				<?PHP print $row['map']; ?>
			</div>
			<div class="col-sm-4">
				<h2>По вопросам сотрудничества</h2>
				<h4>Контакты</h4>
				<p><?PHP print $row['mail']; ?></p>
				<p><?PHP print $row['phonenumber']; ?></p>
				<h4>Адрес</h4>
				<p><?PHP print $row['address']; ?></p>
			</div>
		</div>
	</div>
</div>
<script src="js/slider.js"></script>
<?PHP
include("footer.php");
?>