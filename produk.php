<?php include 'header.php'; ?>
<style>body{font-family:'Segoe UI',sans-serif}.btn-primary-custom{--bs-btn-color:#fff;--bs-btn-bg:#59b6fdff;--bs-btn-border-color:#59b6fdff;--bs-btn-hover-color:#fff;--bs-btn-hover-bg:#0b5ed7;--bs-btn-hover-border-color:#0a58ca;--bs-btn-focus-shadow-rgb:49,132,253;--bs-btn-active-color:#fff;--bs-btn-active-bg:#0a58ca;--bs-btn-active-border-color:#0a53be;--bs-btn-active-shadow:inset 0 3px 5px rgba(0, 0, 0, 0.125);--bs-btn-disabled-color:#fff;--bs-btn-disabled-bg:#59b6fdff;--bs-btn-disabled-border-color:#59b6fdff}.btn-outline-primary-custom{--bs-btn-color:#59b6fdff;--bs-btn-border-color:#59b6fdff;--bs-btn-hover-color:#fff;--bs-btn-hover-bg:#59b6fdff;--bs-btn-hover-border-color:#59b6fdff;--bs-btn-focus-shadow-rgb:13,110,253;--bs-btn-active-color:#fff;--bs-btn-active-bg:#59b6fdff;--bs-btn-active-border-color:#59b6fdff;--bs-btn-active-shadow:inset 0 3px 5px rgba(0, 0, 0, 0.125);--bs-btn-disabled-color:#59b6fdff;--bs-btn-disabled-bg:transparent;--bs-btn-disabled-border-color:#59b6fdff;--bs-gradient:none}</style>
<section class="py-5 bg-light">
<div class=container>
<div class="text-center mb-4">
<h2 class=fw-bold>Produk Kami</h2>
<p class=text-muted>Pilih kategori untuk melihat jasa sesuai kebutuhan Anda.</p>
</div>
<div class="text-center mb-4">
<button class="btn btn-outline-primary-custom me-2 filter-btn active" data-filter=all>All</button>
<button class="btn btn-outline-primary-custom me-2 filter-btn" data-filter=portofolio>Portofolio</button>
<button class="btn btn-outline-primary-custom filter-btn" data-filter=undangan>Undangan</button>
</div>
<div class="row g-4" id=produk-list>
<div class="col-md-6 col-lg-4 produk-item portofolio">
<div class="card border-0 shadow-sm h-100">
<img src=assets/img/blossom-cover.png class=card-img-top alt=Portofolio>
<div class=card-body>
<h5 class=card-title>Portofolio Blossom</h5>
<p style=color:#7b7b7bff>Portofolio digital modern untuk personal branding.</p>
<a href=detailporto1.php class="btn btn-primary-custom btn-sm">Lihat Detail</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 produk-item portofolio">
<div class="card border-0 shadow-sm h-100">
<img src=assets/img/Serene.png class=card-img-top alt="Undangan Digital 1">
<div class=card-body>
<h5 class=card-title>Portofolio Serene</h5>
<p style=color:#7b7b7bff>Portofolio digital modern untuk personal branding.</p>
<a href=detailporto2.php class="btn btn-primary-custom btn-sm">Lihat Detail</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 produk-item portofolio">
<div class="card border-0 shadow-sm h-100">
<img src=assets/img/darkpink.png class=card-img-top alt=Portofolio>
<div class=card-body>
<h5 class=card-title>Portofolio Celeste</h5>
<p style=color:#7b7b7bff>Portofolio digital modern untuk personal branding.</p>
<a href=detailporto3.php class="btn btn-primary-custom btn-sm">Lihat Detail</a>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 produk-item portofolio">
<div class="card border-0 shadow-sm h-100">
<img src=assets/img/info.png class=card-img-top alt="Undangan Digital 2">
<div class=card-body>
<h5 class=card-title>Portofolio Lush </h5>
<p class=card-text>Portofolio digital modern untuk personal branding.</p>
<a href=detailporto4.php class="btn btn-primary-custom btn-sm">Lihat Detail</a>
</div>
</div>
</div>
</div>
<div class="text-center my-5" id=kosong-placeholder style=display:none>
<img src=assets/img/kosong.svg alt=Kosong style=max-width:250px>
<p class="text-muted mt-3">Belum ada produk untuk kategori ini.</p>
</div>
</div>
</section>
<script>const buttons=document.querySelectorAll(".filter-btn"),items=document.querySelectorAll(".produk-item"),placeholder=document.getElementById("kosong-placeholder");buttons.forEach((e=>{e.addEventListener("click",(()=>{buttons.forEach((e=>e.classList.remove("active"))),e.classList.add("active");const t=e.getAttribute("data-filter");let l=0;items.forEach((e=>{"all"===t||e.classList.contains(t)?(e.style.display="block",l++):e.style.display="none"})),placeholder.style.display=0===l?"block":"none"}))}))</script>
<?php include 'footer.php'; ?>