<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php include './koneksi.php';
$id_mahasiswa= $_GET['id'];
$query="SELECT * FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
$result= mysqli_query($koneksi,$query);
while($row=mysqli_fetch_assoc($result)){


?>

<form action="index.php?p=fungsi-mhs" method="post">
<div class="form-group">
<label for="exampleInputEmail">Nama Mahasiswa</label>

<input type="hidden" name="id_mahasiswa" value="<?=$row ['id_mahasiswa']; ?>" class="form-control w-50"
id="exampleInputEmail" aria-describedby="emailHelp"
placeholder="Masukkan Nama Anda..."required>

<input type="text" name="nama" value="<?=$row ['nama']; ?>" class="form-control w-50"
id="exampleInputEmail" aria-describedby="emailHelp"
placeholder="Masukkan Nama Anda..."required>

</div>

<div class="form-group">
<label for="exampleInputEmail">NIM</label>
<input type="text" name="nim" value="<?=$row ['nim']; ?>" class="form-control w-50"
id="exampleInputEmail" aria-describedby="emailHelp"
placeholder="Masukkan Nim Anda..."required>
</div>

<div class="form-group">
<label for="exampleInputEmail">Program Studi</label>
<select name="prodi"  class="form-control w-50" value="" 
required>
<option value="<?=$row ['prodi']; ?>" selected="selected">--PILIH PRODI--
<option value="Teknik Informatika">Teknik Informatika</option>
<option value="Sistem Informasi">Sistem Informasi</option>
<option value="Manajemen Informatika">Manajemen Informatika</option>
</select>
</div>
<button type="submit" name="edit-mhs" value="Submit" class="btn btn-warning">Update</button>
</form>
<?php } ?>