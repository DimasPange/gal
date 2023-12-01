<?php
    $id = $_GET['id'];
    if(empty($id)){
        header("Location:masyarakat.php");
    }

    include 'koneksi.php';
    $query = mysqli_query($koneksi, "SELECT*FROM pengaduan,tanggapan WHERE tanggapan.id_pengaduan='$id' AND tanggapan.id_pengaduan=pengaduan.id_pengaduan");
    $data = mysqli_fetch_array($query);
?>

<div class="card shadow">
    <div class="card-header">
        <a href="?url=lihat-pengaduan" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
    </div>
    <div class="card-body">

        <?php
        if(mysqli_num_rows($query)==0){
            echo "<div class='alert alert-danger'>Maaf Tanggapan Anda Belum Ditanggapi</div>";
        }else{
            $data = mysqli_num_rows($query); ?>
       

    <form action="proses-pengaduan.php" method="post" enctype="multipart/form-data" >
        
        <div class="form-group">
            <label style="font-size: 14px" >Tgl Pengaduan</label>
            <input type="text" name="tgl_pengaduan" readonly class="form-control" value="<?= $data['tgl_tanggapan'] ?>" >
        </div>

        <div class="form-group">
            <label style="font-size: 14px">Isi Laporan</label>
            <textarea name="isi_laporan" class="form-control" required><?= $data['isi_laporan'] ?></textarea>
        </div>

        <div class="form-group">
            <label style="font-size: 14px">tanggapan</label>
            <textarea name="isi_laporan" class="form-control" required><?= $data['tanggapan'] ?></textarea>
        </div>


       
    </form>
    
    <?php } ?>
    </div>
</div>