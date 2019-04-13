<?php 
	require('config/config.php');
	require('config/db.php');

	include('inc/header.php');

	if(isset($_POST['delete'])){
		//Get form data
		$delete_id =  mysqli_real_escape_string($conn,$_POST['delete_id']);
		
		$query = "DELETE FROM post WHERE id = {$delete_id}";

	

	if(mysqli_query($conn, $query)){
		
		header('Location: index.php');
	}else{
		echo 'ERROR '.mysqli_error($conn);
	}
}

	//get id
	$id = mysqli_real_escape_string($conn,$_REQUEST['id']);


	//create query
	$query = 'SELECT * FROM post WHERE id = '.$id;

	//get result
	$result = mysqli_query($conn, $query);

	//fetch data
	$post = mysqli_fetch_assoc($result);

	//var_dump($post);


	//free result
	mysqli_free_result($result);

	//close connection_aborted()
	mysqli_close($conn);

 ?>
	<br>
	<div class="container">
				<h2><?php echo $post['title']; ?></h2>
				<small>Created on <?php echo $post['createdAt']; ?> by <?php echo $post['author']; ?></small>
				<p><?php echo $post['body']; ?></p>
				
				
				<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input value="<?php echo $post['id']?>" type="hidden" name="delete_id" >
					
					<a class="btn btn-primary" href="index.php">Go back to Timeline</a>
					<a class="btn btn-primary" href="editpost.php?id= <?php echo $post['id']; ?>">Edit Post</a>
					<input class="btn btn-danger" type="submit" name="delete" value="Delete">
				</form>
	

				

			</div>	
			

	</div>	




<?php include('inc/footer.php'); ?>















