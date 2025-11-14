<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Pesan Kontak | CV - Anisa Fadillah M</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      background-color: #fff6f9;
      font-family: "Poppins", sans-serif;
    }

    /* 🌸 Navbar */
    nav {
      background-color: #ffffff;
      box-shadow: 0 2px 6px rgba(255, 182, 193, 0.3);
      border-bottom: 2px solid #ffd6e8;
    }
    nav .navbar-brand {
      font-weight: 700;
      color: #d63384;
      font-size: 1.3rem;
      letter-spacing: 0.5px;
    }
    nav .navbar-brand:hover {
      color: #ff69b4;
    }
    nav .nav-link {
      color: #d63384 !important;
      font-weight: 500;
      margin-left: 12px;
    }
    nav .nav-link:hover {
      color: #ff69b4 !important;
    }

    /* 🌷 Kontainer tabel */
    .container {
      background: white;
      margin-top: 40px;
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 0 15px rgba(255, 182, 193, 0.3);
    }

    h2 {
      color: #d63384;
      font-weight: 600;
      text-align: center;
      margin-bottom: 20px;
    }

    /* 💖 Tabel */
    table th {
      background-color: #ffb6c1;
      color: white;
      text-align: center;
    }
    .table-hover tbody tr:hover {
      background-color: #fff0f5;
    }

    /* 💕 Tombol Hapus */
    .btn-delete {
      background-color: #ff7eb9;
      color: white;
      border: none;
      border-radius: 8px;
      padding: 6px 12px;
      text-decoration: none;
      transition: background-color 0.2s ease;
    }
    .btn-delete:hover {
      background-color: #ff4f81;
    }
  </style>
</head>
<body>

<!-- 🌸 Navbar -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid px-4">
    <a class="navbar-brand" href="#">💖 CV - Anisa Fadillah M</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('/') ?>">🏠 Lihat Website</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('admin/messages') ?>">📬 Pesan</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- 🌷 Daftar Pesan -->
<div class="container">
  <h2>Daftar Pesan Masuk</h2>
  <hr>

  <?php if(session()->getFlashdata('success')): ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '<?= session()->getFlashdata('success') ?>',
        background: '#fff0f6',
        color: '#d63384',
        confirmButtonColor: '#ff7eb9',
        confirmButtonText: 'Oke 💖'
      });
    </script>
  <?php endif; ?>

  <table class="table table-bordered table-hover mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Subjek</th>
        <th>Pesan</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($contacts)): ?>
        <?php $no = 1; foreach ($contacts as $contact): ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= esc($contact['name']); ?></td>
            <td><?= esc($contact['email']); ?></td>
            <td><?= esc($contact['subject']); ?></td>
            <td><?= esc($contact['message']); ?></td>
            <td><?= esc($contact['created_at']); ?></td>
            <td class="text-center">
              <button class="btn-delete" onclick="hapusPesan(<?= $contact['id'] ?>)">Hapus</button>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="7" class="text-center">Belum ada pesan masuk 💌</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<!-- 💖 SweetAlert Hapus -->
<script>
  function hapusPesan(id) {
    Swal.fire({
      title: 'Kamu yakin?',
      text: "Pesan ini akan dihapus selamanya 😢",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#ff7eb9',
      cancelButtonColor: '#aaa',
      confirmButtonText: 'Ya, hapus 💔',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "<?= base_url('admin/delete/') ?>" + id;
      }
    });
  }
</script>

</body>
</html>
