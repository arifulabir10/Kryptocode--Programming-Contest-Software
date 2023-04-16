<?php

    $resource_main_id =$_GET["id"];

	$resource_name = $_GET["resource_name"];

	$resource_description = $_GET["resource_description"];

    $resource_link = $_GET["resource_link"];

    print  $resource_main_id;


	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO resource_content VALUES ( NULL, '$resource_main_id' '$resource_name', '$resource_description', '$resource_link')" )

		or die("Can not execute query");





?>

<!-- <script>
    function check()
{
    window.location.href="resource.php";
} -->
</script>