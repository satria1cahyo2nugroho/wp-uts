<?php
include_once("kokoro.php");
if(isset($_POST['update']))
{	
	$id = $_POST['nip'];
	
	$name=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$result = mysqli_query($mysqli, "UPDATE pegawai SET nama='$name',alamat='$alamat' WHERE nip=$id");
	header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM pegawai WHERE nip=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id = $user_data['nip'];
	$alamat = $user_data['alamat'];
	$name = $user_data['nama'];
}
?>
<html>
<head>	
	<title>Edit data pegawai</title>
</head>
 
<body>
	<a href="index.php">Halaman Awal</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>NAMA </td>
				<td><input type="text" name="nama" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>ALAMAT</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr> 
				<td>NIP</td>
				<td><input type="text" name="nip" value=<?php echo $id;?>></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>