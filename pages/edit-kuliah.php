<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php include './koneksi.php';
$id_mk= $_GET['id'];
$query="SELECT * FROM mata_kuliah WHERE id_mk='$id_mk'";
$result= mysqli_query($koneksi,$query);
while($row=mysqli_fetch_assoc($result)){
?>
<form action="index.php?p=fungsi-kuliah" method="post">
<div class="form-group">
<label for="exampleInputEmail">Nama Mata Kuliah</label>

<input type="hidden" name="id_mk" value="<?=$row ['id_mk']; ?>" class="form-control w-50"
id="exampleInputEmail" aria-describedby="emailHelp"
placeholder="Masukkan Nama Mata Kuliah Anda..."required>

<input type="text" name="nama_mk" value="<?=$row ['nama_mk']; ?>" class="form-control w-50"
id="exampleInputEmail" aria-describedby="emailHelp"
placeholder="Masukkan Nama Mata Kuliah Anda..."required>
</div>

<div class="form-group">
<label for="exampleInputEmail">Kelas</label>
<select name="kelas" class="form-control w-50" value="" 
required>
<option value="<?=$row ['kelas']; ?>" selected="selected">--PILIH KELAS--
<option value="TI">TI</option>
<option value="SI">SI</option>
<option value="MI">MI</option>
</select>
</div>

<div class="form-group">
<label for="exampleInputEmail">Jadwal</label>
<input type="datetime-local" name="jadwal" value="<?=$row ['jadwal']; ?>" class="form-control w-50"
id="exampleInputEmail" aria-describedby="emailHelp"
placeholder="Masukkan Jadwal Pilihan Anda..."required>

</div>
<button type="submit" name="edit-kuliah" value="Submit" class="btn btn-warning">Update</button>
</form>
<?php } ?>