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
                          <th> Username </th>
                          <th> Level </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $quotes_qry="SELECT * FROM tbl_pengguna";
                          $data=mysqli_query($connect,$quotes_qry);
                          $no=1;
                          while($row=mysqli_fetch_array($data)){ 
                      ?>
                        <tr>
                          <td> <?= $no?> </td>
                          <td> <?= $row["username"]?> </td>
                          <td>
                            <?php
                            if($row["lv"]==1){
                              echo"Direktur";
                            }elseif($row["lv"]==2){
                              echo"Bagian Produksi";
                            }elseif($row["lv"]==3){
                              echo"Bagian Quality Control";
                            }elseif($row["lv"]==4){
                              echo"Bagian Keuangan";
                            }else{
                              echo"Bagian Suplier";
                            }
                            ?> 
                          </td>
                          <td>
                          <a class="btn btn-success" href="<?=$domain?>pengguna.php?halaman=ubah&id=<?=$row["username"]?>">Ubah</a>
                          <a class="btn btn-danger" href="<?=$domain?>pengguna.php?halaman=hapus&id=<?=$row["username"]?>">Hapus</a>
                          </td>
                        </tr>
                      <?php $no++; } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
          </div>
        </div>
        
        <?php include("include/footer.php");?>
      </div>
    </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <script src="assets/js/demo_1/dashboard.js"></script>
  </body>
</html>