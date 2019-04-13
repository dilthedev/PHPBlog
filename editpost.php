<?php 
	require('config/config.php');
	require('config/db.php');
	include('inc/header.php');

	//check for submit
	if(isset($_POST['submit'])){
		//Get form data
		$update_id =  mysqli_real_escape_string($conn,$_POST['update_id']);
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$author = mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);


		$query = "UPDATE post SET title = '$title',
								 author = '$author',
								 body = '$body' 
								 WHERE id = {$update_id}";

	

	if(mysqli_query($conn, $query)){
		
		header('Location: index.php');
	}else{
		echo 'ERROR '.mysqli_error($conn);
	}
}
// header('Location: http://www.example.com/');

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
	<h1 class="text-center">Edit Post</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
			<div class="form-group">
				<label for="">Title</label>
				<input value="<?php echo $post['title']?>" placeholder="Title here" type="text" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="">Author</label>
				<input value="<?php echo $post['author']?>"  placeholder="Author's name here" type="text" name="author" class="form-control">
			</div>

			<div class="form-group">
				<label for="">Body</label>
				<textarea placeholder="Write your blog here" name="body" class="form-control"><?php echo $post['body']?></textarea>
			</div>
			<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
			<a href="index.php" class="btn btn-primary">Cancel</a>
	</form>
	</div>	


<?php include('inc/footer.php'); ?>














