2<?php include("include/header.php");?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <?php include("include/sidebar.php");?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Cetak Laporan Penjualan</h4>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <form class="forms-sample" method="GET" action="laporan.php">
                          <div class="form-group row">
                            <label for="kategori" class="col-sm-3 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-9">
                              <input type="date" id="kategori" name="dari" class="form-control" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="harga" class="col-sm-3 col-form-label">Tanggal Akhir</label>
                            <div class="col-sm-9">
                              <input type="date" id="harga" name="sampai" class="form-control" placeholder="Harga">
                            </div>
                          </div>
                              <input type="hidden" id="type" name="type" class="form-control" value="penjualan">
                          <button type="submit" class="btn btn-success mr-2">CETAK</button>
                        </form>
                      </div>
                    </div>
                  </div>
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