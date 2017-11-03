<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php require_once('nav.php'); ?>
	<h1>Profiles</h1>
	<hr>
	<table>
		<tr>
			<th>Company name</th>
			<th>description</th>
			<th>img</th>
		</tr>

	<?php
		$j = file_get_contents('profile.json');
		$d = json_decode($j, true);
		
		foreach($d as $k => $o){
			echo "<tr>
					<td>$k</td>
					<td>".$o['companyName']."</td>
					<td>".$o['description']."</td>
				</tr>";
		}
	?>

	</table>
	<hr>
	<?php require_once('footer.php'); ?>
</body>
</html>