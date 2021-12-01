<table class="table table-striped table-hover ">
<thead class="thead-dark"> 
          <h5 class="warna-text-tabel float-left mt-3"> <b> Tabel Data Mata Kuliah</b></h5>
          <div class="float-right"><a class="btn btn-primary" href="index.php?p=tambah-kuliah"> <i class="fa fa-plus"></i> Tambah Data</a></div>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA MATA KULIAH</th>
            <th scope="col">KELAS</th>
            <th scope="col">JADWAL</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <?php include './koneksi.php' ?>
        <tbody>
        
        <?php
		    $no = 1;
		    $ambilQuery = mysqli_query($koneksi, "SELECT * FROM mata_kuliah ORDER BY id_mk ASC");
		    while ($row = mysqli_fetch_assoc($ambilQuery)) {
		?>

      <tr>
              <th scope="row"><?= $no++; ?></th>
              <!-- <td><?= $row['id_mk']; ?></td> -->
              <td><?= $row['nama_mk']; ?></td>
              <td><?= $row['kelas']; ?></td>
              <td><?= $row['jadwal']; ?></td>

              <td>
                <a class="fa fa-pencil btn btn-warning mx-1" href="index.php?p=edit-kuliah&id=<?php echo $row['id_mk']; ?>"></a>

                <a class="hapus fa fa-trash btn btn-danger"  href="index.php?p=fungsi-kuliah&id=<?php echo $row['id_mk']; ?>" 
                onclick="return confirm('Yakin nih dihapus?! ?');" >
              </a>
              </td>
            </tr>
          <?php	} ?>
        </tbody>
      </table>