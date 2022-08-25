<?php session_name("log");
session_start();
$_SESSION["login"];
$login = $_SESSION["login"];
$username = $login;

include("connect.php");
include("userheader.php");
echo "	<SCRIPT type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></SCRIPT>
<SCRIPT type='text/javascript' src='js/popup.js'></SCRIPT>";
?>
<br><br><br><br>
<h2 align="center">Заявки на посещение лабораторий</h2>
<?php
$strSQL1 = "SELECT id FROM `users` WHERE login='$username'";
$result1 = mysqli_query($db, $strSQL1)
    or die("Ошибка");
$row = mysqli_fetch_array($result1);
$id = $row["id"];
?>
<div class='requestform'>
    <button onclick='showPopup();'>Заявка на посещение лаборатории</button>
    <div class='popup'>
        <div class='popup_bg'></div>
        <div class='form'>
            <form method='POST' name='requestform'>
                <div class='input'>
                    <h3>Оставьте заявку на посещение лаборатории</h3>
                    <h5>Здесь вы также можете задать интересующие Вас вопросы или оставить предложение.</h5>

                    <div class='textinput'>
                        <p type='Лаборатория:'><select name='lab' required>
                                <option disabled selected>...</option>
                                <?PHP
                                $strSQL1 = "SELECT id FROM `labs`";
                                $result1 = mysqli_query($db, $strSQL1)
                                    or die("Ошибка");
                                $row = mysqli_fetch_array($result1);
                                $lab_id = $row["id"];
                                $strSQL1 = "SELECT DISTINCT labs.labname FROM `receptions` INNER JOIN labs ON receptions.lab_id=labs.id";

                                $result1 = mysqli_query($db, $strSQL1)
                                    or die("Ошибка");


                                while ($row = mysqli_fetch_array($result1)) {
                                ?>
                                    <option><?PHP print $row['labname']; ?></option>
                                <?PHP } ?>
                            </select></p>

                        <p type='Дата:'><select name='date' required>
                                <option disabled selected>...</option>
                                <?PHP
                                $strSQL1 = "SELECT DISTINCT datetime FROM receptions WHERE countofvisitors<maxcountofvisitors ORDER BY datetime ASC";

                                $result1 = mysqli_query($db, $strSQL1)
                                    or die("Ошибка");
                                while ($row = mysqli_fetch_array($result1)) {
                                ?>
                                    <option><?PHP print $row['datetime']; ?></option>
                                <?PHP } ?>
                            </select></p>

                    </div>
                    <div class="buttominput">
                        <button><input type="submit" name='sendrequest' value="Отправить" /></button>
                        <button onclick='closePopup();'>Закрыть</button>
                    </div>
                    <?PHP

                    if (isset($_POST['sendrequest'])) {
                        $lab = $_POST['lab'];
                        $date = $_POST['date'];

                        error_reporting(E_ALL); // проверка ошибок
                        ini_set('display_errors', 1); // проверка ошибок
                        $strSQL1 = "INSERT INTO requests (user_id, lab_id, lab, date) VALUES ('$id', '$lab_id', '$lab','$date')";
                        $result = mysqli_query($db, $strSQL1) or die('Запрос не удался: ' . mysqli_error($db));
                        print $id;
                        print $lab;
                        print $date;
                        $query = "UPDATE receptions SET countofvisitors=countofvisitors+1 WHERE namelab='$lab' and datetime='$date'";
                        $result = mysqli_query($db, $query) or die('Запрос не удался: ' . mysqli_error($db));
                        header("Refresh:0; url=userrequests.php");
                    }
                    ?>
            </form>
        </div>
    </div>
</div>
<table align="center" class="userrequest">
    <tr>
        <th></th>
        <th>Лаборатория</th>
        <th>Дата</th>
        <th>Статус заявки</th>

    </tr>
    <?php
    $strSQL1 = "SELECT  * FROM `requests` INNER JOIN users ON requests.user_id=users.id WHERE requests.user_id='$id' ORDER BY status ASC, date DESC";
    $result1 = mysqli_query($db, $strSQL1)
        or die("Ошибка");

    while ($row = mysqli_fetch_array($result1)) {
    ?> <tr>
            <td><?PHP print 'Запись в лабораторию:'; ?> </td>
            <td><?PHP print $row['lab']; ?></td>
            <td><?PHP print date('d.m.Y H:i', strtotime($row['date'])); ?></td>
            <td><?PHP print $row['status']; ?></td>
        </tr>
    <?PHP } ?>
</table>

<?php
mysqli_close($db);
?>