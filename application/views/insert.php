<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="<?php echo site_url('crud/saveRecord'); ?>">
		<p>Title <input type="text" name="title"></p>
		<p>Description <input type="text" name="description"></p>
		<p><input type="submit" value="Submit" name="save"></p>
	</form>
</body>
</html>