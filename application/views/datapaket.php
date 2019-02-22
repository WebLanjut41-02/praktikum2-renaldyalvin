<html>
<head>
</head>
<body>
	<form action="" ></form>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Tanggal Datang</th>
			<th>Penghuni</th>
			<th>Karyawan</th>
            <th>Isi Paket</th>
            <th>Tanggal Ambil</th>

		</tr>
		<?php 
		$no = 1;
		foreach($value as $a){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $a->tgl_dateng ?></td>
			<td><?php echo $a->penghuni ?></td>
			<td><?php echo $a->karyawan ?></td>
            <td><?php echo $a->isipaket ?></td>
            <td><?php echo $a->tgl_ambil ?></td>
		</td>
		</tr>
		<?php } ?>
	</table>
    <button><a href="<?php echo base_url()?>index.php/c_praktikum/loginkaryawan">Logout</button>
</body>
</html>