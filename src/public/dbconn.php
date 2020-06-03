<?php
$dsn='mysql:host=127.0.0.1;dbname=messenger';
$pdo=new PDO($dsn, 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);