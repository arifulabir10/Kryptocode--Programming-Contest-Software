<html>
	<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
		<title>Pending Post</title>
	</head>
		<body>

			<h1 >Pending Post</h1>
			
			
			
		<div>

<?php
	require_once('db_connect2.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT post_id, post_title, post_description, photo, post_date 
	
	FROM pending_post
	
	order by post_id ASC;" )
		or die("Can not execute query");
		

	echo "<table class='ui celled striped unstackable collapsing table'> \n";
	echo "<table border=2> \n";
	echo "<thead><tr><th>POST ID</th> <th>POST TITLE</th> 
	<th>POST DESCRIPTION</th> <th>PHOTO</th> <th>DATE</th> 
	<th>APPROVE</th> <th>DECLINE</th> </tr></thead><tbody> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $post_id </td>";
		echo "<td> $post_title </td>";
		echo "<td> $post_description </td>";
		echo "<td> $photo </td>";
        echo "<td> $post_date </td>";
        echo "<td> <a href = 'approve.php?post_id=$post_id 
		&post_title=$post_title
		&post_description=$post_description
		&photo=$photo'> Approve </a> </td>";
		echo "<td> <a href = 'decline.php?id=$post_id'> Decline </a> </td>";
	}

	echo "</tbody></table> \n";
?>

		</body>
</html>