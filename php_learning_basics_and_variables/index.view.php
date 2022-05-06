<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style type="text/css">
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>
			<?= $greeting ?>
		</h1>
	</header>
	<main>
		<ul>
			<?php foreach ($names as $name) : ?>
				<li><?= $name ?></li>
			<?php endforeach; ?>
		</ul>
	</main>
</body>
</html>