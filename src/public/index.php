<!doctype html> 
<html>
<head>
	<link href="/css/style.css" type="text/css" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>
	<?php
		if(isset($_SESSION['password'])){
			include_once('greeting_block.php');
		} else {
			include_once('login_form.php');
		}
		var_dump($_SESSION);
		foreach ($_SESSION as $key => $value) {
			echo 'key: '.$key.'value: '.$value;
		}
	?>
	<div class = "chatField" id = "chatField">
	</div>
	<div class = "textField">
		<input class = "textField" type = "text"/>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="/js/forms.js"></script>
	<script src="/js/sockets.js"></script>
	
	
</body>
</html>