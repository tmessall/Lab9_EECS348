<html>
<head>
</head>
<body>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$size = $_POST["size"];
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td></td>";
		for ($i = 1; $i <= $size; $i++) {
			echo "<td>$i</td>";
		}
		echo "</tr>";
		for ($i = 1; $i <= $size; $i++) {
			echo "<tr>";
			echo "<td>$i</td>";
			for ($j = 1; $j <= $size; $j++) {
				$val = $i * $j;
				echo "<td>$val</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>
</body>
</html>
