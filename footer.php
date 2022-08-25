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
</head>

<body>
    <div class="footer" style=" background: linear-gradient(90deg, rgba(47, 32, 102, 0.95), rgba(34, 101, 163, .5)), url(/images/stars.jpg); background-size: cover;
">
        <div class="row">
            <div class="col-sm-3">
                <a href="index.php"><img src="/images/logo.png" width="290px" height="125px"></a>
            </div>
            <div class="col-sm-5">
                <?PHP
                $strSQL1 = "SELECT * FROM titles";
                $result1 = mysqli_query($db, $strSQL1)
                    or die("Ошибка");
                while ($row = mysqli_fetch_array($result1)) {
                ?>
                    <a href="<?PHP print $row['link']; ?>"><?PHP print $row['menutitle']; ?></a>
                <?PHP } ?>
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
        </div>
    </div>
    </div>

</body>

</html>