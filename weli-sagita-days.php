<!DOCTYPE html>
<html>
<head>
	<title>Days of the Week</title>
	<style>
		.day {
			display: inline-block;
			padding: 10px;
			margin: 5px;
			background-color: #2e94f7;
			border-radius: 5px;
			cursor: pointer;
			color: white;
		}
		.current-day {
			background-color: green;
			color: white;
		}
		.selected-day {
			box-shadow: 2px 2px 5px 2px #000;
			outline: 2px solid #fff;
			border: red;
		}
		#selected-day {
			margin-top: 20px;
			font-weight: bold;
			text-align: center;
		}
		#selected-day span {
			color: #2e94f7;
		}
		#today {
			margin-top: 20px;
			margin-bottom: 20px;
			font-weight: bold;
			text-align: center;
		}
		#today span {
			color: green;
		}
		#days-container {
			text-align: center;
			background-color: #c9cbcb;
		}
	</style>
	<script>
		function selectDay(day) {
			var days = document.getElementsByClassName("day");
			for (var i = 0; i < days.length; i++) {
				days[i].classList.remove("selected-day");
			}
			day.classList.add("selected-day");
			var selectedDay = document.getElementById("selected-day");
			selectedDay.innerHTML = "Selected day is <span>" + day.innerHTML + "</span>";
		}
		
		function updateToday() {
			var today = document.getElementById("today");
			var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
			var currentDayIndex = new Date().getDay();
			var currentDay = days[currentDayIndex];
			today.innerHTML = "Today is <span>" + currentDay + "</span>";
		}
		
		window.onload = function() {
			updateToday();
		};
	</script>
</head>
<body>
	<div id="today"></div>
	<div id="days-container">
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
	</div>
	<div id="selected-day">Selected day is <?php echo $current_day; ?></div>
</body>
</html>

<!--Weli Sagita-->