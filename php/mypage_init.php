<?php
require_once("mypage_info.php");
$dsn = "mysql:host=$SERV;dbname=$DBNM";
$db = new pdo($dsn,$USER,$PASS);
?>