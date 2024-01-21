<?php include 'header.php' ?>

  <?php include 'navbar.php' ?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <!-- welcome  -->
        <div class="col">
          <div class="card info-card sales-card" style="height:110px">
            <div class="card-body">
              <h5 class="card-title text-center pb-0">Selamat Datang <span class="fs-6 fw-bold text-uppercase text-danger"><?= $_SESSION['username']?></span> <i class="bi bi-person-circle"></i>
              </h5>
              <h5 class="card-title text-center pt-0 pb-0">Di Sistem Informasi Surat Pendamping Ijazah (SISKPI) <i class="bi bi-laptop"></i></h5>
              <h5 class="card-title text-center pt-0">Universitas Katolik Santo Thomas</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php include 'footer.php' ?>