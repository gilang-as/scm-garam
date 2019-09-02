<?php include("include/header.php");?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <?php include("include/sidebar.php");?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Daftar Produksi</h4>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Jenis </th>
                          <th> Petani </th>
                          <th> Total Produksi </th>
                          <th> Harga Produksi </th>
                          <th> Status </th>
                          <th> Keterangan </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $quotes_qry="SELECT * FROM tbl_garam ORDER BY id DESC";
                          $data=mysqli_query($connect,$quotes_qry);
                          $no=1;
                          while($row=mysqli_fetch_array($data)){ 
                      ?>
                        <tr>
                          <td> <?= $no?> </td>
                          <td> <?= $row["jenis"]?> </td>
                          <td> <?= $row["nama_petani"]?> </td>
                          <td> <?= $row["jumlah_awal"]?> </td>
                          <td>
                              <?php if($row["harga_akhir"]==null){?>
                                <a>Belum Produksi</a>
                              <?php }else{ ?>
                                <a><?= $row["harga_akhir"]?></a>
                              <?php } ?>
                          </td>
                          <td>
                            <div class="progress">
                              <?php if($row["lv"]==1){?>
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              <?php }else{ ?>
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              <?php } ?>
                            </div>
                          </td>
                          <td>
                              <?php if($row["lv"]==1){?>
                                <a>Belum Produksi</a>
                              <?php }else{ ?>
                                <a>Sudah Produksi</a>
                              <?php } ?>
                          </td>
                          <td>
                          <a class="btn btn-success" href="<?=$domain?>produksi.php?halaman=ubah&id=<?=$row["id"]?>">Produksi</a>
                          <a class="btn btn-danger" href="<?=$domain?>produksi.php?halaman=hapus&id=<?=$row["id"]?>">Hapus</a>
                          </td>
                        </tr>
                      <?php $no++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
          </div>
          <?php include("include/footer.php");?>
        </div>
      </div>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <script src="assets/js/demo_1/dashboard.js"></script>
  </body>
</html>