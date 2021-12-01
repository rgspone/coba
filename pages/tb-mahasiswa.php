<table class="table table-striped table-hover ">
<thead class="thead-dark">
		<h5 class="warna-text-tabel float-left mt-3"> <b> Tabel Mahasiswa</b></h5>
		<div class="float-right"><a class="btn btn-primary" href="index.php?p=tambah-mhs"> <i class="fa fa-plus"></i> Tambah Data</a></div>
		<tr>
			<th scope="col">NO</th>
			<th scope="col">NAMA</th>
			<th scope="col">NIM</th>
			<th scope="col">PRODI</th>
			<th scope="col"></th>
		</tr>
	</thead>
<?php include './koneksi.php' ?>

	<tbody>
		<!-- Menampilkan Data dari Database -->
		<?php
		$no = 1;
		$ambilQuery = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id_mahasiswa ASC");
		while ($row = mysqli_fetch_assoc($ambilQuery)) {
		?>

			<tr>
				<th scope="row"><?= $no++; ?></th>
				<!-- <td><?= $row['id_mahasiswa']; ?></td> -->
				<td><?= $row['nama']; ?></td>
				<td><?= $row['nim']; ?></td>
				<td><?= $row['prodi']; ?></td>
				<td>
					<a class="fa fa-pencil btn btn-warning mx-1" href="index.php?p=edit-mhs&id=<?php echo $row['id_mahasiswa']; ?>"></a>

					<a class="hapus fa fa-trash btn btn-danger"  href="index.php?p=fungsi-mhs&id=<?php echo $row['id_mahasiswa']; ?>" onclick="return confirm('Yakin nih dihapus?! ?');" ></a>
				</td>
			</tr>
		<?php	} ?>
	</tbody>
</table>