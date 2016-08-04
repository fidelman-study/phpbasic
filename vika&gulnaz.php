<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vika</title>
</head>
<body>
	<?php 
		include('include.php');
	?>
	<table border=1 align="center">
		<thead>
			<tr>
				<?php
					foreach ($array as $key => $value) {
						echo "
							<th>
								$key
							</th>
						";
					}
				?>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($array as $key => $value) {
					echo "<tr>";
					foreach ($array[$key] as $key1 => $value1) {
						echo "
							<td>
								$value1
							</td>
						";
					}
					echo "</tr>";
				}

			?>
		</tbody>

	</table>
</body>
</html>




