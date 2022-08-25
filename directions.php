<?PHP
include("connect.php");

$strSQL1 = "SELECT * FROM titles WHERE 	menutitle='Направления'";
$result1 = mysqli_query($db, $strSQL1)
	or die("Ошибка");
$row = mysqli_fetch_array($result1);
$title = $row['title'];
$description = $row['description'];
$backgroundimg = $row['img'];
include("header.php");
?>
<div class="directions">
	<div class="row">
		<h2>Направления научных исследований</h2>
	</div>
	<?PHP
		$strSQL1 = "SELECT directions.name, directions.description, directions.img, labs.labname FROM `directions` INNER JOIN labs ON directions.lab_id=labs.id";

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
		<div class="row">
			<p><b>Лаборатории:</b><?PHP print $row['labname']; ?></p>
		</div>
	<?PHP } ?>
</div>
<?PHP
include("footer.php");
?>