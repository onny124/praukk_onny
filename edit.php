<?php
include("koneksi.php");
if(!isset($_GET['id_toko'])){
    header("location:tampil.php");
}

$id_toko=$_GET['id_toko'];
$sql="SELECT * FROM tb_toko INNER JOIN tb_bahan ON tb_toko.id_bahan= tb_bahan.id_bahan WHERE tb_toko.id_toko='$id_toko'";
$query=mysqli_query($koneksi, $sql);
$tb_toko=mysqli_fetch_assoc($query);
?>

<html>
    <head>
</head>
<body>

<h2>Edit Data</h2>
<table border="1">
    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id_toko" value="<?php echo $tb_toko['id_toko']?>" />
        <tr>
            <td><label for="nama_toko"> Nama toko : </label></td>
            <td><input type="text" name="nama_toko" value="<?php echo $tb_toko['nama_toko']?>" /></td>
</tr>
<tr>
    <td><label for="alamat"> Alamat : </label></td>
    <td><input type="text" name="alamat" value="<?php echo $tb_toko['alamat']?>" /></td>
</tr>
<tr>
    <td><label for="na_siup"> No siup : </label></td>
    <td><input type="number" name="no_siup" value="<?php echo $tb_toko['no_siup']?>" /></td>
</tr>
<tr>
    <td><label for="nama_pemilik"> Nama pemilik : </label></td>
    <td><input type="text" name="nama_pemilik" value="<?php echo $tb_toko['nama_pemilik']?>" /></td>
</tr>
<tr>
    <td><label for="nama_bahan"> Nama bahan : </label></td>
    <td><input type="text" name="nama_bahan" value="<?php echo $tb_toko['nama_bahan']?>" /></td>
</tr>
<tr>
    <td><label for="satuan"> Satuan : </label></td>
    <td><input type="text" name="satuan" value="<?php echo $tb_toko['satuan']?>" /></td>
</tr>
<tr>
    <td><label for="harga"> Harga : </label></td>
    <td><input type="text" name="harga" value="<?php echo $tb_toko['harga']?>" /></td>
</tr>
    <td><input type="submit" name="edit"></td>

</table>
</form>
</body>
</html>