<html>
<head>
	<title>Website user input form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php require_once('nav.php'); ?>
	<?php require_once('upload.php') ?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
	<h1>Website logo</h1>
	<hr>
	<form action="process.php" method="post">
		<input type="text" name="companyName" placeholder="CMQ">
		<br>
    <label for="description">Subject</label>
    <textarea id="description" name="description" placeholder="Write something.." ></textarea>
		
		<input type="submit" value="submit">
	</form>
	<hr>
	<?php require_once('footer.php'); ?>
</body>
</html>