<?php

	$post_id  = $_GET["id"];



	require_once('db_connect2.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM pending_post WHERE post_id=$post_id" )

		or die("Can not execute query");



	echo "<h3 style=color:#1194f5> Record Successfully Deleted</h3><br>";



	echo "<p><a href=author_read.php>READ all numbers</a>";

?>