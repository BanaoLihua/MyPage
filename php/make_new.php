<?php
$db = new pdo("mysql:host=localhost;dbname=tachi870","tachi870","tachi870");
$db -> query("INSERT INTO user_info(ID,Pass,Name) VALUES('banao',md5('*********'),'banao')");
?>