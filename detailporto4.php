<?php include 'header.php'; ?>
<link href=https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css rel=stylesheet>
<style>body{background-color:#fffffe;font-family:'Segoe UI',sans-serif}.color-btn{border-radius:20px;font-weight:600;margin:5px 5px 10px;transition:.3s}.color-btn.active{box-shadow:0 0 0 3px rgba(0,0,0,.1)}.preview-scroll-wrapper{max-height:600px;overflow-y:auto;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,.1)}.preview-img{width:100%;height:auto;display:block}.btn-outline-danger-custom{--bs-btn-color:#59b6fd;--bs-btn-border-color:#59b6fd;--bs-btn-hover-color:#fff;--bs-btn-hover-bg:#59b6fd;--bs-btn-hover-border-color:#59b6fd;--bs-btn-focus-shadow-rgb:220,53,69;--bs-btn-active-color:#fff;--bs-btn-active-bg:#59b6fd;--bs-btn-active-border-color:#59b6fd;--bs-btn-active-shadow:inset 0 3px 5px rgba(0, 0, 0, 0.125);--bs-btn-disabled-color:#59b6fd;--bs-btn-disabled-bg:transparent;--bs-btn-disabled-border-color:#59b6fd;--bs-gradient:none}.btn-primary-custom{--bs-btn-color:#fff;--bs-btn-bg:#59b6fdff;--bs-btn-border-color:#59b6fdff;--bs-btn-hover-color:#fff;--bs-btn-hover-bg:#0b5ed7;--bs-btn-hover-border-color:#0a58ca;--bs-btn-focus-shadow-rgb:49,132,253;--bs-btn-active-color:#fff;--bs-btn-active-bg:#0a58ca;--bs-btn-active-border-color:#0a53be;--bs-btn-active-shadow:inset 0 3px 5px rgba(0, 0, 0, 0.125);--bs-btn-disabled-color:#fff;--bs-btn-disabled-bg:#59b6fdff;--bs-btn-disabled-border-color:#59b6fdff}.breadcrumb a{color:#59b6fd!important;text-decoration:none}.breadcrumb a:hover{text-decoration:underline;color:#0a58ca!important}</style>

<body>
<div class="container py-5">
<div class="row align-items-center">
<div class=container>
<nav style="--bs-breadcrumb-divider:'>'" aria-label=breadcrumb>
<ol class="breadcrumb bg-transparent px-0 py-2">
<li class=breadcrumb-item><a href=produk.php>Produk</a></li>
<li class="breadcrumb-item active" aria-current=page>Portofolio Lush</li>
</ol>
</nav>
</div>
<div class="col-md-6 mb-4 mb-md-0">
<div class=preview-scroll-wrapper>
<img id=previewImage src=assets/img/Screenshot_21-7-2025_2744_localhost.jpeg alt="Preview Blossom" class=preview-img>
</div>
</div>
<div class=col-md-6>
<h1 class="fw-bold mb-1" style=color:#59b6fdff>Portofolio Celeste</h1>
<h4 class="fw-bold mb-3" style=color:#fd5959ff>Mulai Rp.20.000/<small>bulan</small></h4>
<div class=mt-1>
<label class="form-label fw-semibold">Pilih Varian Warna:</label><br>
<button class="btn btn-outline-danger-custom color-btn active" onclick='changeImage("pink",this)'>Biru Info</button>
<button class="btn btn-outline-danger-custom color-btn" onclick='changeImage("cyan",this)'>Hitam</button>
<button class="btn btn-outline-danger-custom color-btn" onclick='changeImage("lilac",this)'>Merah</button>
<button class="btn btn-outline-danger-custom color-btn" onclick='changeImage("abu",this)'>Abu-abu</button>
<button class="btn btn-outline-danger-custom color-btn" onclick='changeImage("kuning",this)'>Kuning</button>
<button class="btn btn-outline-danger-custom color-btn" onclick='changeImage("biru",this)'>Biru</button>
<button class="btn btn-outline-danger-custom color-btn" onclick='changeImage("hijau",this)'>Hijau</button>
<button class="btn btn-outline-danger-custom color-btn" onclick=customColorWhatsApp()>Custom Warna</button>
</div>
<button class="btn btn-primary-custom mt-1" onclick=pesanSekarang()>
<i class="bi bi-cart me-2"></i> Pesan Sekarang
</button>
<hr class=my-3>
<h5 class="fw-semibold mt-4">Tersedia dalam 2 paket:</h5>
<h6 class="fw-bold mb-1" style=color:#217fc7ff>Paket Biasa – Rp 20.000/bulan</h6>
<p class=mb-1><i class="bi bi-check-circle-fill text-body-secondary mb-1"></i> Desain siap pakai (template tetap)</p>
<p class=mb-1><i class="bi bi-check-circle-fill text-body-secondary mb-1"></i> Link bisa langsung dikirim ke HRD</p>
<h6 class="fw-bold mb-1" style=color:#217fc7ff>Paket Custom – Rp 30.000/bulan</h6>
<p class=mb-1><i class="bi bi-check-circle-fill text-body-secondary mb-1"></i> Bisa pilih warna</p>
<p class=mb-1><i class="bi bi-check-circle-fill text-body-secondary mb-1"></i> Link bisa langsung dikirim ke HRD</p>
<h5 class="fw-semibold mt-2 mb-1"> Note</h5>
<p class=mb-1> Pembayaran DP 50% terlebih dahulu</p>
</div>
</div>
</div>
<script>function changeImage(e,s){document.getElementById("previewImage").src={pink:"assets/img/Screenshot_21-7-2025_2744_localhost.jpeg",cyan:"assets/img/Screenshot_21-7-2025_14952_localhost.jpeg",lilac:"assets/img/Screenshot_21-7-2025_21644_localhost.jpeg",abu:"assets/img/Screenshot_21-7-2025_21338_localhost.jpeg",kuning:"assets/img/Screenshot_21-7-2025_21545_localhost.jpeg",biru:"assets/img/Screenshot_21-7-2025_237_localhost.jpeg",hijau:"assets/img/Screenshot_21-7-2025_15750_localhost.jpeg"}[e],document.querySelectorAll(".color-btn").forEach((e=>e.classList.remove("active"))),s.classList.add("active")}</script>
<script>function customColorWhatsApp(){const a=`https://wa.me/6282281980530?text=${encodeURIComponent("Halo! Saya tertarik dengan etalase Portofolio Celeste.\nBoleh tanya dulu, apakah bisa request warna berikut:\nWarna: (isi warna yang diinginkan)\n\nTerima kasih! Saya tunggu informasi dari rumah mungilmu")}`;window.open(a,"_blank")}</script>
<script>function pesanSekarang(){const n=`https://wa.me/6282281980530?text=${encodeURIComponent('Halo, saya ingin memesan Portofolio Celeste.\n\nNama:\nNo WhatsApp:\nWarna: (jika pesan warna custom isi dengan "custom")\n\nTerima kasih, saya tunggu informasinya ya')}`;window.open(n,"_blank")}</script>
</body>