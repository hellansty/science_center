<?PHP
	 $db = new mysqli("192.168.64.2", "hellansty", "0212", "science_center", 3306);
	if (!$db){ exit ("<p><font color='red'>Нет соединения с базой данных</font></p>"); }
?>
