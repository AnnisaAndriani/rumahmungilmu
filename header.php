<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Rumah Mungilmu</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/favicon.ico">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Font (Optional) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
      padding-top: 20px;
      /* Supaya konten tidak ketutup navbar */
      
    }

    /* Sticky Navbar */
    .navbar-custom {
      background-color: #59b6fdff;
      border-radius: 50px;
      padding: 10px 30px;
      width: 90%;
      max-width: 1100px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: 0.3s ease;


      /* Sticky effect */
      position: sticky;
      top: 20px;
      z-index: 1000;
      margin: 0 auto;
    }

    .nav-link {
      color: #ffffff !important;
      transition: 0.3s;
    }

    .nav-link:hover,
    .nav-link.active {
      color: #ffffff !important;
    }

    @media (max-width: 768px) {
      .navbar-custom {
        border-radius: 0;
        top: 0;
      }
    }

    /* .nav-link {
  color: #000;
  transition: 0.3s;
}

.nav-link:hover {
  color: #ffffff !important;
}

.nav-link.active {
  font-weight: bold;
  color: #000 !important; /* default aktif hitam 
  border-radius: 10px;
  padding: 5px 10px;
}

/* Hanya untuk menu aktif di section khusus 
.nav-link.active.white {
  color: #fff !important;
}
 */
  </style>


</head>

<body>

  <!-- HEADER -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
    <div class="container-fluid">
<a class="navbar-brand d-flex align-items-center" style="color: #ffffffff;" href="#">
  <img src="assets/img/logo.png" alt="Logo Rumah Mungilmu" width="30" height="30" class="me-2">
  Rumah Mungilmu
</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php echo ($current == 'index.php') ? 'active' : ''; ?>" href="index.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($current == 'produk.php') ? 'active' : ''; ?>" href="produk.php">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($current == 'tentang.php') ? 'active' : ''; ?>" href="tentang.php">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($current == 'kontak.php') ? 'active' : ''; ?>" href="kontak.php">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", () => {
      let current = "";

      sections.forEach((section) => {
        const sectionTop = section.offsetTop - 200;
        const sectionHeight = section.clientHeight;
        if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
          current = section.getAttribute("id");
        }
      });

      navLinks.forEach((link) => {
        const href = link.getAttribute("href");
        const targetId = href.substring(href.indexOf("#") + 1);

        // Reset semua
        link.classList.remove("active");
        link.classList.remove("white");

        // Aktifkan hanya jika cocok dengan section saat ini
        if (targetId === current) {
          link.classList.add("active");

          // Tambahkan warna putih hanya untuk section khusus
          if (current === "tentangsaya" || current === "sertifikat") {
            link.classList.add("white");
          }
        }
      });
    });

    // Saat diklik, langsung ubah juga
    navLinks.forEach(link => {
      link.addEventListener("click", function() {
        const href = this.getAttribute("href");
        const targetId = href.substring(href.indexOf("#") + 1);

        navLinks.forEach(l => {
          l.classList.remove("active", "white");
        });

        this.classList.add("active");

        if (targetId === "tentangsaya" || targetId === "sertifikat") {
          this.classList.add("white");
        }
      });
    });
  });
</script>