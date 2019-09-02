<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION["username"]?></p>
                  <p class="designation">
                  <?php
                            if($_SESSION["lv"]==1){
                              echo"Direktur";
                            }elseif($_SESSION["lv"]==2){
                              echo"Bagian Produksi";
                            }elseif($_SESSION["lv"]==3){
                              echo"Bagian Quality Control";
                            }elseif($_SESSION["lv"]==4){
                              echo"Bagian Keuangan";
                            }elseif($_SESSION["lv"]==5){
                              echo"Bagian Suplier";
                            }
                            ?>
                  </p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $domain; ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <?php if($_SESSION["lv"]==1 || $_SESSION["lv"]==5){ ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#garam" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Garam</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="garam">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>garam.php?halaman=tambah">Tambah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>garam.php">daftar</a>
                  </li>
                </ul>
              </div>
            </li>
            <?php } ?>
            <?php if($_SESSION["lv"]==1 || $_SESSION["lv"]==2){ ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $domain; ?>produksi.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Produksi</span>
              </a>
            </li>
            <?php } ?>
            <?php if($_SESSION["lv"]==1 || $_SESSION["lv"]==3 || $_SESSION["lv"]==4){ ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $domain; ?>stok.php">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Stok</span>
              </a>
            </li>
            <?php } ?>
            <?php if($_SESSION["lv"]==1 || $_SESSION["lv"]==4){ ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#penjualan" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Penjualan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="penjualan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>penjualan.php?halaman=tambah">Tambah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>penjualan.php">Daftar</a>
                  </li>
                </ul>
              </div>
            </li>
            <?php } ?>
            <?php if($_SESSION["lv"]==1){ ?>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#pengguna" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Pengguna</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="pengguna">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>pengguna.php?halaman=tambah">Tambah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>pengguna.php">daftar</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#laporan" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Laporan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="laporan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>laporan.php?type=garam&lv=1">Garam Mentah</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>laporan.php?type=garam&lv=2">Garam Jadi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $domain; ?>laporan.php?type=penjualan">Penjualan</a>
                  </li>
                </ul>
              </div>
            </li>
            <?php } ?>
          </ul>
        </nav>