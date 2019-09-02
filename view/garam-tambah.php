<?php include("include/header.php");?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <?php include("include/sidebar.php");?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Tambah Garam</h4>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                  <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <form class="forms-sample" method="POST">
                          <div class="form-group row">
                            <label for="nama_petani" class="col-sm-3 col-form-label">Nama Petani</label>
                            <div class="col-sm-9">
                              <input type="text" id="nama_petani" name="nama_petani" class="form-control" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="alamat_petani" class="col-sm-3 col-form-label">Alamat Petani</label>
                            <div class="col-sm-9">
                              <input type="text" id="alamat_petani" name="alamat_petani" class="form-control" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="telepon_petani" class="col-sm-3 col-form-label">Telepon Petani</label>
                            <div class="col-sm-9">
                              <input type="text" id="telepon_petani" name="telepon_petani" class="form-control" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                            <div class="col-sm-9">
                              <input type="text" id="jenis" name="jenis" class="form-control" placeholder="janis">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                              <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                              <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Simpan</button>
                          <a class="btn btn-light">Batal</a>
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