<?PHP 
session_name("log");
session_start();
$title="Авторизация";
$login=$_POST["login"];
$password=$_POST["password"];
include("connect.php");

$strSQL1="SELECT * FROM users WHERE login='".$login."' AND password='".$password."'";
$result1=mysqli_query($db,$strSQL1)
	or die("Ошибка(1)");
if($row=mysqli_fetch_array($result1))
{	
	session_name("log");
	session_start();
	$_SESSION["login"]=$row["login"];
	$success=true;
}
else
{
	$message="<p id='error'> Пользователя с таким логином и паролем не существует!</p>";
}
mysqli_close($db);
if($success){
	$strSQL1="SELECT position FROM users WHERE login='".$login."' AND password='".$password."'";
	if ($row["user_group_id"]=="1")
	{
		header("Location:admin.php");
	}
	else {
		header("Location:user.php");
	}}
else
{
print $message;
}

