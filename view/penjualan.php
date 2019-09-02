<?php include("include/header.php");?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <?php include("include/sidebar.php");?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Daftar Garam</h4>
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
                          <th> Kategori </th>
                          <th> Janis </th>
                          <th> Petani </th>
                          <th> Harga </th>
                          <th> Jumlah </th>
                          <th> Stok </th>
                          <th> Status </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $quotes_qry="SELECT * FROM tbl_garam WHERE lv=2 ORDER BY id DESC";
                          $data=mysqli_query($connect,$quotes_qry);
                          $no=1;
                          while($row=mysqli_fetch_array($data)){ 
                      ?>
                        <tr>
                          <td> <?= $no?> </td>
                          <td> <?= $row["kategori"]?> </td>
                          <td> <?= $row["jenis"]?> </td>
                          <td> <?= $row["nama_petani"]?> </td>
                          <td>Rp <?= $row["harga_awal"]?>,- </td>
                          <td> <?= $row["jumlah_awal"]?> </td>
                          <td> <?= ($row["jumlah_awal"]-$row["terjual"])?> </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>
                            <?php if(($row["jumlah_awal"]-$row["terjual"])<=0){?>
                          <a class="btn btn-danger">Stok Habis</a>
                          <?php }else{ ?>
                            <a class="btn btn-success" href="<?=$domain?>penjualan.php?halaman=tambah&id=<?=$row["id"]?>">Tambah Penjualan</a>
                          <?php } ?>
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