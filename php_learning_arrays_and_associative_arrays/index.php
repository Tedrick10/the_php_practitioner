<?php
	$person = [
		"name" => "Thet Tun Kyaw",
		"age" => 24,
		"hair" => "black",
		"career" => "Software Engineer",
	];
	$animals = ["dog", "cat", "hen"];

	$person["hobby"] = "coding";
	$person["hair"] = "brown";

	$animals[] = "elephant";

	// echo "<pre>";
	// var_dump($person);
	// echo "</pre>";

	// die();

	unset($person["age"]);

	require "index.view.php";
?>