<?php 
	require('config/config.php');
	require('config/db.php');

	include('inc/header.php');
	


	//create query
	$query = 'SELECT * FROM post ORDER BY createdAt DESC';

	//get result
	$result = mysqli_query($conn, $query);

	//fetch data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//var_dump($post);


	//free result
	mysqli_free_result($result);

	//close connection
	mysqli_close($conn);

 ?>

	<br>
	<div class="container">
	<h1 class="text-center">Posts</h1>
	<?php foreach($posts as $post): ?>
			<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<small>Created on <?php echo $post['createdAt']; ?> by <?php echo $post['author']; ?></small>
				<p><?php echo $post['body']; ?></p>
				<a class="btn btn-primary" href="post.php?id=<?php echo $post['id']; ?>">Read More..</a>
				<hr>
			</div>
	<?php endforeach; ?>
	</div>	


<?php include('inc/footer.php'); ?>














