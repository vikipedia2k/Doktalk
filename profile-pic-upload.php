<?php
  // Create database connection
  $con = mysqli_connect("localhost", "root", "", "myhmsdb");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($con, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image_url) VALUES ('$image_text')";
  	// execute query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($con, "SELECT * FROM images");
?>