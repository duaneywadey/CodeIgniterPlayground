<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div class="users">
		<h1>Users</h1>
		<ul>
		<?php foreach ($users as $name) { ?>
			<li><?php echo $name->username; ?></li>
		<?php } ?>
		</ul>	
	</div>

	<div class="users">
		<h1>Users By Letter</h1>
		<ul>
		<?php foreach ($usersU as $name) { ?>
			<li><?php echo $name->username; ?></li>
		<?php } ?>
		</ul>	
	</div>

	<div class="choices">
		<h1>Choices</h1>
		<ul>
		<?php foreach ($choices as $row) { ?>
			<li><?php echo $row->description; ?></li>
		<?php } ?>
		</ul>
	</div>
</body>
</html>