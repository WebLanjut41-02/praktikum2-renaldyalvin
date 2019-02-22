<html>
<head>
</head>
<body>
	<form action="" ></form>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Unit</th>
			<th>No.KTP</th>

		</tr>
		<?php 
		$no = 1;
		foreach($value as $a){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $a->nama ?></td>
			<td><?php echo $a->unit ?></td>
			<td><?php echo $a->noktp ?></td>
		</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>