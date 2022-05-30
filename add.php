<html>
<head>
	<title>Tambah data pegawai</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NIP</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr> 
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>ALAMAT</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		
		include_once("kokoro.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO pegawai(nip,nama,alamat) VALUES('$nip','$nama','$alamat')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>