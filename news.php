<?PHP
include("connect.php");
$strSQL1 = "SELECT * FROM titles WHERE 	menutitle='Новости'";
$result1 = mysqli_query($db, $strSQL1)
    or die("Ошибка");
$row = mysqli_fetch_array($result1);
$title = $row['title'];
$description = $row['description'];
$backgroundimg = $row['img'];
include("header.php");
?>
<div class="news">
    <div class="container">
        <div class="row">
            <h2>Новости</h2>
        </div>
        <table class="newstable">
            <tr>
                <?PHP
                include("connect.php");
                $i = 0;
                $strSQL1 = "SELECT * FROM news ORDER BY datecreate DESC";
                $result1 = mysqli_query($db, $strSQL1)
                    or die("Ошибка");
                while ($row = mysqli_fetch_array($result1)) {
                ?>
                    <td>
                        <div class="slider__wrapper">
                            <div class="slider__item">
                                <div class="item">
                                    <img src="<?PHP print $row['img']; ?>" width="480px" height="280px">
                                    <h3><?PHP print $row['title']; ?></h3>
                                    <p><?PHP print date("d.m.Y", strtotime($row['datecreate'])); ?></p>
                                    <p><?PHP print $row['description']; ?></p>
                                    <a href="<?PHP print $row['link']; ?>"><?PHP print $row['link']; ?></a>
                                </div>
                            </div>
                        </div>
                    </td>
                <?PHP
                    $i++;
                    if ($i % 2 == 0) echo '</tr><tr>';
                } ?>
            </tr>
        </table>
    </div>
</div>

<?PHP
include("footer.php");
?>