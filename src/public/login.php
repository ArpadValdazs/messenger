<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
if((!isset($email))&&(!isset($password)))
{
	session_destroy();
	header('Location: index.php');
} else {
	include_once('dbconn.php');
	$sql = $pdo->query("SELECT `users`, `email`, `password` FROM `users` WHERE `password`='".$password."' AND `email`='".$email."'");
	$result = $sql->fetchAll(PDO::FETCH_ASSOC);
	var_dump($result);
	foreach ($result as $key=>$value) {
		foreach ($value as $key2=>$value2) {
			$_SESSION[$key2] = $value2;
			echo $key2.'::'.$value2.'<br/>';
		}
	}
}
if(isset($_SESSION['password'])){
	echo 'Вы вошли успешно!';
	echo '<a href="index.php">Перейти обратно!</a>';
} else {
	echo 'Вы неправильно ввели данные!';
	session_destroy();
	echo '<a href="index.php">Перейти обратно!</a>';
}

?>