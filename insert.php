<?php
	$heading = $_POST['heading'];	
	$articletext = $_POST['articletext'];
	$myFile = $_POST['myFile'];
	$imgAlt = $_POST['imgAlt'];
	$timestamp = time();
	$username = $_SESSION['username'];

	echo $heading."<br>";
	echo $articletext."<br>";
	ECHO $myFile."<br>";
	echo $imgAlt."<br>";
	echo $timestamp."<br>";


	require_once "connect.php";
	$statement = $DBH->prepare("INSERT INTO articles (heading, imgAlt, articleTxt, imgSrc, time, username) values (?, ?, ?, ?, ?, ? ");
	$statement->bindParam(1, $heading);
	$statement->bindParam(2, $imgAlt);
	$statement->bindParam(3, $articletext);
	$statement->bindParam(4, $myFile);
	$statement->bindParam(5, $timestamp);

	$statement->execute();
	header("location: index.php")
	
?>