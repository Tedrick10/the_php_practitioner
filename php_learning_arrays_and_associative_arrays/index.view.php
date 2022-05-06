<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<main>
		<ol>
			<?php foreach($person as $key => $value) : ?>
				<li>
					<strong><?= $key ?></strong>: <?= $value ?>		
				</li>
			<?php endforeach; ?>
		</ol>

		<ul>
			<?php foreach ($animals as $animal) : ?>
				<li>
					<?= $animal ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</main>
</body>
</html>