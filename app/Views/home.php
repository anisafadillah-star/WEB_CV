<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title); ?></title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CSS -->
  <link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">

</head>
<body>

<!-- HEADER -->
<header id="header" class="fixed-top bg-white shadow-sm py-2">
  <div class="container d-flex justify-content-between align-items-center">
    <h1 class="logo mb-0 fw-bold">
      <a href="#" class="text-pink text-decoration-none">Anisa Fadillah Maulana <span class="text-dark">| CV</span></a>
    </h1>

    <nav id="navbar" class="navbar">
      <ul class="d-flex align-items-center mb-0 gap-4">
        <li><a class="nav-link scrollto active" href="#home">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#resume">Resume</a></li>
        <li><a class="nav-link scrollto" href="#skills">Skills</a></li>
        <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      </ul>

      <div class="social-icons d-flex gap-3 ms-3">
        <a href="<?= esc($biodata['instagram'] ?? '#'); ?>" class="text-pink fs-5"><i class="bi bi-instagram"></i></a>
        <a href="<?= esc($biodata['linkedin'] ?? '#'); ?>" class="text-pink fs-5"><i class="bi bi-linkedin"></i></a>
        <a href="<?= esc($biodata['github'] ?? '#'); ?>" class="text-pink fs-5"><i class="bi bi-github"></i></a>
      </div>
    </nav>
  </div>
</header>

<!-- HERO -->
<section id="home" class="hero-section">
  <div class="overlay"></div>
  <div class="container hero-content">
    <h1 class="fw-bold mb-3">Hai, Aku <span class="text-highlight"><?= esc($biodata['nama']); ?></span></h1>
    <h5 class="mb-4"><?= esc($biodata['posisi']); ?> 💻</h5>
    <a href="#about" class="btn btn-pink px-4 py-2 rounded-pill shadow">About Me</a>
  </div>
</section>

<!-- ABOUT -->
<section id="about" class="about section-bg py-5">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold text-pink">About Me</h2>
      <p class="text-muted">Sedikit tentang saya</p>
    </div>

    <div class="row justify-content-center align-items-center gy-4">
      <!-- FOTO -->
      <div class="col-lg-4 text-center">
        <div class="about-img-wrapper">
          <img src="<?= base_url('img/' . esc($biodata['foto'])); ?>" alt="Foto Profil" class="profile-img img-fluid shadow">
        </div>
      </div>

      <!-- DESKRIPSI -->
      <div class="col-lg-7 about-text">
        <h3 class="fw-bold text-pink mb-3"><?= esc($biodata['posisi']); ?></h3>
        <p class="fst-italic mb-4"><?= esc($biodata['deskripsi']); ?></p>

        <div class="row g-3">
          <div class="col-md-6">
            <p><strong>Kota:</strong> <?= esc($biodata['kota']); ?></p>
            <p><strong>Telepon:</strong> <?= esc($biodata['telepon']); ?></p>
            <p><strong>Email:</strong> <?= esc($biodata['email']); ?></p>
          </div>
          <div class="col-md-6">
            <p><strong>Umur:</strong> <?= esc($biodata['umur']); ?> Tahun</p>
            <p><strong>Pendidikan:</strong> <?= esc($biodata['pendidikan']); ?></p>
            <p><strong>Freelance:</strong> <?= esc($biodata['freelance']); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- RESUME -->
