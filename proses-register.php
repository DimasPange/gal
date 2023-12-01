<?php


$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

include 'koneksi.php';

$sql ="INSERT INTO user(id_user, nama, username, password, telp) VALUES('$id_user','$nama','$user','$pass','$telp')";

$query = mysqli_query($koneksi, $sql);

if($query){
    echo "<script>
                alert('Anda Berhasil Mendaftar.');
                window.location.assign('index.php');
        </script>";
}else{
    echo "<script>
                alert('Anda Gagal Mendaftar.');
                window.location.assign('register.php');
        </script>";
}
    