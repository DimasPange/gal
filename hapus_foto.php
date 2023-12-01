<?php
    include "koneksi.php";

    $id_foto = $_GET['id_foto'];

    $sql = "DELETE FROM galeri WHERE id_foto = '$id_foto'";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        ?>
            <script>
                window.location.href="user.php?url=lihat_foto";
            </script>
        <?php
    }else{
        ?>
            <script>
                alert('Terjadi Kesalahan');
                window.Location.href="user.php?url=lihat_foto";
            </script>
        <?php
    }
?>