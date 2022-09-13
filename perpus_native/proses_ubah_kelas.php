<?php
if($_POST){
    $id_kelas=$_POST['id_kelas'];
    $nama_kelas=$_POST['nama_kelas'];
    $kelompok=$_POST['kelompok'];
    if(empty($nama_kelas)){
        echo "<script>alert('nama kelas tidak boleh kosong');location.href='tambah_kelas.php';</script>";
 
    } elseif(empty($kelompok)){
        echo "<script>alert('kelompok tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    }
    include "koneksi.php";
    $update=mysqli_query($conn,"update kelas set nama_kelas='".$nama_kelas."',kelompok='".$kelompok."' where id_kelas = '".$id_kelas."'") or die(mysqli_error($conn));
      if($update){
        echo "<script>alert('Sukses update kelas');location.href='tampil_kelas.php';</script>";
      } else {
        echo "<script>alert('Gagal update kelas');location.href='ubah_kelas.php?id_kelas=".$id_kelas."';</script>";
      }
  }
?>