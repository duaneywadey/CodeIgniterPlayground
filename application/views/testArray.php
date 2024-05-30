<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php foreach ($todo_list as $row) { ?>
		<h1><?php echo $row; ?></h1>
	<?php } ?>
</body>
</html>