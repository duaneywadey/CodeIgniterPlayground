<!DOCTYPETi html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php echo site_url('crud/saveRecord'); ?>
	<form method="POST" action="<?php echo site_url('crud/saveRecord'); ?>">
		<p>Title <input type="text" name="title"></p>
		<p>Description <input type="text" name="description"></p>
		<p>Name <input type="text" name="name"></p>
		<p><input type="submit" value="Submit" name="save"></p>
	</form>

	<table>
		<tr>
			<th>Title</th>
			<th>Description</th>
			<th>Name</th>
		</tr>
		
		<?php foreach ($records as $col) { ?>
		<tr>
			<td><?php echo $col->title; ?></td>						
			<td><?php echo $col->description; ?></td>						
			<td><?php echo $col->name; ?></td>						
		</tr>
		<?php } ?>

	</table>
</body>
</html>