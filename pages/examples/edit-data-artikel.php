<?php
  require('koneksi.php');
  session_start();
  if (!isset($_SESSION['Name'])) {
    echo "
      <script>
        alert('Harap login terlebih dahulu sebelum mengakses halaman ini!');
        document.location.href = '../examples/login.php';
      </script>
    ";
  }
?>

<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Me-HealthGo</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="../../../argon-dashboard/index.html" />
  <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
  <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
  <meta property="og:site_name" content="Creative Tim" />
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/Me-HealthGo.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.min23cd.css?v=1.2.1" type="text/css">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Sidenav -->
  <?php
    include 'navbar.php';
  ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-gradient-info pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Data</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../examples/dashboard.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="artikel.php">Daftar Artikel</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../../assets/img/brand/dark me.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                    <span class="heading">
                      <?php
                          include 'koneksi.php';

                          $GetTable = mysqli_query($koneksi, "SELECT COUNT(id_artikel) AS CountData FROM artikel");
                          $GetData = mysqli_fetch_array($GetTable);
                          $GetCount = $GetData['CountData'];

                          echo $GetCount;
                      ?>
                      </span>
                      <span class="description">Artikel</span>
                    </div>
                    <div>
                    <span class="heading">
                      <?php
                          include 'koneksi.php';

                          $GetTable1 = mysqli_query($koneksi, "SELECT COUNT(id_konsultan) AS CountData FROM konsultan");
                          $GetData = mysqli_fetch_array($GetTable1);
                          $GetCount1 = $GetData['CountData'];

                          echo $GetCount1;
                      ?>
                      </span>
                      <span class="description">Konsultan</span>
                    </div>
                    <div>
                    <span class="heading">
                      <?php
                          include 'koneksi.php';

                          $GetTable2 = mysqli_query($koneksi, "SELECT COUNT(id_user) AS CountData FROM user");
                          $GetData = mysqli_fetch_array($GetTable2);
                          $GetCount2 = $GetData['CountData'];

                          echo $GetCount2;
                      ?>
                      </span>
                      <span class="description">User</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                  Me<span class="font-weight-light">~HealthGo</span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Jl. DR. Soebandi No.124, Krajan, Kec. Patrang
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Kabupaten Jember, Jawa Timur 68111
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>RSD Dr. Soebandi
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit Data </h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <?php
              $id = $_GET['id_artikel'];

              $SelectData = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel = '$id'");
              $GetData = mysqli_fetch_array($SelectData);
            ?>
              <form action="update-data-artikel.php" method="POST" enctype="multipart/form-data" autocomplete="OFF"> 
                <input type="hidden" name="id_artikel" value="<?php echo $id; ?>"></input>
                <h6 class="heading-small text-muted mb-4">Data Artikel</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label for="Nama">Kategori</label>
										    <select name="id_kategori" class="custom-select">
                          <option value="">- Pilih Kategori -</option>
                          <?php 
                            $GetTableKat = mysqli_query($koneksi, "SELECT * FROM kategori");
                            while ($GetDataKat = mysqli_fetch_array($GetTableKat)) {
                              if($GetData['id_kategori'] == $GetDataKat['id_kategori']) {
                                $terpilih = "selected"; 
                              }else {
                                $terpilih = "";
                              }
                              echo "
                                <option value='$GetDataKat[id_kategori]'$terpilih>$GetDataKat[nama]</option>
                              ";
                            }
                          ?>
										    </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-control-label" for="input-email">Judul</label>
                        <input type="text" id="input-email" class="form-control" name="judul" placeholder="Isi Judul" value="<?php echo $GetData['judul']?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="deskripsi" placeholder="Isi Deskripsi"><?php echo $GetData['deskripsi']?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                    <div class="col-lg-12 col-5 text-right">
                      <button class="btn btn-sm btn-default" type="submit">Perbarui Data</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.min23cd.js?v=1.2.1"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../../assets/js/demo.min.js"></script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>
</html>