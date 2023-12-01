<?php

$user = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT*FROM user WHERE username='$user' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

if(mysqli_num_rows($query)>0){
    session_start();
    $_SESSION['username'] = $user;
    $data = mysqli_fetch_array($query);
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nama'] = $data['nama'];

    header("Location:user.php");
}else{
    echo "<script>
                alert('Anda Gagal Login.');
                window.location.assign('index.php');
        </script>";
}