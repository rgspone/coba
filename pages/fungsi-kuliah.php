<?php
include './koneksi.php';

$id_mk          =$_POST['id_mk'];
$nama_mk        =$_POST['nama_mk'];
$kelas          =$_POST['kelas'];
$jadwal         =$_POST['jadwal'];

if($_POST['tambah-kuliah']){
    $queryTambah = mysqli_query($koneksi,"INSERT INTO mata_kuliah VALUES('','$nama_mk','$kelas','$jadwal')");

    $_SESSION["sukses-tambah"]='yey,data anda berhasil disimpan!';

    if($queryTambah){
        header("location:index.php?p=tb-mata_kuliah");
    }else{
        echo "ERROR,yah data anda tidak berhasil ditambahkan".mysqli_error($koneksi);
    }
}

if(isset($_POST['edit-kuliah'])){
    $queryEdit = mysqli_query($koneksi,"UPDATE mata_kuliah SET nama_mk='$nama_mk',kelas='$kelas',jadwal='$jadwal' WHERE id_mk='$id_mk'") ;

    $_SESSION["sukses-edit"]='yey,data anda berhasil diedit!';

    if($queryEdit){
        header("location:index.php?p=tb-mata_kuliah");
    }else{
        echo "ERROR,yah data anda tidak berhasil diedit".mysqli_error($koneksi);
    }
}

if(isset($_GET['id'])){
    $id_mk=$_GET['id'];
    $queryHapus=mysqli_query($koneksi,"DELETE FROM mata_kuliah WHERE id_mk='$id_mk'");
   

    $_SESSION["sukses-tambah"]='yey,data anda berhasil dihapus!';

    if($queryHapus){
        header("location:index.php?p=tb-mata_kuliah");
    }else{
        echo "ERROR,yah data anda tidak berhasil dihapus".mysqli_error($koneksi);
    }
}
?>