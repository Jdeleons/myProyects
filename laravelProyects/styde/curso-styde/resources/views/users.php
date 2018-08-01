<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Listado de usuarios</title>
	</head>
	<body>
		<h1><?php echo e($title) ?></h1>

		<ul>
			<?php foreach ($users as $user):?>
				 <li><?php echo e($user) ?></li>
			<?php endforeach; ?>
		</ul>
	</body>
</html>
