<div class="card shadow">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-5">
                <i class="fa fa-arrow-left"></i>
            </span>
            <span class="text"> Kembali </span>
        </a>
    </div>
    <div class="card-body">

    <form action="simpan_foto.php" method="post" enctype="multipart/form-data" >
        
        <div class="form-group">
            <label style="font-size: 14px" >Tgl uplod foto</label>
            <input type="text" name="tgl_foto" class="form-control" value=<?= date('Y-m-d') ?> readonly >
        </div>
        <div class="form-group">
            <label style="font-size: 14px" >nisn</label>
            <input type="text" name="id_user" class="form-control" value=<?= $_SESSION['id_user'] ?> readonly>
        </div>
        <div class="form-group">
            <label style="font-size: 14px">keterangan foto</label>
            <textarea name="keterangan" class="form-control" rows="7"></textarea>
        </div>

        <div class="form-group">
            <label style="font-size: 14px">Foto</label>
            <input type="file" name="foto" required class="form-control" accept="image/*" >
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">SIMPAN</button>
        </div>

    </form>
    </div>
</div>