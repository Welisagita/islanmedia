<!DOCTYPE html>
<html>
<head>
	<title>Days of the Week</title>
	<style>
		.day {
			padding: 10px;
			margin: 5px;
			background-color: #f2f2f2;
			border-radius: 5px;
			cursor: pointer;
		}
		.current-day {
			background-color: green;
			color: white;
		}
		.selected-day {
			box-shadow: 0px 0px 5px 2px #fff;
			outline: 2px solid #fff;
		}
	</style>
	<script>
		function selectDay(day) {
			var days = document.getElementsByClassName("day");
			for (var i = 0; i < days.length; i++) {
				days[i].classList.remove("selected-day");
			}
			day.classList.add("selected-day");
		}
	</script>
</head>
<body>
	<?php
	$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
	$current_day = date('l');
	foreach ($days as $day) {
		if ($day == $current_day) {
			echo "<div class='day current-day' onclick='selectDay(this)'>$day</div>";
		} else {
			echo "<div class='day' onclick='selectDay(this)'>$day</div>";
		}
	}
	?>
	