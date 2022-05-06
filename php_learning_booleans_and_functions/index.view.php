<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Learning 003</title>
</head>
<body>
	<header>
		<h1>Task For The Day</h1>
	</header>

	<main>
		<ul>
			<li>
				<strong>Name</strong>: <?= $task["title"] ?>
			</li>
			<li>
				<strong>Due Date</strong>: <?= $task["due"] ?>
			</li>
			<li>
				<strong>Personal Responsible</strong>: <?= $task["assigned_to"] ?>
			</li>
			<li>
				<strong>Status</strong>:

				<?php if($task["completed"]) : ?>
					<span class='icon'>&#9989;</span>
				<?php else : ?>
					<span class="icon">&#10060;</span>
				<?php endif; ?>
			</li>
		</ul>
	</main>
</body>
</html>