<?php
include_once("kokoro.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM pegawai WHERE nip=$id");
header("Location:index.php");
?>
