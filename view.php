<!DOCTYPE html>
<html>

<head>
	<title>Available Properties</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			font-family: Arial, sans-serif;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		th {
			background-color: #ADD8E6;
		}

		header {
			background-color: #5f9ea0;
			color: #fff;
			padding: 10px;
			text-align: center;
		}

		header h1 {
			font-size: 60px;
			margin: 0;
			font-weight: bold;
			text-transform: uppercase;
		}

		nav {
			display: flex;
			justify-content: center;
			margin-bottom: 3px;
			margin-left: 510px;
			margin-right: 510px;
			background-color: #f5f5f5;
			padding: 15px 0;
		}

		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		nav li {
			display: inline-block;
			margin: 0 30px;
		}

		nav a {
			color: #666;
			text-decoration: none;
			font-weight: bold;
			transition: color 0.3s ease;
		}

		nav a:hover {
			color: #8c43ff;
		}

		ul {
			list-style-type: none;
			padding: 0;
		}
	</style>
</head>

<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.html"> Home </a></li>
				<li><a href="form.html"> Add Task </a></li>
				<li><a href="aboutus.html"> About Us </a></li>
			</ul>
		</nav>
	</header>
	<?php
	// Open the lp.txt file in read mode (r)
	$handle = fopen('form.txt', 'r');

	// Create an empty array to store the LP details
	$lp_details = array();

	// Loop through each line in the file until the end of the file is reached
	while (!feof($handle)) {
		// Get the details for each LP
		$heading = fgets($handle);
		$eltype = fgets($handle);
		$timef = fgets($handle);
		$datef = fgets($handle);
		$timet = fgets($handle);
		$datet = fgets($handle);
		$description = fgets($handle);

		// Add the LP details to the array
		array_push(
			$lp_details,
			array(
				"heading" => $heading,
				"eltype" => $eltype,
				"timef" => $timef,
				"datef" => $datef,
				"timet" => $timet,
				"datet" => $datet,
				"description" => $description,
			)
		);
	}

	// Close the file
	fclose($handle);

	// Display the LP details in a table
	echo "<table>";
	echo "<tr><th>Event</th><th>Type</th><th>Time from</th><th>to</th><th>Description</th></tr>";
	foreach ($lp_details as $lp) {
		echo "<tr>";
		echo "<td>" . $lp['heading'] . "</td>";
		echo "<td>" . $lp['eltype'] . "</td>";
		echo "<td>" . $lp['timef'] . $lp['datef'] . "</td>";
		echo "<td>" . $lp['timet'] . $lp['datet'] . "</td>";
		echo "<td>" . $lp['description'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>

</html>