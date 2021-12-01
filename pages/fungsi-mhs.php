<?php
include './koneksi.php';

$id_mahasiswa   =$_POST['id_mahasiswa'];
$nama           =$_POST['nama'];
$nim            =$_POST['nim'];
$prodi          =$_POST['prodi'];

if($_POST['tambah-mhs']){
    $queryTambah = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('','$nama','$nim','$prodi')");

    $_SESSION["sukses-tambah"]='yey,data anda berhasil disimpan!';

    if($queryTambah){
        header("location:index.php?p=tb-mahasiswa");
    }else{
        echo "ERROR,yah data anda tidak berhasil ditambahkan".mysqli_error($koneksi);
    }
}

if(isset($_POST['edit-mhs'])){
    $queryEdit = mysqli_query($koneksi,"UPDATE mahasiswa SET nama='$nama',nim='$nim',prodi='$prodi' WHERE id_mahasiswa='$id_mahasiswa'") ;

    $_SESSION["sukses-edit"]='yey,data anda berhasil diedit!';

    if($queryEdit){
        header("location:index.php?p=tb-mahasiswa");
    }else{
        echo "ERROR,yah data anda tidak berhasil diedit".mysqli_error($koneksi);
    }
}

if(isset($_GET['id'])){
    $id_mahasiswa=$_GET['id'];
    $queryHapus=mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");
   

    $_SESSION["sukses-tambah"]='yey,data anda berhasil dihapus!';

    if($queryHapus){
        header("location:index.php?p=tb-mahasiswa");
    }else{
        echo "ERROR,yah data anda tidak berhasil dihapus".mysqli_error($koneksi);
    }
}
?>