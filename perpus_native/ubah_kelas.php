<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_kelas = mysqli_query($conn,"select * from kelas where id_kelas = '".$_GET['id_kelas']."'");
    $dt_kelas=mysqli_fetch_array($qry_get_kelas);
    ?>
    <h3>Ubah Kelas</h3>
    <form action="proses_ubah_kelas.php" method="post">
        <input type="hidden" name="id_kelas" value= 
        "<?=$dt_kelas['id_kelas']?>">
        Nama kelas :
        <input type="text" name="nama_kelas" value=   "<?=$dt_kelas['nama_kelas']?>" class="form-control">
        Kelompok : 
        <input type="text" name="kelompok" value="<?=$dt_kelas['kelompok']?>" class="form-control">
        <input type="submit" name="simpan" value="Ubah Kelas" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>