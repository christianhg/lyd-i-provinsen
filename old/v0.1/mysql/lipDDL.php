<?php
	include("../php/core.php");

	if(mysqli_connect_errno($mysqli))
	{
		echo "connection failed " . mysqli_connect_error();
	} 
	else
	{
		message("connected");
	}

	if($mysqli->query("drop table if exists site"))
	{
		message("success: drop table site");
	}
	else
	{
		message("failed: drop table site");
	}

	$createTableSite = 'create table if not exists site (id int auto_increment, name varchar(255) not null, primary key(id))';

	$cts = $mysqli->query($createTableSite);

	if($cts) 
	{ 
		message("success: create table site"); 
	} 
	else 
	{
		message("failed: create table site");
	}

	$mysqli->close();
?>