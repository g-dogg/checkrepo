<?php
require '../data/config.php';
        header('Content-Type: text/html; charset=utf-8');
	$dbase = mysql_connect($dbsrv, $dbuser, $dbpass) or die("Не могу подключиться к БД!<br />Причина" .mysql_error());
	mysql_select_db($dbname) or die("Не могу выбрать базу данных!" .mysql_error());
	mysql_query("SET NAMES utf8");
?>
