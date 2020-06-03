<?php
	header('Location: http://messengerownframework');
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	var_dump($name);
	var_dump($password);

	include_once('dbconn.php');

	$sql="INSERT INTO users VALUES (NULL, :name, :password, :email);";

	$stmt=$pdo->prepare($sql);
	$stmt->execute(['name'=> $_POST['name'], 'password'=> $_POST['password'],  'email'=> $_POST['email']]);
?>