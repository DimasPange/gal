<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data foto</h6>
  </div>
  <div class="card-body" style="font-size: 14px">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Tgl Foto</th>
            <th>ID User</th>
            <th>Keterangan</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Tgl Foto</th>
            <th>ID User</th>
            <th>Keterangan</th>
            <th>Foto</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          include 'koneksi.php';

          $sql = "SELECT*FROM galeri WHERE id_user='$_SESSION[id_user]' ORDER BY id_foto DESC";
          $query = mysqli_query($koneksi, $sql);
          $no = 1;
          while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['tgl_foto']; ?></td>
              <td><?= $data['id_user']; ?></td>
              <td><?= $data['keterangan']; ?></td>
              <td><img class="img-thumbnail" src="foto/<?= $data['foto'] ?>" width="150"></td>
              <td>
                      <a href="?url=detail_foto&id=<?= $data['id_foto'] ?>" class="btn btn-info btn-icon-spilt">
                            <span class="icon text-white-5">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span>Detail</span>
                        </a>

                        <a href="?url=edit_foto" class="btn btn-warning btn-icon-spilt">
                            <span class="icon text-white-5">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span>Edit</span>
                        </a>
                
                        <a onclick="return confirm('Apakah Anda Yakin untuk Menghapusnya?')" href="hapus_foto.php?id_foto=<?= $data['id_foto'] ?>" class="btn btn-danger btn-icon-spilt">
                            <span class="icon text-white-5">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span>Hapus</span>
                        </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>