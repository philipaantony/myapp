<?php
include "connection.php";

$res = $collection->find();

?>
<html>
	<head>
	</head>
	<body>
	<center>
		<table border="2">
		<tr>
			<th>Name</th>
			<th>dept</th>
			<th>desig</th>
			<th>salary</th>
			<th>Year of joining</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		
		<?php foreach($res as $doc){ ?>
		<tr>
			<td><?php echo $doc['ename'] ?></td>
			<td><?php echo $doc['dept'] ?></td>
			<td><?php echo $doc['desig'] ?></td>
			<td><?php echo $doc['salary'] ?></td>
			<td><?php echo $doc['yoj'] ?></td>
			
			<td><a href="update.php?val=   <?php echo $doc['_id'] ?>    ">edit</a></td>
			
			
			<td><a href="delete.php?val=<?php echo $doc['_id'] ?>">delete</a></td>
		</tr>
		<?php } ?>
		
		
		</table>
		<a href="insert.php">Insert Data</a>
		</center>
	</body>
</html>
