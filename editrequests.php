<?php session_name("log");
session_start();
$_SESSION["login"];
$login = $_SESSION["login"];
$username = $login;
include("connect.php");
include("adminheader.php");
?>
<br><br><br><br>
<h2 align="center">Заявки на посещение лабораторий</h2>

<ul id="my-accordion" class="accordionjs">
    <li>
        <div>Школьники</div>
        <div>
            <?php
            $query = "SELECT  users.lastname, users.firstname, users.middlename, users.position, users.phonenumber, users.email, requests.id, requests.lab, requests.date, requests.created, requests.status FROM `requests` LEFT JOIN users ON requests.user_id=users.id WHERE position='Школьник' ORDER BY status ASC, date DESC";
            $result = mysqli_query($db, $query) or die('Запрос не удался: ' . mysqli_error($db));
            $num = mysqli_num_rows($result);
            $cur = 1;
            ?>
            <table>
                <tr>
                    <th></th>
                    <th>ФИО</th>
                    <th></th>
                    <th>Соц.статус</th>
                    <th>Номер телефона</th>
                    <th>Эл.почта</th>
                    <th>Лаборатория</th>
                    <th>Дата посещения</th>
                    <th>Дата заявки</th>
                    <th>Статус</th>
                </tr>
                <?php
                while ($num >= $cur) {
                    $row = mysqli_fetch_array($result);
                    $id = $row["id"];
                    $firstname = $row["firstname"];
                    $middlename = $row["middlename"];
                    $lastname = $row["lastname"];
                    $position = $row["position"];
                    $phonenumber = $row["phonenumber"];
                    $email = $row["email"];
                    $lab = $row["lab"];
                    $date = $row["date"];
                    $created = $row["created"];
                    $status = $row["status"];
                ?>
                    <form method="POST">
                        <tr>
                            <td><?php echo $lastname ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $position ?></td>
                            <td><?php echo $phonenumber ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $lab ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($date)); ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($created)); ?></td>
                            <td><?php echo $status ?></td>


                            <input type="hidden" name="update" value="<?php echo $id ?>" />
                            <td><input type="text" name="newstatus" size="4" /></td>
                            <!--<td><?php echo "<input type=\"submit\" name=\"upd\" value=\"Обновить\"/>"; ?></td>-->
                            <td><input type="submit" name="upd" value="&#9998" /></td>
                        </tr>
                    </form>
                <?php
                    $cur++;
                }
                ?>
            </table>
        </div>
    </li>
    <li>
        <div>Студенты</div>
        <div>
            <?php
            $query = "SELECT  users.lastname, users.firstname, users.middlename, users.position, users.phonenumber, users.email, requests.id, requests.lab, requests.date, requests.created, requests.status FROM `requests` INNER JOIN users ON requests.user_id=users.id WHERE position='Студент' ORDER BY status ASC, date DESC";
            $result = mysqli_query($db, $query) or die('Запрос не удался: ' . mysqli_error($db));
            $num = mysqli_num_rows($result);
            $cur = 1;
            ?>
            <table>
            <tr>
                    <th></th>
                    <th>ФИО</th>
                    <th></th>
                    <th>Соц.статус</th>
                    <th>Номер телефона</th>
                    <th>Эл.почта</th>
                    <th>Лаборатория</th>
                    <th>Дата посещения</th>
                    <th>Дата заявки</th>
                    <th>Статус</th>
                </tr>
                <?php
                while ($num >= $cur) {
                    $row = mysqli_fetch_array($result);
                    $id = $row["id"];
                    $firstname = $row["firstname"];
                    $middlename = $row["middlename"];
                    $lastname = $row["lastname"];
                    $position = $row["position"];
                    $phonenumber = $row["phonenumber"];
                    $email = $row["email"];
                    $lab = $row["lab"];
                    $date = $row["date"];
                    $created = $row["created"];
                    $status = $row["status"];
                ?>
                    <form method="POST">
                        <tr>
                            <td><?php echo $lastname ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $position ?></td>
                            <td><?php echo $phonenumber ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $lab ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($date)); ?></td>
             
                            <td><?php echo date("H:i d.m.Y", strtotime($created)); ?></td>
                            <td><?php echo $status ?></td>

                            <input type="hidden" name="update" value="<?php echo $id ?>" />
                            <td><input type="text" name="newstatus" size="4" /></td>
                            <!--<td><?php echo "<input type=\"submit\" name=\"upd\" value=\"Обновить\"/>"; ?></td>-->
                            <td><input type="submit" name="upd" value="&#9998" /></td>
                        </tr>
                    </form>
                <?php
                    $cur++;
                }
                ?>
            </table>
        </div>
    </li>
    <li>
        <div>Организации</div>
        <div>
            <?php
            $query = "SELECT  users.lastname, users.firstname, users.middlename, users.position, users.phonenumber, users.email, requests.id, requests.lab, requests.date, requests.created, requests.status FROM `requests` INNER JOIN users ON requests.user_id=users.id WHERE position='Организация' ORDER BY status ASC, date DESC";
            $result = mysqli_query($db, $query) or die('Запрос не удался: ' . mysqli_error($db));
            $num = mysqli_num_rows($result);
            $cur = 1;
            ?>
            <table>
            <tr>
                    <th></th>
                    <th>ФИО</th>
                    <th></th>
                    <th>Соц.статус</th>
                    <th>Номер телефона</th>
                    <th>Эл.почта</th>
                    <th>Лаборатория</th>
                    <th>Дата посещения</th>
                    <th>Дата заявки</th>
                    <th>Статус</th>
                </tr>
                <?php
                while ($num >= $cur) {
                    $row = mysqli_fetch_array($result);
                    $id = $row["id"];
                    $firstname = $row["firstname"];
                    $middlename = $row["middlename"];
                    $lastname = $row["lastname"];
                    $position = $row["position"];
                    $phonenumber = $row["phonenumber"];
                    $email = $row["email"];
                    $lab = $row["lab"];
                    $date = $row["date"];
                    $created = $row["created"];
                    $status = $row["status"];
                ?>
                    <form method="POST">
                        <tr>
                            <td><?php echo $lastname ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $position ?></td>
                            <td><?php echo $phonenumber ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $lab ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($date)); ?></td>
                  
                            <td><?php echo date("H:i d.m.Y", strtotime($created)); ?></td>
                            <td><?php echo $status ?></td>
                            <input type="hidden" name="update" value="<?php echo $id ?>" />
                            <td><input type="text" name="newstatus" size="4" /></td>
                            <!--<td><?php echo "<input type=\"submit\" name=\"upd\" value=\"Обновить\"/>"; ?></td>-->
                            <td><input type="submit" name="upd" value="&#9998" /></td>
                        </tr>
                    </form>
                <?php
                    $cur++;
                }
                ?>
            </table>
        </div>
    </li>
    <li>
        <div>Все заявки</div>
        <div>
            <?php
            $query = "SELECT  users.lastname, users.firstname, users.middlename, users.position, users.phonenumber, users.email, requests.id, requests.lab, requests.date, requests.created, requests.status FROM `requests` INNER JOIN users ON requests.user_id=users.id  ORDER BY status ASC, date DESC";
            $result = mysqli_query($db, $query) or die('Запрос не удался: ' . mysqli_error($db));
            $num = mysqli_num_rows($result);
            $cur = 1;
            ?>
            <table>
            <tr>
                    <th></th>
                    <th>ФИО</th>
                    <th></th>
                    <th>Соц.статус</th>
                    <th>Номер телефона</th>
                    <th>Эл.почта</th>
                    <th>Лаборатория</th>
                    <th>Дата посещения</th>
                    <th>Дата заявки</th>
                    <th>Статус</th>
                </tr>
                <?php
                while ($num >= $cur) {
                    $row = mysqli_fetch_array($result);
                    $id = $row["id"];
                    $firstname = $row["firstname"];
                    $middlename = $row["middlename"];
                    $lastname = $row["lastname"];
                    $position = $row["position"];
                    $phonenumber = $row["phonenumber"];
                    $email = $row["email"];
                    $lab = $row["lab"];
                    $date = $row["date"];
                    $created = $row["created"];
                    $status = $row["status"];
                ?>
                    <form method="POST">
                        <tr>
                            <td><?php echo $lastname ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $position ?></td>
                            <td><?php echo $phonenumber ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $lab ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($date)); ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($created)); ?></td>
                            <td><?php echo $status ?></td>

                            <input type="hidden" name="update" value="<?php echo $id ?>" />
                            <td><input type="text" name="newstatus" size="4" /></td>
                            <!--<td><?php echo "<input type=\"submit\" name=\"upd\" value=\"Обновить\"/>"; ?></td>-->
                            <td><input type="submit" name="upd" value="&#9998" /></td>
                        </tr>
                    </form>
                <?php
                    $cur++;
                }
                ?>
            </table>
        </div>
    </li>
    <li>
        <div>Просмотренные</div>
        <div>
            <?php
            $query = "SELECT  users.lastname, users.firstname, users.middlename, users.position, users.phonenumber, users.email, requests.id, requests.lab, requests.date, requests.created, requests.status FROM `requests` INNER JOIN users ON requests.user_id=users.id WHERE status='1' ORDER BY status ASC, date DESC";
            $result = mysqli_query($db, $query) or die('Запрос не удался: ' . mysqli_error($db));
            $num = mysqli_num_rows($result);
            $cur = 1;
            ?>
            <table>
            <tr>
                    <th></th>
                    <th>ФИО</th>
                    <th></th>
                    <th>Соц.статус</th>
                    <th>Номер телефона</th>
                    <th>Эл.почта</th>
                    <th>Лаборатория</th>
                    <th>Дата посещения</th>
                    <th>Дата заявки</th>
                    <th>Статус</th>
                </tr>
                <?php
                while ($num >= $cur) {
                    $row = mysqli_fetch_array($result);
                    $id = $row["id"];
                    $firstname = $row["firstname"];
                    $middlename = $row["middlename"];
                    $lastname = $row["lastname"];
                    $position = $row["position"];
                    $phonenumber = $row["phonenumber"];
                    $email = $row["email"];
                    $lab = $row["lab"];
                    $date = $row["date"];
                    $created = $row["created"];
                    $status = $row["status"];
                ?>
                    <form method="POST">
                        <tr>
                            <td><?php echo $lastname ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $position ?></td>
                            <td><?php echo $phonenumber ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $lab ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($date)); ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($created)); ?></td>
                            <td><?php echo $status ?></td>

                            <input type="hidden" name="update" value="<?php echo $id ?>" />
                            <td><input type="text" name="newstatus" size="4" /></td>
                            <!--<td><?php echo "<input type=\"submit\" name=\"upd\" value=\"Обновить\"/>"; ?></td>-->
                            <td><input type="submit" name="upd" value="&#9998" /></td>
                        </tr>
                    </form>
                <?php
                    $cur++;
                }
                ?>
            </table>
        </div>
    </li>
    <li>
        <div>Непросмотренные</div>
        <div>
            <?php
            $query = "SELECT  users.lastname, users.firstname, users.middlename, users.position, users.phonenumber, users.email, requests.id, requests.lab, requests.date, requests.created, requests.status FROM `requests` INNER JOIN users ON requests.user_id=users.id WHERE status='0' ORDER BY status ASC, date DESC";
            $result = mysqli_query($db, $query) or die('Запрос не удался: ' . mysqli_error($db));
            $num = mysqli_num_rows($result);
            $cur = 1;
            ?>
            <table>
            <tr>
                    <th></th>
                    <th>ФИО</th>
                    <th></th>
                    <th>Соц.статус</th>
                    <th>Номер телефона</th>
                    <th>Эл.почта</th>
                    <th>Лаборатория</th>
                    <th>Дата посещения</th>
                    <th>Дата заявки</th>
                    <th>Статус</th>
                </tr>
                <?php
                while ($num >= $cur) {
                    $row = mysqli_fetch_array($result);
                    $id = $row["id"];
                    $firstname = $row["firstname"];
                    $middlename = $row["middlename"];
                    $lastname = $row["lastname"];
                    $position = $row["position"];
                    $phonenumber = $row["phonenumber"];
                    $email = $row["email"];
                    $lab = $row["lab"];
                    $date = $row["date"];
                    $created = $row["created"];
                    $status = $row["status"];
                ?>
                    <form method="POST">
                        <tr>
                            <td><?php echo $lastname ?></td>
                            <td><?php echo $firstname ?></td>
                            <td><?php echo $middlename ?></td>
                            <td><?php echo $position ?></td>
                            <td><?php echo $phonenumber ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $lab ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($date)); ?></td>
                            <td><?php echo date("H:i d.m.Y", strtotime($created)); ?></td>
                            <td><?php echo $status ?></td>

                            <input type="hidden" name="update" value="<?php echo $id ?>" />
                            <td><input type="text" name="newstatus" size="4" /></td>
                            <!--<td><?php echo "<input type=\"submit\" name=\"upd\" value=\"Обновить\"/>"; ?></td>-->
                            <td><input type="submit" name="upd" value="&#9998" /></td>
                        </tr>
                    </form>
                <?php
                    $cur++;
                }
                ?>
            </table>
        </div>
    </li>
</ul>
<?php
if (isset($_POST['upd'])) {
    $update = $_POST['update'];
    $newstatus = $_POST['newstatus'];
    if (!preg_match("|^[\d]+$|", $newstatus)) {
        exit("<font color=red>Добавить оплату - неверный формат ввода, требуется число</font>");
    }
    $query = "UPDATE requests SET status='$newstatus' WHERE id='$update'";
    $result = mysqli_query($db, $query) or die('Запрос не удался: ' . mysqli_error($db));
    echo ("<meta http-equiv='refresh' content='0'>");
}
?>
<script src="js/accordion.min.js"></script>
<script>
    jQuery(document).ready(function($) {
        $("#my-accordion").accordionjs();
    });
</script>
<?php
mysqli_close($db);
?>