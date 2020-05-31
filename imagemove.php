<!DOCTYPE html>
<html>
	<head>
		<title>Image Move</title>
		<meta charset="utf-8" />
	</head>
		<?php
		if(isset($_POST['upload'])) {
			$file = $_FILES['file'];
			print_r($file);
			$file_name = $_FILES['file']['name'];
			$file_type = $_FILES['file']['type'];
			$file_size = $_FILES['file']['size'];
			$file_tmp_loc = $_FILES['file']['tmp_name'];
			$file_store = "../upload/".$file_name;
			if(move_uploaded_file($file_tmp_loc, $file_store)) {
				echo "<br>Uploaded Successfully";
			}
			print "<br>Name of the file is $file_name.";
			print "<br>Type of file is $file_type.";
			print "<br>Size of the file is $file_size";
			print "<br>Temporary location of file is $file_tmp_loc.";
		}
	?>
	<body>
		
		<form action = "?" method = "POST" enctype = "multipart/form-data">
			<label>Uploading Files</label><br><br>
			<p><input type="file" name="file"/></p>
			<p><input type="Submit" name="upload" value="Upload"/></p>
		</form>
		
	</body>
</html>