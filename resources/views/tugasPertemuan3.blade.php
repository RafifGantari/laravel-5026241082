<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fakultas & Sekolah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      body {
        font-family: 'Inter', sans-serif;
        background-color: #fff;
      }

      .section-title {
        color: #013880;
        font-weight: 800;
      }

      .section-desc {
        color: #555;
        max-width: 520px;
        margin: 0 auto;
        font-size: 15px;
      }

      .fakultas-card {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 20px;
      }

      .fakultas-card .card-img-overlay {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
      }

      .fakultas-card .card-title {
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 6px;
      }

      .fakultas-card .stretched-link {
        font-size: 12px;
        font-weight: 600;
        color: rgba(255,255,255,0.85);
        text-decoration: none;
      }

      .fakultas-card .stretched-link:hover {
        color: #fff;
      }

      .testi-section {
        background-color: #f4f6f9;
        border-radius: 8px;
        padding: 30px;
      }

      .testi-section h4 {
        color: #013880;
        font-weight: 700;
      }
    </style>
  </head>
  <body>
    <main class="container mt-5 mb-5">

      <!-- Heading -->
      <div class="text-center mb-4">
        <h2 class="section-title">Fakultas dan Sekolah</h2>
        <p class="section-desc">
          ITS memiliki delapan fakultas dan satu sekolah multidisiplin yang menjadi pusat keunggulan dalam
          bidang sains, teknologi, desain, dan kesehatan di Indonesia.
        </p>
      </div>

      <!-- Fakultas Cards -->

      <!-- Row 1 -->
      <div class="row">
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-9_FSAD_rev-765x1024.jpg" alt="FSAD" />
            <div class="card-img-overlay">
              <h5 class="card-title">Fakultas Sains dan Analitika Data</h5>
              <a href="#" class="stretched-link">Pelajari FSAD ›</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-8_FTIRS_rev-765x1024.jpg" alt="FTIRS" />
            <div class="card-img-overlay">
              <h5 class="card-title">Fakultas Teknologi Industri dan Rekayasa Sistem</h5>
              <a href="#" class="stretched-link">Pelajari FTIRS ›</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-7_FTK_rev-764x1024.jpg" alt="FTK" />
            <div class="card-img-overlay">
              <h5 class="card-title">Fakultas Teknologi Kelautan</h5>
              <a href="#" class="stretched-link">Pelajari FTK ›</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Row 2 -->
      <div class="row">
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-1_FTSPK_rev-765x1024.jpg" alt="FTSPK" />
            <div class="card-img-overlay">
              <h5 class="card-title">Fakultas Teknik Sipil Perencanaan dan Kebumian</h5>
              <a href="#" class="stretched-link">Pelajari FTSPK ›</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-3_FT-EIC_rev-765x1024.jpg" alt="FTEIC" />
            <div class="card-img-overlay">
              <h5 class="card-title">Fakultas Teknologi Elektro dan Informatika Cerdas</h5>
              <a href="#" class="stretched-link">Pelajari FTEIC ›</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-6_FDKBD_rev-764x1024.jpg" alt="FDKBD" />
            <div class="card-img-overlay">
              <h5 class="card-title">Fakultas Desain Kreatif dan Bisnis Digital</h5>
              <a href="#" class="stretched-link">Pelajari FDKBD ›</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Row 3 -->
      <div class="row">
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-4_VOKASI_rev-765x1024.jpg" alt="Vokasi" />
            <div class="card-img-overlay">
              <h5 class="card-title">Fakultas Vokasi</h5>
              <a href="#" class="stretched-link">Pelajari Vokasi ›</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-2_FKK_rev-765x1024.jpg" alt="FKK" />
            <div class="card-img-overlay">
              <h5 class="card-title">Fakultas Kedokteran dan Kesehatan</h5>
              <a href="#" class="stretched-link">Pelajari FKK ›</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card fakultas-card text-white">
            <img class="card-img-top" src="https://www.its.ac.id/wp-content/uploads/2026/03/profil-duta-5_SIMT_rev-765x1024.jpg" alt="SIMT" />
            <div class="card-img-overlay">
              <h5 class="card-title">Sekolah Interdisiplin Manajemen dan Teknologi</h5>
              <a href="#" class="stretched-link">Pelajari SIMT ›</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Kata Alumni -->
      <div class="testi-section">
        <h4 class="text-center">Kata Alumni ITS</h4>

        <!-- Card Group -->
        <div class="card-group mb-4">
          <div class="card">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
            </div>
            <div class="card-footer text-muted">Budi - Alumni FSAD</div>
          </div>
          <div class="card">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
            </div>
            <div class="card-footer text-muted">Laila - Alumni FTK</div>
          </div>
          <div class="card">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
            </div>
            <div class="card-footer text-muted">Rizky - Alumni FTEIC</div>
          </div>
        </div>

        <!-- Card Columns + Contextual -->
        <div class="card-columns">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
              <footer class="text-white-50"><small>Dewi - Alumni FTSPK</small></footer>
            </div>
          </div>
          <div class="card bg-secondary text-white">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
              <footer class="text-white-50"><small>Andi - Alumni FTIRS</small></footer>
            </div>
          </div>
          <div class="card bg-dark text-white">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
              <footer class="text-muted"><small>Ari - Alumni FDKBD</small></footer>
            </div>
          </div>
          <div class="card bg-secondary text-white">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
              <footer class="text-white-50"><small>Hendra - Alumni Vokasi</small></footer>
            </div>
          </div>
          <div class="card bg-dark text-white">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
              <footer class="text-white-50"><small>Endri - Alumni FKK</small></footer>
            </div>
          </div>
          <div class="card bg-secondary text-white">
            <div class="card-body">
              <p class="card-text">"Kuliah di ITS membuka mata saya tentang betapa pentingnya data dalam pengambilan keputusan."</p>
              <footer class="text-white-50"><small>Fajar - Alumni SIMT</small></footer>
            </div>
          </div>
        </div>

      </div>

    </main>
  </body>
</html>
