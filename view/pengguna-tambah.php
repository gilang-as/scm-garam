<?php include("include/header.php");?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <?php include("include/sidebar.php");?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Tambah Pengguna</h4>
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
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                              <input type="text" id="username" name="username" class="form-control" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="password" id="password" name="password" class="form-control" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="level" class="col-sm-3 col-form-label">Level</label>
                            <div class="col-sm-9">
                            <select class="form-control" id="level" name="level">
                              <option value="1">Directur</option>
                              <option value="2">Produksi</option>
                              <option value="3">Quality Control</option>
                              <option value="4">Keuangan</option>
                              <option value="5">Suplier</option>
                            </select>
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