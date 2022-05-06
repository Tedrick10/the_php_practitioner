<?php 
	function dd($data) {
		echo "<pre>";
		die(var_dump($data));
		echo "</pre>";
	}

	function allowToEnterNightClub($age) {
		if($age < 21) {
			echo "You are not allowed to enter the club.";
		} else {
			echo "You are passed.";

		}
	}
?>