<section id="resume" class="py-5 bg-white">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold text-pink">Resume</h2>
      <p class="text-muted">Riwayat pendidikan dan pengalaman aku 📚💼</p>
    </div>

    <div class="row gy-4">
      <!-- Pendidikan -->
      <div class="col-md-6">
        <h4 class="fw-bold text-pink mb-3">Pendidikan</h4>
        <?php if (!empty($pendidikan)): ?>
          <ul class="list-group list-group-flush">
            <?php foreach ($pendidikan as $edu): ?>
              <li class="list-group-item bg-transparent border-0 ps-0 mb-3">
                <h5 class="fw-semibold mb-1"><?= esc($edu['sekolah']); ?></h5>
                <small class="text-muted"><?= esc($edu['tahun_mulai']); ?> - <?= esc($edu['tahun_selesai']); ?></small>
                <p class="mb-0"><?= esc($edu['jurusan']); ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <p class="text-muted fst-italic">Belum ada data pendidikan.</p>
        <?php endif; ?>
      </div>

      <!-- Pengalaman -->
      <div class="col-md-6">
        <h4 class="fw-bold text-pink mb-3">Pengalaman</h4>
        <?php if (!empty($pengalaman)): ?>
          <ul class="list-group list-group-flush">
            <?php foreach ($pengalaman as $exp): ?>
              <li class="list-group-item bg-transparent border-0 ps-0 mb-3">
                <h5 class="fw-semibold mb-1"><?= esc($exp['posisi']); ?></h5>
                <small class="text-muted"><?= esc($exp['tahun_mulai']); ?> - <?= esc($exp['tahun_selesai']); ?></small>
                <p class="mb-0"><?= esc($exp['deskripsi']); ?></p>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php else: ?>
          <p class="text-muted fst-italic">Belum ada data pengalaman.</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills" class="py-5 bg-white">
  <div class="container text-center">
    <h2 class="fw-bold text-pink mb-4">Skills</h2>
    <div class="row justify-content-center">
      <?php if (!empty($skills)): ?>
        <?php foreach ($skills as $skill): ?>
          <div class="col-md-4 mb-3">
            <div class="p-3 bg-light rounded shadow-sm">
              <h5 class="text-pink"><?= esc($skill['name']); ?></h5>
              <div class="progress mt-2" style="height: 8px;">
                <div class="progress-bar bg-pink" style="width: <?= esc($skill['level']); ?>%;"></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-muted">Belum ada data skill.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio" class="py-5 bg-white">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold text-pink">Portfolio</h2>
      <p class="text-muted">Beberapa project yang pernah saya buat</p>
    </div>

    <div class="row g-4">
      <?php if (!empty($portfolio)): ?>
        <?php foreach ($portfolio as $item): ?>
          <div class="col-md-4">
            <div class="card border-0 shadow-sm">
              <img src="<?= base_url('img/' . esc($item['image'])); ?>" class="card-img-top rounded-top" alt="<?= esc($item['title']); ?>">
              <div class="card-body">
                <h5 class="fw-bold text-pink"><?= esc($item['title']); ?></h5>
                <p class="text-muted"><?= esc($item['description']); ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center text-muted">Belum ada portfolio yang ditambahkan.</p>
      <?php endif; ?>
    </div>
  </div>
</section>
<!-- CONTACT -->
<section id="contact" class="py-5" style="background-color: #fffafc;">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="fw-bold text-pink display-6">Contact</h2>
      <p class="text-muted">Aku senang banget kalau kamu mau menghubungi aku! 💌</p>
    </div>

    <!-- Info 3 kolom -->
    <div class="row g-4 text-center mb-5">
      <div class="col-md-4">
        <div class="info-box p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-geo-alt fs-2 text-pink mb-3"></i>
          <h5 class="fw-bold text-pink">Address</h5>
          <p class="text-muted small"><?= esc($biodata['alamat']); ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-box p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-telephone fs-2 text-pink mb-3"></i>
          <h5 class="fw-bold text-pink">Call Me</h5>
          <p class="text-muted small"><?= esc($biodata['telepon']); ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-box p-4 bg-white rounded shadow-sm h-100">
          <i class="bi bi-envelope fs-2 text-pink mb-3"></i>
          <h5 class="fw-bold text-pink">Email</h5>
          <p class="text-muted small"><?= esc($biodata['email']); ?></p>
        </div>
      </div>
    </div>

    <!-- Form Contact -->
<div class="row justify-content-center">
  <div class="col-lg-8">

    <!-- ALERT di atas form -->
    <?php if (session()->getFlashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show text-center mb-4" role="alert" style="animation: fadeInDown 0.6s;">
        <?= session()->getFlashdata('success'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php elseif (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger alert-dismissible fade show text-center mb-4" role="alert" style="animation: fadeInDown 0.6s;">
        <?= session()->getFlashdata('error'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <form action="<?= base_url('contact/send'); ?>" method="post" class="bg-white p-5 rounded-4 shadow-sm border-pink">
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <input type="text" name="name" class="form-control form-control-lg" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
          <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email" required>
        </div>
      </div>
      <div class="mb-3">
        <input type="text" name="subject" class="form-control form-control-lg" placeholder="Subject" required>
      </div>
      <div class="mb-4">
        <textarea name="message" rows="5" class="form-control form-control-lg" placeholder="Message" required></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-pink px-5 py-2 fw-semibold">Send Message</button>
      </div>
    </form>
  </div>
</div>
</section>

<footer class="text-center py-3" style="background-color:#f8bbd0; color:white;">
  <p class="mb-0">&copy; <?= date('Y'); ?> <?= esc($biodata['nama']); ?>. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('#header');
  navbar.classList.toggle('scrolled', window.scrollY > 50);
});
</script>

</body>
</html>
