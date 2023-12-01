<?php
session_start();
$tgl_foto = $_POST['tgl_foto'];
$id_user = $_SESSION['id_user'];
$keterangan = $_POST['keterangan'];
$lokasi_foto = $_FILES['foto']['tmp_name'];
$nama_foto = $_FILES['foto']['name'];


if(move_uploaded_file($lokasi_foto, 'foto/'.$nama_foto)){
    $sql = "INSERT INTO galeri(tgl_foto,id_user,keterangan,foto)
    VALUES('$tgl_foto','$id_user','$keterangan','$nama_foto')";

    include 'koneksi.php';
    if(mysqli_query($koneksi,$sql)){
        echo "<script>
                alert('foto Sudah Tersimpan');
                window.location.assign('user.php');
        </script>";
    }else{
        echo "<script>
                alert('foto Gagal Tersimpan');
                window.location.assign('user.php?url=tambah_foto');
        </script>";
    }
}