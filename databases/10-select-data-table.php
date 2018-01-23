<?php include('conn-db.php');
//
// Select Data
//
$sql = "SELECT department_id, department_name FROM DEPARTMENTS";

$result = $conn->query($sql);

if (!($result->num_rows > 0)) {
die('select query failed' . $conn->error);
}

?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
<body>
	<h1>Select Data from Departments</h1>
    <table class="table table-striped">
		<caption>Departments</caption>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
		<?php
		while ($row = $result->fetch_assoc())
		{
			echo '<tr>
					<td>'.$row['department_id'].'</td>
					<td>'.$row['department_name'].'</td>
				</tr>';
			
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th>Total </th>
				<th><?php echo $result->num_rows; ?></th>
			</tr>
		</tfoot>
	</table>

    <?php $conn->close(); ?>
</body>
</html>