<?php
    $id = $_GET['id'];
    if(empty($id)){
        header("Location:user.php");
    }

    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT*FROM galeri WHERE id_foto='$id'");
    $data = mysqli_fetch_array($query);
?>

<div class="card shadow">
    <div class="card-header">
        <a href="?url=lihat_foto" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
    </div>
    <div class="card-body">

    <form action="proses-tambah.php" method="post" enctype="multipart/form-data" >
        
        <div class="form-group">
            <label style="font-size: 14px" >Tgl Pengaduan</label>
            <input type="text" name="tgl_foto" readonly class="form-control" value="<?= $data['tgl_foto'] ?>" >
        </div>

        <div class="form-group">
            <label style="font-size: 14px">Isi Laporan</label>
            <textarea name="keterangan" class="form-control" readonly><?= $data['keterangan'] ?></textarea>
        </div>

        <div class="form-group">
            <label style="font-size: 14px">Foto</label>
            <img class="img-thumbnail" src="foto/<?= $data['foto'] ?>" width="300">
            
        </div>

    </form>
    </div>
</div>