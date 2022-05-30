<?php
include_once("kokoro.php");
$result = mysqli_query($mysqli, "SELECT * FROM pegawai ORDER BY nip DESC");
?>

<html>
<head>    
    <title>Data Pegawai</title>
</head>
 
<body>
<a href="add.php">Tambah data pegawai</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>NIP</th> <th>NAMA </th> <th>ALAMAT</th> 
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nip']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[nip]'>Edit</a> | <a href='delete.php?id=$user_data[nip]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
