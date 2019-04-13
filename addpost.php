<?php 
	require('config/config.php');
	require('config/db.php');

	//check for submit
	if(isset($_POST['submit'])){
		//Get form data
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$author = mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);


		$query ="INSERT INTO post(title,author,body) VALUES ('$title','$author','$body') ";

	

	if(mysqli_query($conn, $query)){
		
		header('Location: index.php');
	}else{
		echo 'ERROR '.mysqli_error($conn);
	}
}
// header('Location: http://www.example.com/');


 ?>

<?php include('inc/header.php'); ?>

	<br>
	<div class="container">
	<h1 class="text-center">Add Post</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
			<div class="form-group">
				<label for="">Title</label>
				<input placeholder="Title here" type="text" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="">Author</label>
				<input placeholder="Author's name here" type="text" name="author" class="form-control">
			</div>

			<div class="form-group">
				<label for="">Body</label>
				<textarea placeholder="Write your blog here" name="body" class="form-control"></textarea>
			</div>

			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
	</form>
	</div>	


<?php include('inc/footer.php'); ?>














