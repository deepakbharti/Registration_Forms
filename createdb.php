<?php
$host="localhost";
$username="root";
$password="";
mysql_connect($host,$username,$password)  or
die("Could not connect database");
if(!mysql_select_db("post"))
{
	$createdb="CREATE DATABASE post";
	mysql_query($createdb) or
	die("can't create database");
}
else
	echo "Database already exists";
?>