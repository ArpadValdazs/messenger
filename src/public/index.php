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
	<div class = "messageField">
	</div>
	<script src="/js/forms.js"></script>
</body>
</html>