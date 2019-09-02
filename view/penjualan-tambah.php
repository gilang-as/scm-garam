<?php include("include/header.php");?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <?php include("include/sidebar.php");?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Beli Garam</h4>
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
                            <label for="kategori" class="col-sm-3 col-form-label">Katgori</label>
                            <div class="col-sm-9">
                              <input type="text" id="kategori" name="kategori" class="form-control" value="<?=$detail["kategori"]?>" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                              <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                              <input type="text" id="harga" name="harga" class="form-control" value="<?=$detail["harga_akhir"]?>" placeholder="Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="jumlah" class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                              <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="0">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="total" class="col-sm-3 col-form-label">Total</label>
                            <div class="col-sm-9">
                              <input type="text" id="total" name="total" class="form-control" placeholder="0">
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
    <script src="http://code.jquery.com/jquery-2.1.4.js"></script> 
    <script type="text/javascript">
      $(document).ready(function(){
          $("#jumlah").keyup(function(){ 
            var harga  = parseInt($("#harga").val());
            var jumlah  = parseInt($("#jumlah").val());
            var total = harga*jumlah;
            $("#total").val(total); 
          }); 
      }); 
</script> 
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>
    <script src="assets/js/demo_1/dashboard.js"></script>
  </body>
</html>